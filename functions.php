<?php
define('DB_NAME', 'database');
define('DB_USER', 'root');
define('DB_PASS', '');
define('SERVERNAME', 'localhost');

function mysql_connect() {
    try{
        $dsn = sprintf("mysql:host=%s;dbname=%s;charset=utf8mb4", SERVERNAME, DB_NAME);
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(PDOException $e){
        echo 'Connect failed ' . $e->getMessage();
    }
    return null;
}
?>