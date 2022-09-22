<?php
require_once '../functions.php';

$pdo = mysql_connect();

$sql = 'select * from categories';

$query = $pdo->prepare($sql);
$query->execute();

$categoryList = array();

foreach($query as $cat){
    array_push($categoryList, $cat);
}

echo json_encode($categoryList);