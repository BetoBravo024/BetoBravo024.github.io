<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
        alert("DEBES DE INICIAR SESION ANTERIORMENTE");
        window.location="loginadmin.php";
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
    <link rel="stylesheet" href="estilos/cssadmin.css">
    <title>Document</title>
</head>
<body>
    <nav class="menu">
        <div class="logo-container">
            <img class="logo" src="./estilos/imagenes/logoempresa.png" alt="">
            <p>PowerFit</p>
        </div>
        <ul>
            <li class="bloque"><a href="#" class="secciones">INICIO</a></li>
            <li class="bloque"><a href="./adminrutinas.php" class="secciones">RUTINAS DE CLIENTES</a></li>
            <li class="bloque"><a href="./admindietas.php" class="secciones">DIETAS DE CLIENTES</a></li>
            <li class="bloque"><a href="./cerrar_sesion.php" class="secciones">CERRAR SESION</a></li>
        </ul>
    </nav>
    <div class="content">
        <h4>Redes Sociales</h4>
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
        <!-- Aquí puedes agregar más contenido -->
    <div class="CONT_TABLAS">
        <h4>CLIENTES REGISTRADOS</h4>
        
        <div class="table-container">
    <table>
        <thead>
            <tr>
                <th class="id">ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th colspan="2">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("conexion1.php");
            $query = "SELECT * FROM usuarios";
            $resultado = $conexion1->query($query);
            while ($row = $resultado->fetch_assoc()) {
                ?>
                <tr>
                    <td class="id"><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>


    </div>
    
    <div class="ACERCA">
        <br><h2>Acerca de nosotros</h2><br><br>
        <p>Somos PowerFit, una empresa dedicada a vender asesoramientos personalizados <br>para el cambio físico y saludable de las personas.</p>
    </div>

</div>


</body>
</html>
