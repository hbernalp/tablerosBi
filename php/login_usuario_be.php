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
    header("location: ../_101Operaciones.php");
    exit();
        }else{
            if($filas['id_perfil'] == 102){
                header("location: ../_102OpMarcProp.php");
                exit();
            }else{
                if($filas['id_perfil'] == 103){
                    header("location: ../_103OpSupEcoMerc.php");
                    exit();
                }else{
                    if($filas['id_perfil'] == 104){
                        header("location: ../_104OpSupCrm.php");
                        exit();
                    }else{
                        if($filas['id_perfil'] == 105){
                            header("location: ../_105OpSupCrmMarcPropEcomMercAudi.php");
                            exit();
                        }else{
                            if($filas['id_perfil'] == 106){
                                header("location: ../_106OpSupply.php");
                                exit();
                            }else{
                                if($filas['id_perfil'] == 107){
                                    header("location: ../_107OpCrmMerc.php");
                                    exit();
                                }else{
                                    if($filas['id_perfil'] == 108){
                                        header("location: ../_108OpCrmMercAud.php");
                                        exit();
                                    }else{
                                        if($filas['id_perfil'] == 109){
                                            header("location: ../_109OpCrm.php");
                                            exit();
                                        }else{
                                            if($filas['id_perfil'] == 110){
                                                header("location: ../_110OpSupFinan.php");
                                                exit();
                                            }else{
                                                if($filas['id_perfil'] == 111){
                                                    header("location: ../_111SupSac.php");
                                                    exit();
                                                }else{
                                                    if($filas['id_perfil'] == 112){
                                                        header("location: ../_112OpSupCrmMarcPropMercHrAudi.php");
                                                        exit();
                                                    }else{
                                                        if($filas['id_perfil'] == 115){
                                                            header("location: ../todos.php");
                                                            exit();
                                                        }else{
                                                            if($filas['id_perfil'] == 116){
                                                                header("location: ../_116OpFinan.php");
                                                                exit();
                                                            }else{
                                                                if($filas['id_perfil'] == 117){
                                                                    header("location: ../_117OpFinanEcom.php");
                                                                    exit();
                                                                }else{
                                                                    if($filas['id_perfil'] == 118){
                                                                        header("location: ../_118OpFinanEcomMerc.php");
                                                                        exit();
                                                                    }else{
                                                                        if($filas['id_perfil'] == 119){
                                                                            header("location: ../_119OpHR.php");
                                                                            exit();
                                                                        }else{
                                                                            if($filas['id_perfil'] == 120){
                                                                                header("location: ../HR.php");
                                                                                exit();
                                                                            }else{
                                                                                if($filas['id_perfil'] == 121){
                                                                                    header("location: ../_121EcomMerc.php");
                                                                                    exit();
                                                                                }else{
                                                                                    if($filas['id_perfil'] == 122){
                                                                                        header("location: ../_122FinanHR.php");
                                                                                        exit();
                                                                                    }else{
                                                                                        if($filas['id_perfil'] == 123){
                                                                                            header("location: ../_122FinanHR.php");
                                                                                            exit();
                                                                                        }else{
                                                                                            if($filas['id_perfil'] == 123){
                                                                                                header("location: ../_123MarcProp.php");
                                                                                                exit();
                                                                                            }else{
                                                                                                if($filas['id_perfil'] == 124){
                                                                                                    header("location: ../_124MercHR.php");
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
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
?>

