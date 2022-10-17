<?php
include "../../Model/dbConnection.php";

$sql = $pdo->prepare("
    SELECT * FROM lab_reports
");

$sql->execute();
$labList = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($labList);
