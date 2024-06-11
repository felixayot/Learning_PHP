<?php

// PDO_MYSQL Data Source Name (DSN) for connecting to a MySQL database
$dsn = "mysql:host=localhost;dbname=phptutorial";
$dbusername = "root";
$dbpassword = "yolo1212";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
