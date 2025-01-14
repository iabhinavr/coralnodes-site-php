<?php

use Aws\Exception\AwsException;

class ToolsController extends MainController
{

    public $ttfb_region;
    public $ttfb_url;

    private $lambdaClientFactory;
    private $toolsModel;

    public function __construct(
        callable $lambdaClientFactory,
        ToolsModel $toolsModel
    ) {
        $this->lambdaClientFactory = $lambdaClientFactory;
        $this->toolsModel = $toolsModel;
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
                $this->run_ttfb_test($data);

                // Send a final message before closing
                echo "event: [end]\n";
                echo "data: Test finished\n\n";
                // ob_flush();
                flush();
            }

    }

    public function ttfb_check_post()
    {
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

    private function run_ttfb_test($data = null)
    {

        $string_to_hash = $data["test_date"];
        $string_to_hash .= $data["test_url"];

        foreach ($data["test_locations"] as $l) {
            $string_to_hash .= $l;
        }

        $hash_verification = $this->toolsModel->verify_ttfb_test_hash($data["test_key"], $string_to_hash);

        if ($hash_verification["status"] !== true) {
            $msg = json_encode($hash_verification);
            echo "event: myreply\n";
            echo "data: $msg\n\n";
            flush();
            return false;
        }

        $test = $hash_verification["test"];

        if($test["test_status"] !== "initiated") {
            $msg = json_encode(["status" => false, "error" => "test has already run"]);
            echo "event: myreply\n";
            echo "data: $msg\n\n";
            flush();
            return false;
        }

        $this->toolsModel->set_ttfb_test_status($test["test_key"], "running");


        $lambda_cities_regions = [
            "uae" => "me-central",
            "london" => "eu-west-2",
            "sydney" => "ap-southeast-2",
            "saopaulo" => "sa-east-1",
            "capetown" => "af-south-1"
        ];

        $do_cities_functions = [
            "bangalore" => [
                "url" => $_ENV["DO_SERVERLESS_FUNCTION_URL_TTFB_CHECK_BANGALORE"]
            ],
            "newyork" => [
                "url" => $_ENV["DO_SERVERLESS_FUNCTION_URL_TTFB_CHECK_NEWYORK"]
            ]
        ];

        foreach ($data["test_locations"] as $location) {

            if(array_key_exists($location, $lambda_cities_regions)) {
                $response = $this->invoke_lambda_function('ttfbCheck', $lambda_cities_regions[$location], ['url' => $data["test_url"]]);

                $msg = json_encode(array_merge(["location" => $location], $response));

                echo "event: myreply\n";
                echo "data: $msg\n\n";
                // ob_flush();
                flush();

            }

            sleep(1);

        }

        $this->toolsModel->set_ttfb_test_status($test["test_key"], "completed");

    }

    private function invoke_lambda_function($function_name, $region, $data)
    {

        $client = ($this->lambdaClientFactory)($region);

        $params = [
            'FunctionName' => $function_name,
            'Payload' => json_encode([
                'url' => $data["url"]
            ]),
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

    private function invoke_do_serverless_function($function_url, $data)
    {

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

    private function warmup_lambda_function($function_name, $region, $data)
    {

    }
}