<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PowerFit - Contador de Calorías</title>
    <link rel="stylesheet" href="estilos/cssprincipalpremium.css">
</head>
<body>

<nav class="menu">
    <p>PowerFit</p>
    <img class="logo" src="./estilos/imagenes/logoempresa.png" alt="">
    <ul>
        <li class="bloque"><a href="#" class="secciones">INICIO</a></li>
        <li class="bloque"><a href="./premiumrutina.php" class="secciones">MI RUTINA</a></li>
        <li class="bloque"><a href="./cerrar_sesion.php" class="secciones">CERRAR SESION</a></li>
    </ul>
</nav>

<div class="CONT_GENERAL">
    <br><br><br><br><h2>TE DAMOS LA BIENVENIDA A PREMIUM</h2><br>
    <p>En este apartado tendrás tu contador de comidas personalizado, donde podrás anotar tus objetivos diarios que te asignó tu nutriólogo. <br>
    Aquí podrás anotar tus calorías, proteínas y carbohidratos. <br><br>
    Estos datos serán registrados y le llegarán a tu nutriólogo para que sigas cumpliendo tus objetivos.</p>
</div>

<div class="FONDO_TRASERO_CALCULADORA">
    <div class="FONDO_CONTADOR">
        <h3>Contador de Calorías</h3>
        
        <form id="formulario" method="POST" action="enviar_dieta.php">
            <div class="input-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
            </div>
            <div class="input-group">
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>
            <div class="input-group">
                <label for="nombre_comida">Nombre de la comida:</label>
                <input type="text" id="nombre_comida" name="nombre_comida" placeholder="Ejemplo: Desayuno" required>
            </div>
            <div class="input-group">
                <label for="calorias">Calorías:</label>
                <input type="number" id="calorias" name="calorias" placeholder="Ejemplo: 300" required>
            </div>
            <div class="input-group">
                <label for="proteinas">Proteínas (g):</label>
                <input type="number" id="proteinas" name="proteinas" placeholder="Ejemplo: 20" required>
            </div>
            <div class="input-group">
                <label for="carbohidratos">Carbohidratos (g):</label>
                <input type="number" id="carbohidratos" name="carbohidratos" placeholder="Ejemplo: 50" required>
            </div>
            <button type="button" onclick="agregarComida()">Registrar Comida</button>
            <button type="button" onclick="borrarTotales()">Borrar Totales</button>
        </form>

        <!-- Mostrar totales acumulados -->
        <div class="totales">
            <p>Total Calorías: <span id="totalCalorias">0</span></p>
            <p>Total Proteínas: <span id="totalProteinas">0</span> g</p>
            <p>Total Carbohidratos: <span id="totalCarbohidratos">0</span> g</p>
        </div>
    </div>
</div>

<script src="./estilos/scriptCALCULADORA.js"></script>
</body>
</html>
