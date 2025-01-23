<?php

use Aws\Exception\AwsException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Promise\Utils;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;

class ToolsController extends MainController
{

    public $ttfb_region;
    public $ttfb_url;

    private $lambdaClientFactory;
    private $toolsModel;
    private $toolsMetadataModel;

    private $httpClient;

    public function __construct(
        callable $lambdaClientFactory,
        ToolsModel $toolsModel,
        ToolsMetadataModel $toolsMetadataModel,
        Client $httpClient
    ) {
        $this->lambdaClientFactory = $lambdaClientFactory;
        $this->toolsModel = $toolsModel;
        $this->toolsMetadataModel = $toolsMetadataModel;
        $this->httpClient = $httpClient;
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
        header('Content-Type: application/json');

        /**
         * catch honeypot
         */

        if(!empty($_POST['website-title'])) {
            http_response_code(400);
            echo json_encode(["status" => false, "error" => "access denied"]);
            exit;
        }

        /**
         * catch speedy submissions
         */

        if(time() - (int)$_POST["t2rt"] < 2) {
            http_response_code(400);
            echo json_encode(["status" => false, "error" => "unexpected behaviour"]);
            exit;
        }

        /**
         * region and url are required
         */

        if (!isset($_POST['locations']) || !isset($_POST['url'])) {
            echo json_encode(["status" => false, "error" => "invalid request"]);
            exit;
        }

        // url validation

        if (!filter_var($_POST['url'], FILTER_VALIDATE_URL) || !preg_match('/^https?:\/\//', $_POST['url'])) {
            echo json_encode(["status" => false, "error" => "the request must contain a valid http or https url"]);
            exit;
        }

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

        // limit by ip

        $ip_hash = hash('sha256', $_SERVER['REMOTE_ADDR']);

        $ip_count_last_30_mins = $this->toolsModel->getIpRequestCountLast30Mins($ip_hash);

        if($ip_count_last_30_mins !== false) {
            if((int)$ip_count_last_30_mins > 10) {
                echo json_encode(["status" => false, "error" => "too many requests in a short span, try after 30 minutes", "req_count" => (int)$ip_count_last_30_mins]);
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
            "test_status" => "initiated",
            "ip_hash" => hash('sha256', $_SERVER['REMOTE_ADDR']),
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
        $run_start_time = microtime(true);

        $this->toolsModel->set_ttfb_test_status($test["test_key"], "running");

        $lambda_cities_regions = [
            "mumbai" => "ap-south-1",
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

        $getting_up_time = (microtime(true) - $run_start_time) * 1000;
        echo "event: progressMsg\n";
        echo "data: getting up at $getting_up_time...\n\n";
        flush();

        $warmups = [];
        $warmup_promises = [];

        foreach($data["test_locations"] as $location) {
            if(array_key_exists($location, $lambda_cities_regions)) {
                echo "event: progressMsg\n";
                echo "data: pinging $location...\n\n";
                flush();
                $warmup_promises[$location] = $this->warmup_lambda_function(["function_name" => "ttfbCheck", "region" => $lambda_cities_regions[$location]]);

            }
        }

        $warming_up_time = (microtime(true) - $run_start_time) * 1000;
        echo "event: progressMsg\n";
        echo "data: warming up at $warming_up_time...\n\n";
        flush();

        $warmup_responses = Utils::settle($warmup_promises)->wait();

        $warming_up_finished_time = (microtime(true) - $run_start_time) * 1000;
        echo "event: progressMsg\n";
        echo "data: warming up finished at $warming_up_finished_time...\n\n";
        flush();

        foreach($warmup_responses as $location => $warmup_response) {
            if($warmup_response['state'] === 'fulfilled') {
                $result = $warmup_response['value'];
                $payload_stream = $result['Payload'];
                $response_data = $payload_stream->getContents();

                $decoded_response = json_decode($response_data, true);

                if (json_last_error() === JSON_ERROR_NONE) {
                    $warmups[$location] = $decoded_response;
                } else {
                    $warmups[$location] = ["status" => false, "error" => "error decoding json"];
                }
                
            }
            else {
                $warmups[$location] = ["status" => false, "error" => $warmup_response["reason"]];
            }
        }

        $running_test_time = (microtime(true) - $run_start_time) * 1000;
        echo "event: progressMsg\n";
        echo "data: running test at $running_test_time...\n\n";
        flush();

        $lambda_promises = [];

        foreach($data["test_locations"] as $location) {
            if(array_key_exists($location, $lambda_cities_regions)) {
                if(empty($warmups[$location]["status"])) {
                    $msg = json_encode(["location" => $location, "status" => false, "error" => "not responding"]);
                    echo "event: locResult\n";
                    echo "data: $msg\n\n";
                    // ob_flush();
                    flush();
                    continue;
                }
                // echo "event: progressMsg\n";
                // echo "data: Testing from $location...\n\n";
                // flush();
            
                $lambda_promises[$location] = $this->invoke_lambda_function('ttfbCheck', $lambda_cities_regions[$location], ['url' => $data["test_url"]]);
            }
        }

        $waiting_responses_time = (microtime(true) - $run_start_time) * 1000;
        echo "event: progressMsg\n";
        echo "data: starting to wait for responses at $waiting_responses_time...\n\n";
        flush();

        foreach ($lambda_promises as $location => $lambda_promise) {
            $lambda_promise->then(
                function ($result) use ($location, $run_start_time) {
                    $payloadStream = $result['Payload'];
                    $response_data = $payloadStream->getContents();

                    $decoded_response = json_decode($response_data, true);
                    if (json_last_error() === JSON_ERROR_NONE) {
                        $msg = empty($decoded_response["status"]) ? 
                            json_encode(["location" => $location, "status" => false, "error" => "request timed out"]) : 
                            json_encode(array_merge(["location" => $location], $decoded_response));
                        
                    } else {
                        $msg = json_encode(["location" => $location, "status" => false, "error" => "error decoding json"]);
                    }

                    $resonded_time = (microtime(true) - $run_start_time) * 1000;
                    echo "event: progressMsg\n";
                    echo "data: $location responded at $resonded_time...\n\n";
                    flush();

                    echo "event: locResult\n";
                    echo "data: $msg\n\n";
                    flush();
                    
                },
                function ($reason) use ($location) {
                    $msg = json_encode(["location" => $location, "error" => "request not fulfilled"]);

                    echo "event: locResult\n";
                    echo "data: $msg\n\n";
                    flush();
                }
            );
        }

        

        $responses_received_time = (microtime(true) - $run_start_time) * 1000;
        echo "event: progressMsg\n";
        echo "data: all responses received at $responses_received_time...\n\n";
        flush();

        $do_promises = [];

        foreach ($data["test_locations"] as $location) {

            if(array_key_exists($location, $do_function_urls)) {
                $do_promises[$location] = $this->invoke_do_serverless_function($do_function_urls[$location], ['url' => $data["test_url"]]);               
            }

        }

        foreach($do_promises as $location => $do_promise) {
            $do_promise->then(
                function ($response) use ($location) {
                    
                    $response_data = $response->getBody()->getContents();
                    $decoded_response = json_decode($response_data, true);
                    if (json_last_error() === JSON_ERROR_NONE) {
                        $msg = json_encode(array_merge(["location" => $location], $decoded_response));
                    } else {
                        $msg = json_encode(["location" => $location, "status" => false, "error" => "error decoding json"]);
                    }
                    echo "event: locResult\n";
                    echo "data: $msg\n\n";
                    // ob_flush();
                    flush();
                },
                function ($exception) use ($location) {
                    $msg = json_encode(["location" => $location, "status" => false, "error" => "request not fulfilled"]);
                    echo "event: locResult\n";
                    echo "data: $msg\n\n";
                    // ob_flush();
                    flush();
                }
            );
        }

        Utils::settle($lambda_promises)->wait();
        Utils::settle($do_promises)->wait();

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

        return $client->invokeAsync($params);

    }

    private function invoke_do_serverless_function(
        string $function_url,
        array $data,
        ?string $api_key = null
    ): PromiseInterface {
        
        $headers = [
            'Content-Type' => 'application/json',
        ];

        if ($api_key) {
            $headers['Authorization'] = "Bearer $api_key";
        }

        return $this->httpClient->postAsync($function_url, [
            'json' => $data,
            'headers' => $headers,
        ]);
        
    }

    private function validate_locations($locations)
    {

        $valid = true;

        /**
         * currently seven locations supported
         */

        $allowed_locations = ["mumbai", "bangalore", "sydney", "london", "newyork", "saopaulo", "capetown", "uae"];

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
        $other_envn = ($envn === 'staging') ? 'prod' : 'staging';

        $keys = [
            "monthly" => "ttfb_check_count_{$year}_{$month}_",
            "daily" => "ttfb_check_count_{$year}_{$month}_{$day}_",
            "hourly" => "ttfb_check_count_{$year}_{$month}_{$day}_{$hour}_",
        ];

        foreach(["monthly", "daily", "hourly"] as $time_period) {
            $getLimit = $this->toolsMetadataModel->getMetaData("ttfb_check_{$time_period}_max_limit");

            if(!$getLimit["status"]) {
                return ["exceeded" => "limit_fetch_error"];
            }

            $limit = (int)$getLimit["result"];
            $total_count = 0;

            // count for the current envn

            $current_count = $this->toolsMetadataModel->getMetaData("{$keys[$time_period]}{$envn}");
    
            if($current_count["status"] === true) {
                $total_count += (int)$current_count["result"];
            }
            else {
                if($current_count["errorCode"] === "missing") {
                    $this->toolsMetadataModel->addMetaData("{$keys[$time_period]}{$envn}", "1");
                }
                else {
                    return ["exceeded" => "limit_fetch_error"];
                }
            }

            // count for the other environment too

            $current_count_other = $this->toolsMetadataModel->getMetaData("{$keys[$time_period]}{$other_envn}");

            if($current_count_other["status"] === true) {
                $total_count += (int)$current_count_other["result"];
            }
            else {
                if($current_count_other["errorCode"] === "missing") {
                    $this->toolsMetadataModel->addMetaData("{$keys[$time_period]}{$other_envn}", "0");
                }
                else {
                    return ["exceeded" => "limit_fetch_error"];
                }
            }

            if($total_count >= $limit) {
                return ["exceeded" => $time_period];
            }
            else {
                $this->toolsMetadataModel->incrementTtfbTestCount("{$keys[$time_period]}{$envn}", $limit);
            }
        }

        return ["exceeded" => false];
    }

}