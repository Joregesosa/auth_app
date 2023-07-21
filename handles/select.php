<?php 
require_once '../handles/conexion.php';

if($_SERVER["REQUEST_METHOD"] ==="POST"){
   
    extract($_POST);
     
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    
    try {

        $stmt->execute([$email]); 
        $rowCounter = $stmt->rowCount();
        $user = $stmt->fetch(PDO::FETCH_ASSOC); 
 
  
        if($rowCounter === 1){

           $ver = password_verify($password, $user["pass"]);

            if($ver){

                session_start();

                $_SESSION['user'] = $user;

                header("location: /authentication_app/public/profile.php");

                  
            }else{

                wrongCredentials();

            }


        }else{
                
            wrongCredentials();
        }
       
    } catch (Exception $e) {

        throw $e;

    }

}
    function wrongCredentials(){
        session_start();

        $_SESSION["wrong"]=true; 

        header("location: /authentication_app/public/login.php");
    }

?>