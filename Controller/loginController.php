<?


session_start();

include "../Model/dbConnection.php";


if(isset($_POST["username"]) && isset($_POST["pwd"])){
        $name=$_POST["username"];
        $pwd=$_POST["pwd"];

        
     
        $sql = $pdo->prepare(
            "SELECT * FROM admin_management 
        WHERE admin_name='$name' AND password='$pwd' ");

     //execute
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        // echo "<pre>";
        // print_r($result);

        if(count($result)== 0){
            header("Location: ../../../View/test01.php");
        }else{
            $_SESSION["username"]=$name;
            header("Location: ../../../View/home.php");
        }
           
        
       
}

?>
