<?php
include("conexion1.php");
$id=$_REQUEST['id'];


    $query = "DELETE  FROM comidas WHERE id='$id'";
    
    $resultado = $conexion1->query($query);
    
    if ($resultado) {
        header("Location:admindietas.php");
    } else {
        echo "Insercion no Exitosa";
    }
?>