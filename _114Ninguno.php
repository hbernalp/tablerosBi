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
    <title>Prosalon BI</title>
    <link rel="stylesheet" href="/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <header class="hero">
        <nav class="nav container">
            <h2 class="nav__logo">Tablero BI</h2>
            
            <!--Menu-->
            
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container-fluid">
                
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Videos Ayuda</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <!--<li><a class="dropdown-item" href="gpp.html" target="proyector">Gasto por persona</a></li>-->
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/ERmOTwZL8BVMkMPHGLIOhRgB7i7f6XX37VbEwEsCiP9IIw?e=l3HWMv" target="_blank">Flash de ventas</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/EYtzaO-91wJJqREc_lqOi-UBnbk0Ap_fovWnQgc2KgHH1A?e=GzihLf" target="_blank">Pyg comercial</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/ERPm1fOqXA5MlBxASkOd9QABgisNqNzPGcvcomGDDWbOsQ?e=e27qmF" target="_blank">Así Vamos</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/EZ7Q3aJ1T09LqOBTvCLkBWQBP2Xy5FXId89CUuvxpbAANA?e=ySl9CA" target="_blank">II cromantic</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/EVkkpO5I58lFnilC4pSZ4qoBQAqJ3iDHrWIDYlzZ9TdtKg?e=yrKoDj" target="_blank">I Rotacion y Encuesta de salida</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/EdWQGFwfwQ5Mv6SHGqm58MABkJEteXSo0hJ1ecmMrB9lnQ?e=wA5a4V" target="_blank">Wep</a></li>
                          <li><a class="dropdown-item" href="https://prosalon-my.sharepoint.com/:v:/g/personal/juan_chavarria_prosalon_com_co/ERcnXLfrCRZAmH2nEPv6-_wBXlaGrw9XnPsWsaYIwt0A1A?e=UTGHRS" target="_blank">Ecommerce-Analytics</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/EfIwyEYGZhtLg6WSWD7Ceu4BQ6Vsvv2Mi7ao00e1hz39jg?e=4cEfk6" target="_blank">Pauta Cromantic</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/EfIwyEYGZhtLg6WSWD7Ceu4BQ6Vsvv2Mi7ao00e1hz39jg?e=4cEfk6" target="_blank">Pauta Blind</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/EfIwyEYGZhtLg6WSWD7Ceu4BQ6Vsvv2Mi7ao00e1hz39jg?e=4cEfk6" target="_blank">Audiencias Cromantic</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/EfIwyEYGZhtLg6WSWD7Ceu4BQ6Vsvv2Mi7ao00e1hz39jg?e=4cEfk6" target="_blank">Audiencias Blind</a></li>
                          <li><a class="dropdown-item" href="https://prosalon-my.sharepoint.com/personal/juan_chavarria_prosalon_com_co/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fjuan%5Fchavarria%5Fprosalon%5Fcom%5Fco%2FDocuments%2FGrabaciones%2FTablero%20Ecommerce%20%5F%20Apps%20y%20MKP%2D20220421%5F100411%2DGrabaci%C3%B3n%20de%20la%20reuni%C3%B3n%2Emp4&parent=%2Fpersonal%2Fjuan%5Fchavarria%5Fprosalon%5Fcom%5Fco%2FDocuments%2FGrabaciones&ga=1" target="_blank">Apps y MKP</a></li>
                          <li><a class="dropdown-item" href="https://prosalon-my.sharepoint.com/:v:/g/personal/juan_chavarria_prosalon_com_co/EegQmyTYyBpDtxlwodHe9iQBWbkIXseGnNVgpfIB4FNMyQ?e=iMaCK6" target="_blank">Marcas propias</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/ESlCp2J0vs5DpXddzWGqtbAB1Rd-lp2um2Y81gehRyq4DA?e=rR3KDt" target="_blank">Demografico</a></li>
                          <li><a class="dropdown-item" href="https://prosalon-my.sharepoint.com/:v:/g/personal/juan_chavarria_prosalon_com_co/ERTD-gr2Kn5NsCJVdgpk8ucB9H_3sRdY-vSwgYw6feh4wA?e=iSZdWi" target="_blank">SAC BLIND</a></li>
                          <li><a class="dropdown-item" href="https://prosalon-my.sharepoint.com/:v:/g/personal/juan_chavarria_prosalon_com_co/ERTD-gr2Kn5NsCJVdgpk8ucB9H_3sRdY-vSwgYw6feh4wA?e=iSZdWi" target="_blank">SAC Cromantic</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/ER47VEBPuUNCmzwhJDqE1iQBsl2RhJMDs_FAdnr6_tgOPA?e=nn5uVI" target="_blank">Redes Sociales Cromantic</a></li>
                          <li><a class="dropdown-item" href="https://prosalon.sharepoint.com/:v:/s/BIprosalon/ER47VEBPuUNCmzwhJDqE1iQBsl2RhJMDs_FAdnr6_tgOPA?e=nn5uVI" target="_blank">Redes Sociales Blind</a></li>  
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