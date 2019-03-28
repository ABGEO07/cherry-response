<?php

//Include autoloader
require_once __DIR__ . '/../vendor/autoload.php';

use Cherry\HttpUtils\Response;

//Send Response
$response = new Response();

$arr = [
    'test' => 'vTest',
    'test2' => [
        'test2.1' => '2.1',
        'test2.2' => [
            'test2.2.1' => '2.2.1'
        ]
    ]
];

echo $response->sendResponse(json_encode($arr), 200, ['Content-Type' => 'application/json']);