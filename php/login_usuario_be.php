<?php

session_start();
include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$_SESSION['usuario'] = $correo;

//$contrasena = hash('sha512', $contrasena);


$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena'");
$filas=mysqli_fetch_array($validar_login);

if ($filas['id_perfil'] == 101){
    //$_SESSION['usuario'] = $correo;
    header("location: ../Operaciones.php");
    exit();
}else{
    if($filas['id_perfil'] == 102){
        header("location: ../OpMarcProp.php");
        exit();
    }else{
        echo'
        <script>
        alert("Usuario NO existe, por favor verifique los datos introducidos");
        window.location = "../index.php";
        </script>';
        exit();
        mysqli_close($conexion);
    }
}
?>