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
            <h2 class="nav__logo">Usuario Administrador</h2>
            
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Supply</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiNGQ3ZTcwMTMtZWY2Mi00YTc4LTgzYzYtMTdkZTE4NDJhYzc2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">Suply</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiMmU3OWE0YWMtOGVjMy00NDU1LTliZmMtZWRlYzNjYzI2OTg0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">Edad de inventario</a></li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Financiero</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiMWJiOWJjMmYtNjEyZS00MDA2LTk4ZTYtYzIwNmNlMmFjN2YwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">PyG Comercial</a></li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">CRM</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiZmY4MGVjNzAtMTA5Zi00MmZiLTliNWItYzNjZmRiZmNjNGU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionc213d6a2706d729f2515" target="proyector">Crm</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiNDgwMTk3ZWUtNjQ0Ni00YjRmLTg3ZDQtMzZmYmRmOGY1MjEzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9"target="proyector">Crm Rfm</a></li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Marcas Propias</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiMzc5ZGI2MjItMDBlYS00ZTBlLWJmYjktMWI2ZjM0YjU0MGM0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">Marcas propias</a></li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">E-Commerce</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiNmNiNjk1M2ItNGNjOC00YWY2LWFkNWMtNzVmZDY1NmJkMDIzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">Analitycs</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiZWI1NTM1OTUtMWVmZS00OTA4LWFkNDctYWUzYTJlNzlmYjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3" target="proyector">Apps y Mkp</a></li>
                        </ul>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mercadeo</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiNDU4NGZlY2ItNDA5Yi00MjJmLWE5OWYtZTdjNGI2OWM0ZDE2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection" target="proyector">IRS Cromantic</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiNDgxMzBkOGQtNGE0Ny00YTY2LWE2NTUtYjEyMzkzNjkxYjliIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection" target="proyector">IRS Blind</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiZTZkZjAyNzktYzFjYi00NTQ4LTg3M2YtOWM2NWIyOTBlYjQ0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">II Cromantic</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiMWNjZjNiMzktN2QwNi00ZWUxLTljZDgtNDAyZGE5MTdjYTZlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3" target="proyector">Pauta Cromantic</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiNjQyZDc3MmUtY2ZhOC00MDNkLWJhOTgtZTE2MmZhZTY5YTRhIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">Pauta Blind</a></li>
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

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">SAC</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <!--<li><a class="dropdown-item" href="gpp.html" target="proyector">Gasto por persona</a></li>-->
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiYzNjMzAwMzMtODA5Zi00MzFjLTgxMWUtYWJiZmUwY2YyZjU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">Blind</a></li>
                          <li><a class="dropdown-item" href="https://app.powerbi.com/view?r=eyJrIjoiZTdmMjYyZjAtMDY2Ni00MjhhLTg5NzgtOTI2OGJiMDY3NjZkIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9" target="proyector">Cromantic</a></li>
                          
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