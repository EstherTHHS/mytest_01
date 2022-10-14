<?php

include "../../Model/dbConnection.php";
if (isset($_GET["id"])) {
    $docId = $_GET["id"];

    echo $docId;
   

    // $sql = $pdo->prepare("DELETE  FROM doctor_lists WHERE doctor_id=:id");
    // $sql->bindValue(":id",$docId);
    // $sql->execute();
    // $sql = $pdo->prepare("DELETE  FROM doctor_dutytime_lists WHERE doc_id=:id");
    // $sql->bindValue(":id",$docId);
    // $sql->execute();

    

    // header("Location: ../../View/doctor/list.php");
}
