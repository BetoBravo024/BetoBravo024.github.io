<?php
    session_start();
    include 'conexionlogin.php';
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $contrasena=hash('sha512',$contrasena);

    $validar_login=mysqli_query($conexion1, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario']=$correo;
        header("location: ./principal.php");
        exit;
    }else{
        echo '<script>
        alert("Usuario no existe, por favor verifique sus datos");
        window.location= "./login.php";
        </script>
        
        ';
        exit;
    }

?>