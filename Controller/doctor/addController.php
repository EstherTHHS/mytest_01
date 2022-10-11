<?php
echo "OK";

include"../../Model/dbConnection.php";

if(isset($_POST["addDoctor"])){
    $name= $_POST["docName"];
    $gender= $_POST["gender"];
    $sama= $_POST["sama"];
    $bachelar= $_POST["bachelar"];
    $center= $_POST["center"];
    $phNum= $_POST["phNum"];

    $sql = $pdo->prepare("
    INSERT INTO doctor_lists
    (
        doctor_name,
        doctor_gender,
        doctor_sama,
        doctor_bachelar,
        center,
        ph_num,
        created_date

    )VALUES
    (
        :doctor_name,
        :doctor_gender,
        :doctor_sama,
        :doctor_bachelar,
        :center,
        :ph_num,
        :created_date

    )
");

$sql->bindValue(" :doctor_name", $name);
$sql->bindValue(":doctor_gender",  $gender);
$sql->bindValue(" :doctor_sama", $sama);
$sql->bindValue(":doctor_bachelar",  $bachelar);
$sql->bindValue(":center",  $center);
$sql->bindValue(":ph_num",  $phNum);
$sql->bindValue(" :created_date", date("Y/m/d"));

$sql->execute();

// header("Location: ../../View/doctor/list.php");

}
else{
    echo "ERR";
}







?>