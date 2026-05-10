<?php
require_once("conexion.php");

$id = $_GET['id'];

if($id){

    $query = $conn->prepare("DELETE FROM usuarios WHERE id = :id");

    $query->bindParam(":id", $id);

    $query->execute();

    header("Location: index.php");
    exit;
}

?>