<?php

include "../../Model/dbConnection.php";

if (isset($_GET["id"])) {
    $docId = $_GET["id"];
    $sql = $pdo->prepare("SELECT * FROM doctor_lists WHERE doctor_id=:id");
    $sql->bindValue(":id", $docId);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);
    //  $_SESSION["docInfo"] docInfo is naming to assign $result(ses)
    $_SESSION["docInfo"]=$result;

    header("Location: ../../../View/doctor/edit.php");
}
