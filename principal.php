<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
            alert("DEBES DE INICIAR SESION ANTERIORMENTE");
            window.location="login.php";
        </script>
        ';
        session_destroy();
        die();

    }


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerFit</title>
    <link rel="stylesheet" href="estilos/css.css">
</head>
<body>
    <nav class="menu">
        <p>PowerFit</p>
        <img class="logo" src="./estilos/imagenes/logoempresa.png" alt="">
        <ul>
            <li class="bloque"><a href="#" class="secciones">INICIO</a></li>
            <li class="bloque"><a href="./paginarutinas.php" class="secciones">RUTINAS</a></li>
            <li class="bloque"><a href="./paginadietas.php" class="secciones">DIETAS</a></li>
            <li class="bloque"><a href="./cerrar_sesion.php" class="secciones">CERRAR SESION</a></li>

        </ul>
    </nav>

    <section class="cont_general">
        <h2 class="SOMOS"><br>SOMOS POWERFIT</h2> <br>
        <p>Recuerda que llevar un estilo de vida saludable <br>no solo mejora tu físico, sino también tu salud, por eso somos tu mejor opción.</p>
        <div class="CONTRATA">
            <a href="./principalpremium.php" class="CONTRATAAHORA">OBTEN PREMIUM AHORA</a>
        </div>
    </section>

    <section class="planes">
        <h2>NUESTROS PLANES</h2>
        <div class="planuno">
            <p>PLAN DE RUTINAS Y DIETAS</p> <br>
            <img src="./estilos/imagenes/dietayrutina.png" alt="" class="dietayrutina">
        </div>
        <div class="plandos">
            <p>PLAN DE RUTINAS</p> <br>
            <img src="./estilos/imagenes/rutina.png" alt="" class="rutina">
        </div>
        <div class="plantres">
            <p>PLAN DE DIETAS</p> <br>
            <img src="./estilos/imagenes/dieta.png" alt="" class="dieta">
        </div>
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

    <footer>
        <p>© 2024 PowerFit. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
