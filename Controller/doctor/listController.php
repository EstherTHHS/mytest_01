<?php
include"../../Model/dbConnection.php";

$sql=$pdo->prepare("
    SELECT * FROM doctor_lists
    INNER JOIN  doctor_dutytime_lists
    ON doctor_lists.doctor_id=doctor_dutytime_lists.doc_id;
");

$sql->execute();
$doctorList=$sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($doctorList);
