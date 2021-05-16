<?php session_start();
if(!isset($_SESSION["usuario"]) || $_SESSION['tipo']==1 ){
    header("Refresh:0; url=../index.php");
}
?>

<!DOCTYPE html> <!-- control shift v previsualización -->
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../index.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body class="gestion-usuario">
    <nav class="navbar navbar-expand-lg navbar-light" id="cabecera">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a href="indexAdmin.php"> <img class="icon_shop" src="../Icons/TARARI.png" width=15% height=15% id="icon_shop"></a>
                <span id="titulo"> TARARI KE TE VI </span>
            </div>
            <?php
            $enlace = "../login.php";
            $boton = "button";
            $iconos = "../Icons/icon_user.png";
            $fotoIcono = "icon_user";
            $prueba = "../Forms/prueba.php";
            $logOut = "../Icons/logout.png";
            echo ("<a id=" . $fotoIcono . "-admin href=" . $prueba . "> <img class=" . $boton . " src=" . $logOut . " width=45px height=45px></a>");
            ?>

        </div>
    </nav>
    <div class="cabecera2 ">
        Menú del administrador
    </div>



    <div class="funcionadmin-list">
        <div class="product-box">
            <a href="gestionarUsuarios.php">
                <div class="product">
                    <img src="../Icons/gestor.png">
                    <div class="titulo">Gestionar Usuarios<br></br></div>
                </div>
            </a>
        </div>
        <div class="product-box" id="caja_centro">
            <a href="gestionarProductos.php">
                <div class="product">
                    <img src="../Icons/TARARI.png">
                    <div class="titulo">Gestionar Productos<br></br></div>
                </div>
            </a>
        </div>


        <div class="product-box">
            <a href="gestionarReservas.php">
                <div class="product">
                    <img src="../Icons/reservas.png">
                    <div class="titulo">Gestionar Reservas<br></br></div>
                </div>
            </a>
        </div>

    </div>

</body>

</html>