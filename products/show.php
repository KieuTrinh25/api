<?php
require_once '../functions.php';

$pdo = mysql_connect();

$id = $_GET['id'];

$sql = "select * from products where id=:id LIMIT 1";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

// view + 1
$sql_update = "UPDATE products SET view = view + 1 WHERE id=:id";
$stmt2 = $pdo->prepare($sql_update);
$stmt2->bindParam(":id", $id);
$stmt2->execute();

$product = $stmt->fetch();

echo json_encode($product);