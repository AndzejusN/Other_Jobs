<?php

$fileName = __DIR__ . '/../files/data/orders.json';

if (!file_exists($fileName)) {
	file_put_contents($fileName, '');
}

$data = file_get_contents($fileName);
$orders = json_decode($data, true);