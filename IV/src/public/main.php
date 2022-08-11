<?php

define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH . '/vendor/autoload.php';

(Dotenv\Dotenv::createImmutable(ROOT_PATH))->load();

$url = 'https://billing.time4vps.com/api/category';

$username = $_ENV["USER_NAME"];
$password = $_ENV["PASSWORD"];

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

$dataDecoded = json_decode($response, true);