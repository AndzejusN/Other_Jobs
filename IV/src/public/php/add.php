<?php

$id = $_POST['id'] ?? NULL;
$name = $_POST['name'] ?? NULL;
$slug = $_POST['slug'] ?? NULL;

$fileName =  __DIR__ . '/../files/data/orders.json';

if (!file_exists($fileName)) {
	file_put_contents($fileName, '');
}

$data = file_get_contents($fileName);

$orders = json_decode($data, true);

$orders [] = [
	'id' => $id,
	'name' => $name,
	'slug' => $slug
];

file_put_contents($fileName, json_encode($orders));

header("Location: http://localhost/list.php");

exit();