<?php

$server = "localhost";
$database = "aplicacion_usuarios";
$user = "root";
$password = "";

$dsn="mysql:host=$server;dbname=$database";

try{
    $conn = new PDO($dsn, $user, $password);
    echo "";
}catch (PDOException $error){
    echo $error;
}

?>