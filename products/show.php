<?php
require_once '../functions.php';

$pdo = mysql_connect();

$id = $_GET['id'];

$sql = "select * from products where id=:id LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

$product = $stmt->fetch();

echo json_encode($product);