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
        ToolsModel $toolsModel) {
        $this->lambdaClientFactory = $lambdaClientFactory;
        $this->toolsModel = $toolsModel;
    }

    public function main($method, $vars = null)
    {

        if (method_exists($this, $method)) {
            $this->$method($vars);
        }
    }

    public function ttfb_check_page() {
        $props = [];
        $props["seo_data"] = [];
        $props["seo_data"]["title" ] = "Check TTFB";

        $this->render('header', $props);
        $this->render('ttfb-check', $props);
        $this->render('footer', $props);
    }

    public function ttfb_check_post()
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

        if(!$locations_validity) {
            echo json_encode(["status" => false, "error" => "unsupported locations", "locations" => $locations]);
            exit;
        }

        // create a new test

        $data = [
            "test_key" => bin2hex(string: random_bytes(length: 16)),
            "test_url" => $url,
            "test_locations" => json_encode($locations),
            "test_user" => 0,
            "test_env" => _is_local() ? 'staging' : 'production',
            "test_date" => date('Y-m-d H:i:s'),
        ];

        $test_creation = $this->toolsModel->create_ttfb_test($data);

        if($test_creation["status"] === true) {
            echo json_encode(["test_key" => $data["test_key"]]);
            exit;
        }
        else {
            echo json_encode(["error" => $test_creation["result"]]);
            exit;
        }
        
    }

    private function run_ttfb_test($test_key) {

        $get_test = $this->toolsModel->get_ttfb_test($test_key);

        if(!$get_test["status"]) {
            echo json_encode(["error" => "error running test"]);
            exit;
        }

        $test_data = json_decode($get_test["result"], true);

        var_dump($test_data);
        exit;

        $responses = [];

        $lambda_cities_regions = [
            "uae" => "me-central",
            "london" => "eu-west-2",
            "sydney" => "ap-southeast-2",
            "sao-paulo" => "sa-east-1",
            "capetown" => "af-south-1"
        ];

        $do_cities_regions = [
            "bangalore",
            "newyork"
        ];

        foreach($test_data["test_locations"] as $location) {

            if(array_key_exists($location, $lambda_cities_regions)) {
                $r = $this->invoke_lambda_function('ttfbCheck', $lambda_cities_regions[$location], ['url' => $url]);
                $responses[$location] = json_decode($r, true);
            }

        }

        echo json_encode($responses);
        exit;
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

    private function validate_locations($locations) {

        $valid = true;

        /**
         * currently seven locations supported
         */

        $allowed_locations = ["bangalore", "sydney", "london", "newyork", "saopaulo", "capetown", "uae"];

        foreach($locations as $location) {
            if (!in_array($location, $allowed_locations)) {
                $valid = false;
                break;
            }
        }

        return $valid;
        
    }

    private function warmup_lambda_function($function_name, $region, $data) {

    }
}