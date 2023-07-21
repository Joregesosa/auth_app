<?php 
include '../handles/conexion.php';

session_start();

$userId = $_SESSION['user']['id'];

if($_SERVER["REQUEST_METHOD"] ==="POST"){
   
    $sql = "UPDATE users SET ";
    $queryValues = [];
    $counter = 1;

    // Eliminar Elementos Vacios
    foreach($_POST as $in => $rs){

        if(!$rs){

            unset($_POST[$in]);

        }
         
    }

        $arrayElments = count($_POST);

        extract($_POST);
        
        if($_FILES['photo']['tmp_name']){ 
            
            $fileName = $_FILES['photo']['name'];
            
            $getext =  explode('.', $fileName);
            
            $ext = end($getext);

            $tmp =  $_FILES['photo']['tmp_name']; 

            $route ="userProfileImage/profile$userId.$ext";
            
            move_uploaded_file($tmp, $route);

            $sql.= $counter !== $arrayElments? "`photo`=?, " : "`photo`=?"; 

            array_push($queryValues, $route);
            
            $counter++;
        }

        if(isset($name)){

            $counter++; 
         
            $sql.= $counter !== $arrayElments? "`name`=?, " : "`name`=? "; 

            array_push($queryValues, $name);
        }
        
        if(isset($bio)){

            $sql .= $counter !== $arrayElments? "`bio`=?, " : "`bio`=?"; 

            array_push($queryValues, $bio);

            $counter++;
        }

        if(isset($phone)){
            $counter++; 

            $sql .= $counter !== $arrayElments? "`phone`=?, " : "`phone`=?"; 
            
            array_push($queryValues, $phone);
        }

        if(isset($password)){
            $counter++; 

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql .= $counter !== $arrayElments? "`pass`=?, " : "`pass`=? "; 
            
            array_push($queryValues, $hash);
        }
       
        $sql .= " WHERE `email`= '$email'";
        
        echo "<br> $sql";
    try {
       
      $stmt = $conn->prepare($sql);

      $stmt ->execute($queryValues); 

       updateSessionValues($email, $conn);
    
   
    } catch (Exception $e) {

        throw $e;

    }

}

function updateSessionValues($id, $conn){

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    try {

        $stmt->execute([$id]); 

        $user = $stmt->fetch(PDO::FETCH_ASSOC); 

        $conn = null; 
        $stmt = null;

        unset($_SESSION['user']); 

        $_SESSION['user'] = $user;
    
        header("location: /authentication_app/public/profile.php");

    } catch (\Throwable $th) {

        echo $th;

    }
}

?>
