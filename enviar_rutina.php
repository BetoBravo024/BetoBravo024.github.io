<?php
// Conexión a la base de datos
include 'conexion1.php';

// Verificar si se han enviado datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario y sanitizar
    $correo = trim($_POST['correo']);
    $ejercicio = trim($_POST['ejercicio']);
    $series = (int)$_POST['series']; // Asegurarse de que sea un entero
    $repeticiones = (int)$_POST['repeticiones']; // Asegurarse de que sea un entero
    $peso = (float)$_POST['peso']; // Asegurarse de que sea un flotante

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
        exit();
    } else {
        // Preparar la consulta SQL para insertar en rutinas
        $stmt = $conexion1->prepare("INSERT INTO rutinas (correo, ejercicio, series, repeticiones, peso) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiii", $correo, $ejercicio, $series, $repeticiones, $peso);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Redirigir a la misma página después de guardar exitosamente
            header("Location:premiumrutina.php"); // Cambia "premiumrutina.php" por la ruta correcta de tu página
            exit();
        } else {
            echo "Error al registrar la rutina: " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();
    }
    
    // Cerrar la conexión
    $conexion1->close();
}
?>

