<?php 
require_once '../handles/conexion.php';

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
            
            $counter++;
            $arrayElments++;

            $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));

            $sql .= $counter >= $arrayElments? "`photo`=?" : "`photo`=?, "; 
            
             array_push($queryValues, $photo);

        
        }

        if(isset($name)){
            $counter++;

            $sql.= $counter >= $arrayElments? "`name`=?" : "`name`=?, "; 

            array_push($queryValues, $name);
        }

        if(isset($bio)){
            $counter++;

            $sql .= $counter >= $arrayElments? "`bio`=?" : "`bio`=?, "; 

            array_push($queryValues, $bio);

        }

        if(isset($password)){
            $counter++;

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql .= $counter >= $arrayElments? "`pass`=?" : "`pass`=?, "; 
            
            array_push($queryValues, $hash);
        }
       
        $sql .= " WHERE `email`= '$email'";
        
        echo "<br> $sql";
 
 
    try {
       
      $stmt = $conn->prepare($sql);

      $stmt ->execute($queryValues); 
       
    //   header("location: /authentication_app/public/profile.php");
    
   
    } catch (Exception $e) {

        throw $e;

    }

}

?>
