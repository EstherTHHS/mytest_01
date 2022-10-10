<?php
//initial connection
 $hostname="location";
 $port=3306;
 $dbname="breathmore";
$username="root";
$password="";

//initial connection
$pdo = new PDO(
    "mysql:host=$hostname;port=$port;dbname=$dbname", 
    $username, $password
);


//error exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// place to write query
$sql=$pdo->prepare("SELECT * FROM doctor_lists");

//execute
$sql->execute();

$resultList= $sql->fetchAll(PDO::FETCH_ASSOC);
print_r($resultList);
















?>