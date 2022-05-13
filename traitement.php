<?php

require_once 'Select.php';

$world = $_POST['search'];

$select = new Select();

$start = $select->search($world);

$all = $select->searchReq($world);

$key = ['start' => $start, 'all' => $all];

echo json_encode($key);