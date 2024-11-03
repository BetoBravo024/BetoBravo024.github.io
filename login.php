<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: principal.php");
    }

    
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos/csslogin.css">
    <title>LOGIN AND REGISTER</title>
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
                <h3>¿Aun no tienes cuenta?</h3>
                <p>Registrate ahora para iniciar sesion</p>
                <button id="btn_registrate">Registrate</button>
            </div>
        </div>

        <!-- FORMULARIO DE LOGIN Y REGISTRO -->
        <div class="contenedor_login_register">

        <!-- LOGIN -->
            <form action="login_usuario_be.php" method="POST" class="formulario_login">
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
    <section class="CONT_ADMIN">
            <div class="BOTON_ADMIN">
                <a href="./loginadmin.php">INGRESA COMO ADMIN</a>
            </div>
    </section>
</section>
<section class="ACERCA">
    <br><br><h2>Acerca de nosotros</h2><br><br>
    <p>Somos PowerFit, una empresa dedicada a vender asesoramientos personalizados <br>para el cambio físico y saludable de las personas.</p>
</section>
<section class="REDES">
    <h2>REDES SOCIALES</h2>
    <ul class="listalogos">
            <li class="redes"><a href="https://www.facebook.com/beto.bravo.18488169?locale=es_LA" class="secciones">
                <img class="logos" src="./estilos/imagenes/logofacebook.jpg" alt="">
            </a>
        </li>
            <li class="redes"><a href="#" class="secciones">
            <img class="logos" src="./estilos/imagenes/logoinstagram.jpg" alt="">
            </a>
        </li>
            <li class="redes"><a href="#" class="secciones">
            <img class="logos" src="./estilos/imagenes/logotwitter.jpg" alt="">
            </a>
        </li>

        </ul>
</section>
<script src="estilos/scriptlogin.js"></script>
</body>
</html>