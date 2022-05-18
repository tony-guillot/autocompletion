<?php

require_once 'Select.php';



    $search = $_POST['search'];


$select = new Select();

$start = $select->search($search);

$all = $select->searchReq($search);

$key = ['start' => $start, 'all' => $all];
//var_dump($key);
// var_dump($start);
// var_dump($all);

echo json_encode($start);