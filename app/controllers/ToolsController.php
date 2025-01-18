<?php

use Aws\Exception\AwsException;

class ToolsController extends MainController
{

    public $ttfb_region;
    public $ttfb_url;

    private $lambdaClientFactory;
    private $toolsModel;
    private $toolsMetadataModel;

    public function __construct(
        callable $lambdaClientFactory,
        ToolsModel $toolsModel,
        ToolsMetadataModel $toolsMetadataModel
    ) {
        $this->lambdaClientFactory = $lambdaClientFactory;
        $this->toolsModel = $toolsModel;
        $this->toolsMetadataModel = $toolsMetadataModel;
    }

    public function main($method, $vars = null)
    {

        if (method_exists($this, $method)) {
            $this->$method($vars);
        }
    }

    public function ttfb_check_page()
    {
        $props = [];
        $props["seo_data"] = [];
        $props["seo_data"]["title"] = "Check TTFB";
        $props["tools_page"] = true;

        $this->render('header', $props);
        $this->render('ttfb-check', $props);
        $this->render('footer', $props);
    }

    public function ttfb_test_stream()
    {
        header("Content-Type: text/event-stream");
        header("Cache-Control: no-cache");
        header("Connection: keep-alive");

        // Disable output buffering
        ini_set('output_buffering', 'off');
        ini_set('zlib.output_compression', 'off');
        ini_set('implicit_flush', 'on');
        ob_implicit_flush(true);

        // Clear any existing buffers
        while (ob_get_level() > 0) {
            ob_end_flush();
        }

        echo "retry: 1000\n"; // Reconnection time in milliseconds
        echo "\n"; // Initial padding
        

        if(empty($_GET["test_key"]) ||
            empty($_GET["test_url"]) ||
            empty($_GET["test_locations"]) ||
            empty($_GET["test_date"])) {
                $msg = json_encode(["status" => false, "error" => "required fields missing"]);
                echo "event: [end]\n";
                echo "data: $msg\n\n";
                // ob_flush();
                flush();
        }
        else {
            $data = [
                "test_key" => $_GET["test_key"],
                "test_url" => $_GET["test_url"],
                "test_locations" => $_GET["test_locations"],
                "test_date" => $_GET["test_date"]
            ];

            $string_to_hash = $data["test_date"];
            $string_to_hash .= $data["test_url"];

            foreach ($data["test_locations"] as $l) {
                $string_to_hash .= $l;
            }

            $hash_verification = $this->toolsModel->verify_ttfb_test_hash($data["test_key"], $string_to_hash);

            if ($hash_verification["status"] !== true) {
                $msg = json_encode($hash_verification);
                echo "event: testError\n";
                echo "data: invalid data submitted\n\n";
                flush();
                exit;
            }

            $test = $hash_verification["test"];

            if($test["test_status"] !== "initiated") {
                $msg = json_encode(["status" => false, "error" => "test has already run"]);
                echo "event: testError\n";
                echo "data: test was run before, maybe try again\n\n";
                flush();
                exit;
            }
            $this->run_ttfb_test($data, $test);

            // Send a final message before closing
            echo "event: [end]\n";
            echo "data: Test finished\n\n";
            // ob_flush();
            flush();
        }

    }

    public function ttfb_check_post()
    {
        $rate_limits = $this->ttfb_rate_limiter();

        $rate_limit_errors = [
            "hourly" => "currently busy, try after an hour",
            "daily" => "currently experiencing high load, please try later",
            "monthly" => "currently experiencing high load, we need to work on it",
            "limit_fetch_error" => "limit fetch error"
        ];


        if($rate_limits["exceeded"]) {
            echo json_encode(["status" => false, "error" => $rate_limit_errors[$rate_limits["exceeded"]]]);
            exit;
        }

        // additional check

        $count_last_30_mins = $this->toolsModel->getTtfbTestCountLast30Mins();

        if($count_last_30_mins !== false) {
            if((int)$count_last_30_mins > 30) {
                echo json_encode(["status" => false, "error" => "currently busy, try after some time"]);
                exit;
            }
        }


        $this->create_ttfb_test();
    }

    private function create_ttfb_test()
    {
        header('Content-Type: application/json');

        /**
         * region and url are required
         */

        if (!isset($_POST['locations']) || !isset($_POST['url'])) {
            echo json_encode(["status" => false, "error" => "invalid request"]);
            exit;
        }

        $locations = $_POST['locations'];
        $url = $_POST['url'];

        $locations_validity = $this->validate_locations($locations);

        if (!$locations_validity) {
            echo json_encode(["status" => false, "error" => "unsupported locations", "locations" => $locations]);
            exit;
        }

        // create a new test

        $test_date = date('Y-m-d H:i:s');
        $string_to_hash = $test_date;
        $string_to_hash .= $url;

        foreach ($locations as $l) {
            $string_to_hash .= $l;
        }

        $data = [
            "test_key" => bin2hex(string: random_bytes(length: 16)),
            "test_url" => $url,
            "test_locations" => $locations,
            "test_user" => 0,
            "test_env" => _is_local() ? 'staging' : 'production',
            "test_date" => $test_date,
            "test_hash" => hash('sha256', $string_to_hash),
            "test_status" => "initiated"
        ];

        $test_creation = $this->toolsModel->create_ttfb_test($data);

        if ($test_creation["status"] === true) {
            echo json_encode([
                "status" => true,
                "test_key" => $data["test_key"],
                "test_url" => $data["test_url"],
                "test_locations" => $data["test_locations"],
                "test_date" => $data["test_date"]
            ]);
            exit;
        } else {
            echo json_encode($test_creation);
            exit;
        }
    }

    private function run_ttfb_test($data, $test)
    {

        $this->toolsModel->set_ttfb_test_status($test["test_key"], "running");

        $lambda_cities_regions = [
            "uae" => "me-central-1",
            "london" => "eu-west-2",
            "sydney" => "ap-southeast-2",
            "saopaulo" => "sa-east-1",
            "capetown" => "af-south-1"
        ];

        $do_function_urls = [
            "bangalore" => $_ENV["DO_SERVERLESS_FUNCTION_URL_TTFB_CHECK_BANGALORE"],
            "newyork" => $_ENV["DO_SERVERLESS_FUNCTION_URL_TTFB_CHECK_NEWYORK"]
        ];

        $warmups = [];

        echo "event: progressMsg\n";
        echo "data: Getting things ready...\n\n";
        flush();

        foreach($data["test_locations"] as $location) {
            if(array_key_exists($location, $lambda_cities_regions)) {
                echo "event: progressMsg\n";
                echo "data: pinging $location...\n\n";
                flush();
                $warmups[$location] = $this->warmup_lambda_function(["function_name" => "ttfbCheck", "region" => $lambda_cities_regions[$location]]);
            }
        }

        echo "event: progressMsg\n";
        echo "data: Running test...\n\n";
        flush();

        foreach ($data["test_locations"] as $location) {

            if(array_key_exists($location, $lambda_cities_regions)) {

                if($warmups[$location]["status"] !== true) {
                    $msg = json_encode(["location" => $location, "status" => false, "error" => "could not connect"]);

                    echo "event: locResult\n";
                    echo "data: $msg\n\n";
                    // ob_flush();
                    flush();

                    continue;
                }

                echo "event: progressMsg\n";
                echo "data: Testing from $location...\n\n";
                flush();
            
                $response = $this->invoke_lambda_function('ttfbCheck', $lambda_cities_regions[$location], ['url' => $data["test_url"]]);

                $msg = json_encode(array_merge(["location" => $location], $response));

                echo "event: locResult\n";
                echo "data: $msg\n\n";
                // ob_flush();
                flush();

                sleep(1);
            }
            else if(array_key_exists($location, $do_function_urls)) {
                $response = $this->invoke_do_serverless_function($do_function_urls[$location], ['url' => $data["test_url"]]);
                $msg = json_encode(array_merge(["location" => $location], $response));

                echo "event: locResult\n";
                echo "data: $msg\n\n";
                // ob_flush();
                flush();

                sleep(1);
            }

        }

        echo "event: progressMsg\n";
        echo "data: wrapping up...\n\n";
        flush();

        $this->toolsModel->set_ttfb_test_status($test["test_key"], "completed");

    }

    private function invoke_lambda_function($function_name, $region, $data)
    {

        $client = ($this->lambdaClientFactory)($region);

        $params = [
            'FunctionName' => $function_name,
            'Payload' => json_encode($data),
        ];

        try {
            $result = $client->invoke($params);
            $responsePayload = $result['Payload']->getContents();

            $decodedResponse = json_decode($responsePayload, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                return $decodedResponse;
            } else {
                return ["status" => false, "error" => "Error decoding JSON: " . json_last_error_msg()];
            }

        } catch (AwsException $e) {
            return ["status" => false, "error" => "error connecting remote"];
        }
    }

    private function invoke_do_serverless_function($function_url, $data, $api_key = null)
    {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $function_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            $api_key ? "Authorization: Bearer $api_key" : '',
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);
            return ["status" => false, "error" => "could not connect test server"];
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if($httpCode >= 200 && $httpCode < 300) {
            return json_decode($response, true);
        }

        return ["status" => false, "error" => "error {$httpCode} from test server: {$response}"];

    }

    private function validate_locations($locations)
    {

        $valid = true;

        /**
         * currently seven locations supported
         */

        $allowed_locations = ["bangalore", "sydney", "london", "newyork", "saopaulo", "capetown", "uae"];

        foreach ($locations as $location) {
            if (!in_array($location, $allowed_locations)) {
                $valid = false;
                break;
            }
        }

        return $valid;

    }

    private function warmup_lambda_function($fn)
    {
        $data = [
            "warmup" => true
        ];
        
        $response = $this->invoke_lambda_function($fn["function_name"], $fn["region"], $data);

        return $response;
    }

    private function ttfb_rate_limiter() {
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        $hour = date('H');

        $envn = _is_local() ? "staging" : "prod";

        $keys = [
            "monthly" => "ttfb_check_count_{$year}_{$month}_{$envn}",
            "daily" => "ttfb_check_count_{$year}_{$month}_{$day}_{$envn}",
            "hourly" => "ttfb_check_count_{$year}_{$month}_{$day}_{$hour}_{$envn}",
        ];

        foreach(["monthly", "daily", "hourly"] as $time_period) {
            $getLimit = $this->toolsMetadataModel->getMetaData("ttfb_check_{$time_period}_max_limit");

            if(!$getLimit["status"]) {
                return ["exceeded" => "limit_fetch_error"];
            }

            $limit = (int)$getLimit["result"];

            $current_count = $this->toolsMetadataModel->getMetaData($keys[$time_period]);
    
            if($current_count["status"] === true) {
                if((int)$current_count["result"] >= $limit) {
                   return ["exceeded" => $time_period];
                }
                else {
                    $this->toolsMetadataModel->incrementTtfbTestCount($keys[$time_period], $limit);
                }
            }
            else {
                if($current_count["errorCode"] === "missing") {
                    $this->toolsMetadataModel->addMetaData($keys[$time_period], "1");
                }
                else {
                    return ["exceeded" => "limit_fetch_error"];
                }
            }
        }

        return ["exceeded" => false];
    }

}