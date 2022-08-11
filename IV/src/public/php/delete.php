<?php

require_once('read.php');

$id = $_POST['id'] ?? NULL;

$result = array();

$flag = 0;
foreach ($orders as $order) {
	if ($order['id'] != $id || $flag == 1) {
		$result [] = $order;
	} else {
		$flag++;
	}
}

file_put_contents($fileName, json_encode($result));

header("Location: http://localhost/list.php");

exit();