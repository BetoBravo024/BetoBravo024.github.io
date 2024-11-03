<?php
// Conexión a la base de datos
include 'conexion1.php';

// Verificar si se han enviado datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $correo = $_POST['correo'];
    $fecha = $_POST['fecha'];
    $nombre_comida = $_POST['nombre_comida'];
    $calorias = $_POST['calorias'];
    $proteinas = $_POST['proteinas'];
    $carbohidratos = $_POST['carbohidratos'];

    // Verificar si el correo electrónico existe en la tabla usuarios
    $stmt = $conexion1->prepare("SELECT COUNT(*) FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    // Si el correo no coincide, mostrar un mensaje de error
    if ($count == 0) {
        echo "<script>alert('Por favor, ingrese un correo válido.'); window.history.back();</script>";
    } else {
        // Preparar la consulta SQL para insertar en comidas
        $stmt = $conexion1->prepare("INSERT INTO comidas (correo, fecha, nombre_comida, calorias, proteinas, carbohidratos) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiis", $correo, $fecha, $nombre_comida, $calorias, $proteinas, $carbohidratos);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Redirigir a la misma página después de guardar exitosamente
            header("Location: principalpremium.php"); // Cambia "index.html" por la ruta correcta de tu página
            exit();
        } else {
            echo "Error al registrar la comida: " . $stmt->error;
        }

        // Cerrar la declaración y la conexión
        $stmt->close();
    }
    
    $conexion1->close();
}
?>

