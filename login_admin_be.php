<?php
session_start();
include 'conexionlogin.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

// Definir las credenciales del administrador
$correo_admin = "dedcool024@gmail.com"; // Correo del admin
$contrasena_admin = hash('sha512', 'Beto2019'); // Contraseña encriptada del admin

// Verificar las credenciales
if ($correo === $correo_admin && $contrasena === $contrasena_admin) {
    // Si es administrador
    $_SESSION['usuario'] = $correo;
    header("location: ./principaladmin.php"); // Redirige al panel del admin
    exit;
} else {
    // Si no es el admin
    echo '<script>
    alert("Usuario no existe o contraseña incorrecta, por favor verifique sus datos");
    window.location= "./login.php";
    </script>';
    exit;
}
?>
