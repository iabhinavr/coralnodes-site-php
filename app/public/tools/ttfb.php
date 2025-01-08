<?php

define('START_TIME', microtime(true));

function log_exec_time() {
    $end_time = microtime(true);
    $exec_time = ($end_time - START_TIME)*1000;
    file_put_contents(__DIR__ . "/../times.txt", $_SERVER['REQUEST_URI'] . ": " . $exec_time . "ms\n", FILE_APPEND);
}

// register_shutdown_function('log_exec_time');

use Symfony\Component\Dotenv\Dotenv;

require '../../vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../../.env');

use Aws\Lambda\LambdaClient;
use Aws\Exception\AwsException;

header('Content-Type: application/json');

if(!isset($_POST['region']) || !isset($_POST['url'])) {
    echo json_encode(["error" => "invalid request"]);
    exit;
}

$region = $_POST['region'];
$url = $_POST['url'];

$allowed_regions = ["ap-south-1", "eu-west-2", "us-east-1", "sa-east-1", "ap-southeast-2"];

if(!in_array($region, $allowed_regions)) {
    echo json_encode(["error" => "invalid region"]);
    exit;
}

$client = new LambdaClient([
    'region' => $region,
    'version' => '2015-03-31',
    'credentials' => [
        'key' => $_ENV['AWS_ACCESS_KEY_ID'],
        'secret' => $_ENV['AWS_SECRET_ACCESS_KEY'],
    ],
]);

$params = [
    'FunctionName' => 'ttfbCheck',
    'Payload' => json_encode([
        'url' => $url
    ]),
];

try {
    $result = $client->invoke($params);
    $responsePayload = $result['Payload']->getContents();

    if (json_last_error() === JSON_ERROR_NONE) {
        echo ($responsePayload);
    } else {
        echo json_encode ([ "error" => "Error decoding JSON: " . json_last_error_msg()]);
    }
    
} catch (AwsException $e) {
    echo json_encode (["error" => "Error invoking Lambda: " . $e->getMessage()]);
}
