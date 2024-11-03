<?php
include("conexion1.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];

// Validar el correo electrónico
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    // Si el correo no es válido, mostrar un mensaje de error
    echo "Error: El correo electrónico no es válido.";
} else {
    // Si el correo es válido, ejecutar la consulta SQL
    $query = "INSERT INTO solicitud_clientes(nombre, apellido, edad, peso, altura, correo, asunto) VALUES('$nombre', '$apellido', '$edad', '$peso', '$altura', '$correo', '$asunto')";
    
    $resultado = $conexion1->query($query);
    
    if ($resultado) {
       echo "insercion exitosa";
    } else {
        echo "Insercion no Exitosa";
    }
}
?>