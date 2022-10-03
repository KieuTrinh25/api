<?php

require_once '../functions.php';

$phone = $_POST['phone'];
$password = $_POST['password'];

$pdo = mysql_connect();

$sql = "select * from users where phone=:phone and password=:password LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":phone", $phone);
$stmt->bindParam(":password", $password);
$stmt->execute();

$result = true;
if($stmt->fetchColumn() == false) $result = false;

echo json_encode(array(
    'result' => $result
));