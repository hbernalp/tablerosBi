<?php

session_start();

 if(!isset($_SESSION['usuario'])){
     echo'
        <script>
            alert("Por favor Iniciar sesión");
            window.location = "index.php";
        </script>
        ';
        //header("location: index.php");
        session_destroy();
        die(); 
 //else{
 // if(isset($_SESSION['usuario'])){
 //  $valida_link = mysqli_query($conexion, "SELECT * FROM links WHERE id_perfil == '101'");
 //  $url_link = mysqli_fetch_array($valida_link);
 //  echo "<p>$url_link</p>";
 //  //$url = $_POST['url'];
 //  //   echo "<p>$url</p>";

 } 

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableros en BI</title>
    <link rel="stylesheet" href="/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <header class="hero">
        <nav class="nav container">
            <h2 class="nav__logo titulo">Tablero BI</h2>
            
            <!--Menu-->
            
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container-fluid">
                
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Operaciones</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a" target="proyector">Flash de ventas</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">Así vamos</a></li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">HR</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <!--<li><a class="dropdown-item" href="gpp.html" target="proyector">Gasto por persona</a></li>-->
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiNDdhNDBmYjctOWJjZi00NDdmLWE5OTQtMjE3NTA3YmM2YjhlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">Indicadores de rotación y encuesta de salida</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiNTVjMTdhNGItODEyMi00N2IxLWEyZDYtOThkOGQ5MzM1N2EzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">Wep</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiMmEwYzZlNzItNzAxZS00NjA5LWI3ZmUtZGYxYmM5NDYxNWUwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">Demografico</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiMGMwNzA5ZmYtM2ExMy00ZTNiLTg4NmEtYWQxNzBmMTZmNmI1IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3" target="proyector">Formación</a></li>
                        </ul>
                      </li>
                      
                      <li class = "nav-item dropdown">
                          <a href="php/cerrar_sesion.php" class="nav-link dropdown-toggle" role="button">Cerrar Sesión</a>
                      </li>

                    </ul>
                  </div>
                </div>
              </nav>
              <iframe name="proyector" src="about:blank" width="150%" height="850%" frameborder="1"></iframe>
        </nav>

    </header>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>