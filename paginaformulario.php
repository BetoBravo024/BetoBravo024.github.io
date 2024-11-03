<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO DE REGISTRO</title>
    <link rel="stylesheet" href="./estilos/cssformulario.css">
</head>
<body>
    <div class="CAJA_NEGRA">
        <center>
            <form class="formulario" action="operacion_guardar_formulario.php" method="POST">
                <h1>INGRESO DE DATOS PERSONALES</h1>
                
            <input type="text"  required name="nombre"  value="" placeholder= "Escribe tu nombre"><br><br>
            <input type="text"  required name="apellido" value="" placeholder= "Escribe tu apellido"><br><br>
            <input type="number"  required name="edad"  value="" placeholder= "Escribe tu edad"><br><br>
            <input type="number"  required name="peso"  value="" placeholder= "Escribe tu peso"><br><br>
            <input type="number"  required name="altura"  value="" placeholder= "Escribe tu altura (cm)"><br><br>
            <input type="text"  required name="correo" value="" placeholder= "Escribe tu correo"><br><br>
            <input type="text" class="asunto" required name="asunto"  value="" placeholder= "Escribe tu asunto"><br><br>
            <input type="submit" value="Aceptar">
        
            </form>
            </div>
            </center>

    
</body>
</html>