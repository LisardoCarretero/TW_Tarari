<?php session_start();
if(!isset($_SESSION["usuario"]) || $_SESSION['tipo']==1 ){
    header("Refresh:0; url=../index.php");
}
?>

<!DOCTYPE html> <!-- control shift v previsualización -->
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">

    <title>Gestionando Usuarios</title>
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/script.js"></script>


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
            if (isset($_SESSION["usuario"])) {
                echo ("<a id=" . $fotoIcono . "-admin href=" . $prueba . "> <img class=" . $boton . " src=" . $logOut . " width=45px height=45px></a>");
            } else {
                echo ("<a id=" . $fotoIcono . "-admin href=" . $enlace . "> <img class=" . $boton . " src=" . $iconos . " width=45px height=45px></a>");
            }
            ?>
        </div>
    </nav>
    <div class="cabecera2 ">
        Gestionar usuarios
    </div>

    <table class="table table-responsive table-dark">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Admin</th>
                <th>Eliminar usuario</th>
                <th>Hacer admin</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once("../Forms/scripts/conexion.php");
            $consultaNumeros = "SELECT * from usuario";
            $query = $mysqli->query($consultaNumeros);


            while ($usuario = mysqli_fetch_array($query)) {

            ?>
                <tr>
                    <td> <?php echo $usuario["Nombre"];   ?></td>
                    <td> <?php echo $usuario["Apellidos"]; ?></td>
                    <td> <?php echo $usuario["Correo"];   ?></td>
                    <td> <?php echo $usuario["Tipo"];     ?></td>
                    <td>

                        <form action="../Forms/scripts/borraUser.php?nombre=<?php echo $usuario["Nombre"]; ?>" method="POST">
                            <button id="basura">

                                <image class="button" src="../Icons/basura.png" id="josean">
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="../Forms/scripts/hacerAdmin.php?nombre=<?php echo $usuario["Nombre"]; ?>" method="POST">
                            <button id="basura">
                                <image class="button" src="../Icons/admin.png" id="josean">
                            </button>
                        </form>
                    </td>

                </tr>

        </tbody>

    <?php
            }
    ?>
    </table>

</body>

</html>