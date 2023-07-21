<?php 

$host = '192.168.0.12';
$port = 3306;
$user = 'joregesosa';
$pass = 'Soporte@01';
$db = 'auth_app';

try {

 $conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $user , $pass);

    echo 'exito';

} catch (\Throwable $err) {

        echo $err;
        die();
}

?>