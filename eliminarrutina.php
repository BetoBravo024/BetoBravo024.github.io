<?php
include("conexion1.php");
$id=$_REQUEST['id'];


    $query = "DELETE  FROM rutinas WHERE id='$id'";
    
    $resultado = $conexion1->query($query);
    
    if ($resultado) {
        header("Location:adminrutina.php");
    } else {
        echo "Insercion no Exitosa";
    }
?>