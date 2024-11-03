<?php
include("conexion1.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//encriptar contraseña
$contrasena=hash('sha512',$contrasena);

// Validar el correo electrónico
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Error: El correo electrónico no es válido.');</script>";
    echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 2000);</script>"; // Redirige después de 2 segundos
} else {
    // Verificar que el correo y el usuario no se repitan
    $verificar_correo = mysqli_query($conexion1, "SELECT * FROM usuarios WHERE correo='$correo'");
    $verificar_usuario = mysqli_query($conexion1, "SELECT * FROM usuarios WHERE usuario='$usuario'");

    if (mysqli_num_rows($verificar_correo) > 0) {
        echo "<script>alert('Error: El correo electrónico ya está registrado.');</script>";
        echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 2000);</script>"; // Redirige después de 2 segundos
    } elseif (mysqli_num_rows($verificar_usuario) > 0) {
        echo "<script>alert('Error: El nombre de usuario ya está en uso.');</script>";
        echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 2000);</script>"; // Redirige después de 2 segundos
    } else {
        // Si el correo y el usuario son válidos, ejecutar la consulta SQL
        $query = "INSERT INTO usuarios(nombre, correo, usuario, contrasena) VALUES('$nombre', '$correo', '$usuario', '$contrasena')";
        
        $resultado1 = $conexion1->query($query);
        
        if ($resultado1) {
            echo "<script>alert('Inserción exitosa');</script>";
            echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 2000);</script>"; // Redirige después de 2 segundos
        } else {
            echo "<script>alert('Inserción no exitosa: " . $conexion1->error . "');</script>";
            echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 2000);</script>"; // Redirige después de 2 segundos
        }
    }
}
?>
