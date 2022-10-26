<?php

include "../../Model/dbConnection.php";

$sql = $pdo->prepare("
    SELECT * FROM  blood_stock_lists WHERE del_flg=0;
   
");

$sql->execute();
$bloodLists = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($bloodLists);

$sql = $pdo->prepare("
        SELECT blood_type,SUM(instock_now) AS totalblood FROM blood_stock_lists GROUP BY blood_type;
");

$sql->execute();
$instockLists = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($instockLists);
