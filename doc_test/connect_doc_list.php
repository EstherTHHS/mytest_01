<?php
$hostname = "localhost";
$port = 3306;
$dbname = "breathmore";
$username = "root";
$password = "";

$pdo = new PDO(
    "mysql:host=$hostname;port=$port;dbname=$dbname",
    $username,
    $password
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// place to write query
$sql = $pdo->prepare("SELECT * FROM doctor_lists ");

//execute
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
















?>