<?php
require_once '../functions.php';
/**
 * Url: api/products/filter.php?categoryId=1
 */
$pdo = mysql_connect();

$categoryId = $_GET['categoryId'];
$sql = 'select * from products where categories_id=:categoryId';

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":categoryId", $categoryId);
$stmt->execute();

$productList = array();
$query = $stmt->fetchAll();

foreach($query as $product){
    array_push($productList, $product);
}

echo json_encode($productList);