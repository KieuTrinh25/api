<?php
require_once '../functions.php';

$pdo = mysql_connect();

$sql = 'select * from products where view > 5';

$query = $pdo->prepare($sql);
$query->execute();

$productList = array();

foreach($query as $product){
    array_push($productList, $product);
}

echo json_encode($productList);