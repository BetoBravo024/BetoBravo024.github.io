<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PowerFit - Registrar Rutina</title>
    <link rel="stylesheet" href="estilos/csspremiumrutina.css">
</head>
<body>

<nav class="menu">
    <p>PowerFit</p>
    <img class="logo" src="./estilos/imagenes/logoempresa.png" alt="">
    <ul>
        <li class="bloque"><a href="#" class="secciones">INICIO</a></li>
        <li class="bloque"><a href="./principalpremium.php" class="secciones">MI DIETA</a></li>
        <li class="bloque"><a href="./cerrar_sesion.php" class="secciones">CERRAR SESION</a></li>
    </ul>
</nav>

<div class="CONT_GENERAL">
    <h2>REGISTRO DE RUTINA</h2>
    <p>Registra tu rutina de ejercicios a continuación. Asegúrate de que todos los campos sean correctos.</p>
</div>

<div class="FONDO_TRASERO_CALCULADORA">
    <div class="FONDO_CONTADOR">
        <h3>Registrar Rutina</h3>
        
        <form id="formularioRutina" method="POST" action="enviar_rutina.php">
            <div class="input-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
            </div>
            <div class="input-group">
                <label for="ejercicio">Ejercicio:</label>
                <input type="text" id="ejercicio" name="ejercicio" placeholder="Ejemplo: Sentadillas" required>
            </div>
            <div class="input-group">
                <label for="series">Series:</label>
                <input type="number" id="series" name="series" placeholder="Ejemplo: 3" required>
            </div>
            <div class="input-group">
                <label for="repeticiones">Repeticiones:</label>
                <input type="number" id="repeticiones" name="repeticiones" placeholder="Ejemplo: 12" required>
            </div>
            <div class="input-group">
                <label for="peso">Peso (kg):</label>
                <input type="number" id="peso" name="peso" placeholder="Ejemplo: 20" required>
            </div>
            <button type="submit">Registrar Rutina</button>
        </form>
    </div>
</div>

<script src="./estilos/scripRUTINA.js"></script>
</body>
</html>
