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

        for ($i = 0; $i < 5; $i++) {
            echo "event: myreply\n";
            echo "data: Hello $i\n\n";
            // ob_flush();
            flush();
            sleep(1);
        }

        // Send a final message before closing
        echo "event: [end]\n";
        echo "data: Goodbye!\n\n";
        // ob_flush();
        flush();

        exit;
        // if(isset($_POST["test_key"])) {
        //     $data = [
        //         "test_key" => $_POST["test_key"],
        //         "test_url" => $_POST["test_url"],
        //         "test_locations" => $_POST["test_locations"],
        //         "test_date" => $_POST["test_date"]
        //     ];
        //     $this->run_ttfb_test($data);
        // }
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
            "test_hash" => hash('sha256', $string_to_hash)
        ];

        $test_creation = $this->toolsModel->create_ttfb_test($data);

        if ($test_creation["status"] === true) {
            echo json_encode([
                "test_key" => $data["test_key"],
                "test_url" => $data["test_url"],
                "test_locations" => $data["test_locations"],
                "test_date" => $data["test_date"]
            ]);
            exit;
        } else {
            echo json_encode(["error" => $test_creation["result"]]);
            exit;
        }
    }

    private function run_ttfb_test($data = null)
    {

        header("Content-Type: text/event-stream");
        header("Cache-Control: no-cache");
        header("Connection: keep-alive");

        // Disable output buffering
        ini_set('output_buffering', 'off');
        ini_set('zlib.output_compression', 'off');
        ini_set('implicit_flush', 'on');
        ob_implicit_flush(true);

        echo "retry: 1000\n"; // Reconnection time in milliseconds
        echo "\n"; // Initial padding

        for ($i = 0; $i < 5; $i++) {
            echo "event: myreply\n";
            echo "data: Hello $i\n\n";
            ob_flush();
            flush();
            sleep(1);
        }

        // Send a final message before closing
        echo "event: [end]\n";
        echo "data: Goodbye!\n\n";
        ob_flush();
        flush();

        exit;

        $string_to_hash = $data["test_date"];
        $string_to_hash .= $data["test_url"];

        foreach ($data["test_locations"] as $l) {
            $string_to_hash .= $l;
        }

        $hash_verification = $this->toolsModel->verify_ttfb_test_hash($data["test_key"], $string_to_hash);

        if ($hash_verification["status"] !== true) {
            echo json_encode($hash_verification);
            exit;
        }

        $test = $hash_verification["test"];


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

            echo "event: testing $location...\n";
            ob_flush();
            flush();

            // if(array_key_exists($location, $lambda_cities_regions)) {
            //     $r = $this->invoke_lambda_function('ttfbCheck', $lambda_cities_regions[$location], ['url' => $data["test_url"]]);

            //     $response_array = json_decode($r, true);

            //     echo "data: " . json_encode(array_merge(["location" => $location], $response_array)) . "\n\n";
            //     ob_flush();
            //     flush();



            // }

            sleep(1);

        }

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
                return $responsePayload;
            } else {
                return json_encode(["error" => "Error decoding JSON: " . json_last_error_msg()]);
            }

        } catch (AwsException $e) {
            return json_encode(["error" => "Error invoking Lambda: " . $e->getMessage()]);
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