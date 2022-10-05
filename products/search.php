<?php
require_once '../functions.php';

$pdo = mysql_connect();

$key = $_GET['key'];


$sql = 'select * from products where name like :value';
$stmt = $pdo->prepare($sql);    
$stmt->bindValue(":value", "%$key%");
$stmt->execute();

$productList = array();
$query = $stmt->fetchAll();

foreach($query as $product){
    array_push($productList, $product);
}

echo json_encode($productList);