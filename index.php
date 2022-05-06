<?php

session_start();

if(isset($_SESSION['usuario'])){
    header("location: bienvenido.php");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prosalon Tableros BI</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/stylead.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Solicita tu registro en GLPI</p>
                        <a href="http://glpi.prosalon.e-logika.co/vtex2/index.php?noAUTO=1">
                        <button id="btn__registrarse">Ir a GLPI</button>
                        </a>
                        <a href="administrador.php">
                            <button id="btn_registrarse">Administrador</button>
                        </a>
                    </div>
                </div>

                <!--Formulario de Login-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario_be.php" method="post" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

                    <!--Solicitar Usuario
                    <form action="" method="POST" class="formulario__register">
                        <h2>Solicitar Usuario</h2>
                        <!--<input type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <a href="http://glpi.prosalon.e-logika.co/vtex2/index.php?noAUTO=1">  
                            <button>Solicitar</button>
                        </a>
                    </form>-->
                    
                </div>
            </div>

        </main>

        <script src="./js/scriptad.js"></script>
</body>
</html>