<?php

use Aws\Exception\AwsException;

class ToolsController extends MainController
{

    public $ttfb_region;
    public $ttfb_url;

    private $lambdaClientFactory;

    public function __construct(callable $lambdaClientFactory) {
        $this->lambdaClientFactory = $lambdaClientFactory;
    }

    public function main($method, $vars = null)
    {

        if (method_exists($this, $method)) {
            $this->$method($vars);
        }
    }

    public function ttfb_check_post()
    {
        header('Content-Type: application/json');
        /**
         * region and url are required
         */

        if (!isset($_POST['region']) || !isset($_POST['url'])) {
            echo json_encode(["error" => "invalid request"]);
            exit;
        }

        $region = $_POST['region'];
        $url = $_POST['url'];

        /**
         * currently only five regions supported
         */

        $allowed_regions = ["ap-south-1", "eu-west-2", "us-east-1", "sa-east-1", "ap-southeast-2"];

        if (!in_array($region, $allowed_regions)) {
            echo json_encode(["error" => "invalid region"]);
            exit;
        }

        $response = $this->invoke_lambda_function('ttfbCheck', $region, ["url" => $url]);

        echo $response;
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
}