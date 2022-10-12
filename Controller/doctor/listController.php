<?php
include"../../Model/dbConnection.php";

$sql=$pdo->prepare("
    SELECT * FROM doctor_lists
");

$sql->execute();
$doctorList=$sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($doctorList);
