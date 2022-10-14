<?php 

include"../../Model/dbConnection.php";

if(isset($_POST["updateDoctor"])){
    $name= $_POST["docName"];
     $gender= $_POST["gender"];
    $sama= $_POST["sama"];
    $bachelar= $_POST["bachelar"];
    $center= $_POST["center"];
    $phNum= $_POST["phNum"];
    $id= $_POST["id"];
    echo $id;

    $sql = $pdo->prepare("
    UPDATE doctor_lists SET 
    doctor_name=:name,
    doctor_gender=:gender,
    doctor_sama=:sama,
    doctor_bachelar=:bachelar,
    center=:center,
    ph_num=:phNum,
    updated_date=:updateDate
    WHERE doctor_id=:id
");

$sql->bindValue(":name",$name);
$sql->bindValue(":gender",$gender);
$sql->bindValue(":sama",$sama);
$sql->bindValue(":bachelar",$bachelar);
$sql->bindValue(":center",$center);
$sql->bindValue(":phNum",$phNum);
$sql->bindValue(":updateDate", date("Y/m/d"));
$sql->bindValue(":id",$id);

$sql->execute();


// header("Location: ../../View/doctor/list.php");
header("Location: ../../View/doctor/list.php");

}
else{
    echo "ERR";
}

  
