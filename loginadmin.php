<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: principaladmin.php");
    }

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/cssloginadmin.css">
    <title>Document</title>
</head>
<body>
<section class=CONTENEDORLOGIN>
    <div class="contenedor_todo">
        <div class="caja_trasera">
            <div class="caja_trasera_login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesion para acceder</p>
                <button id="btn_iniciar_sesion">Iniciar sesion</button>
            </div>
            <div class="caja_trasera_register">
                <h3>Ingresa como admin</h3>
                <p>Apartado para administradores</p>
                <button id="btn_usuario" onclick="location.href='login.php'">Usuario</button>
            </div>
        </div>

        <!-- FORMULARIO DE LOGIN Y REGISTRO -->
        <div class="contenedor_login_register">

        <!-- LOGIN -->
            <form action="login_admin_be.php" method="POST" class="formulario_login">
                <h2>Iniciar Sesion</h2>
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button>Entrar</button>
            </form>

            <!-- REGISTRO -->
            <form action="operacion_guardar_registros.php" method="POST" class="formulario_register">
                <h2>REGISTRATE</h2>
                <input type="text"  required name="nombre" value="" placeholder= "Nombre Completo">
                <input type="text"  required name="correo" value="" placeholder= "Correo Electronico">
                <input type="text"  required name="usuario" value="" placeholder= "Usuario">
                <input type="password"  required name="contrasena" value="" placeholder= "Contraseña">

                <button>Registrate</button>
            </form>
        </div>

    </div>
    
</body>
</html>