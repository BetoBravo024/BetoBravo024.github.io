<?php
include("conexion1.php");
$id=$_REQUEST['id'];


    $query = "DELETE  FROM usuarios WHERE id='$id'";
    
    $resultado = $conexion1->query($query);
    
    if ($resultado) {
        header("Location:principaladmin.php");
    } else {
        echo "Insercion no Exitosa";
    }
?>