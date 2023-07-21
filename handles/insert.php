<?php 
require_once '../handles/conexion.php';

if($_SERVER["REQUEST_METHOD"] ==="POST"){
   
    extract($_POST);

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (email, pass) VALUES ('$email', '$hash')");

    try {

       $stmt ->execute(); 
       
        header("location: /authentication_app/public/login.php");
    
    } catch (Exception $e) {

        throw $e;

    }

}

?>
