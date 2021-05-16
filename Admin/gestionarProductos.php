<?php session_start();
if(!isset($_SESSION["usuario"]) || $_SESSION['tipo']==1 ){
    header("Refresh:0; url=../index.php");
}
?>

<!DOCTYPE html> <!-- control shift v previsualización -->
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">

    <title>Gestionando Productos</title>
    <link rel="stylesheet" href="../index.css">

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
        Gestionar productos
    </div>

    <div class="caja">
        <p id="caja-editar-producto">Editar producto</p>
        <nav >
            <form action="../Forms/scripts/editarproducto.php" method="POST" enctype="multipart/form-data" class="form-inline">
                <?php
                include_once("../Forms/scripts/conexion.php");
                $consulta_edit = "SELECT idProducto, Nombre FROM Producto";
                $resultado_edit = $mysqli->query($consulta_edit);
                $result_edit = mysqli_num_rows($resultado_edit);
                ?>
                <select required class="form-select form-select-sm" id="AInput" name="nombre" aria-label=".form-select-sm example">
                    <option selected>Selecciona el producto a editar</option>
                    <?php
                    if ($result_edit > 0) {
                        while ($productos_edit = mysqli_fetch_array($resultado_edit)) {
                    ?>

                            <option VALUE="<?php echo $productos_edit["idProducto"]; ?>">
                                <?php echo $productos_edit["Nombre"]; ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <input class="form-control mr-sm-2" id="AInput" name="editNombre" type="text" placeholder="Nuevo nombre">
                <input class="form-control mr-sm-2" id="AInput" name="descripción" type="text" placeholder="Nueva descripción">
                <input class="form-control mr-sm-2" id="AInput" name="precio" type="number" step=".01" placeholder="Nuevo precio">
                <input class="form-control mr-sm-2" id="AInput" name="stock" type="number" step="1" placeholder="Cambiar Stock">
                <select required class="form-select form-select-sm" id="AInput" name="ofertaFlash" aria-label=".form-select-sm example">
                    <option selected="yes " VALUE="2">Oferta Flash</option>
                    <option VALUE="0">NO</option>
                    <option VALUE="1">SI</option>
                </select>

                <?php

                $consulta = "SELECT idOferta, Descuento FROM Oferta";
                $resultado = $mysqli->query($consulta);
                $result_oferta = mysqli_num_rows($resultado);
                ?>
                <select class="form-select form-select-sm" id="AInput" name="oferta" aria-label=".form-select-sm example">
                    <option selected>No cambiar oferta</option>
                    <?php
                    if ($result_oferta >= 0) {
                        while ($oferta = mysqli_fetch_array($resultado)) {
                    ?>
                            <option VALUE="<?php echo $oferta["idOferta"]; ?>"><?php echo $oferta["Descuento"]; ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>

                <?php
                $consulta = "SELECT idCategoria, Nombre FROM Categoria";
                $resultado = $mysqli->query($consulta);
                $result_categ = mysqli_num_rows($resultado);
                ?>
                <select class="form-select form-select-sm" id="AInput" name="categoria" aria-label=".form-select-sm example">
                    <option selected>No cambiar categoria</option>
                    <?php
                    if ($result_categ > 0) {
                        while ($categoria = mysqli_fetch_array($resultado)) {
                    ?>

                            <option VALUE="<?php echo $categoria["idCategoria"]; ?>"><?php echo $categoria["Nombre"]; ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>

                <div class="form-group">
                    <label id="foto" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" accept="image/*" id="image" name="foto" multiple />
                    </div>
                </div>

                <button class="buttons3" type="submit">Editar</button>
            </form>
        </nav>
    </div>

    <div class="caja">
        <p id="caja-editar-producto">Añadir producto</p>
        <nav >
            <form class="form-inline" action="../Forms/scripts/altaproducto.php" enctype="multipart/form-data" method="POST">
                <input required class="form-control mr-sm-2" id="AInput" name="nombreProducto" type="text" placeholder="Nombre">
                <input required class="form-control mr-sm-2" id="AInput" name="descripción" type="text" placeholder="Descripción">
                <input required class="form-control mr-sm-2" id="AInput" name="precio" type="number" step=".01" placeholder="Precio">
                <input required class="form-control mr-sm-2" id="AInput" name="stock" type="number" step="1" placeholder="Stock">
                <select required class="form-select form-select-sm" id="AInput" name="ofertaFlash" aria-label=".form-select-sm example">
                    <option selected="yes " VALUE="2">Oferta Flash</option>
                    <option VALUE="0">NO</option>
                    <option VALUE="1">SI</option>
                </select>

                <?php

                $consulta = "SELECT idOferta, Descuento FROM Oferta";
                $resultado = $mysqli->query($consulta);
                $result_oferta = mysqli_num_rows($resultado);
                ?>
                <select required class="form-select form-select-sm" id="AInput" name="oferta" aria-label=".form-select-sm example">
                    <option selected>Selecciona una oferta disponible</option>
                    <?php
                    if ($result_oferta >= 0) {
                        while ($oferta = mysqli_fetch_array($resultado)) {
                    ?>
                            <option VALUE="<?php echo $oferta["idOferta"]; ?>"><?php echo $oferta["Descuento"]; ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>

                <?php
                $consulta = "SELECT idCategoria, Nombre FROM Categoria";
                $resultado = $mysqli->query($consulta);
                $result_categ = mysqli_num_rows($resultado);
                ?>
                <select required class="form-select form-select-sm" id="AInput" name="categoria" aria-label=".form-select-sm example">
                    <option selected>Selecciona la categoria deseada</option>
                    <?php
                    if ($result_categ > 0) {
                        while ($categoria = mysqli_fetch_array($resultado)) {
                    ?>

                            <option VALUE="<?php echo $categoria["idCategoria"]; ?>"><?php echo $categoria["Nombre"]; ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <br></br>
                <div class="form-group">
                    <label id="foto" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" accept="image/*" id="image" name="foto" multiple />
                    </div>
                </div>


                <button class="buttons3" type="submit">Añadir</button>
            </form>
        </nav>
    </div>

    <div class="caja">
        <p id="caja-editar-producto">Eliminar producto</p>
        <nav >
            <form class="form-inline" action="../Forms/scripts/bajaproducto.php" method="POST">
                <?php

                $consulta_Delete = "SELECT idProducto, Nombre FROM Producto";
                $resultado_Delete = $mysqli->query($consulta_Delete);
                $result_Delete = mysqli_num_rows($resultado_Delete);
                ?>
                <select required class="form-select form-select-sm" id="AInput" name="delete" aria-label=".form-select-sm example">
                    <option selected>Selecciona el producto a eliminar</option>
                    <?php
                    if ($result_Delete > 0) {
                        while ($productos_Delete = mysqli_fetch_array($resultado_Delete)) {
                    ?>

                            <option VALUE="<?php echo $productos_Delete["idProducto"]; ?>">
                                <?php echo $productos_Delete["Nombre"]; ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <button class="buttons3" type="submit">Eliminar</button>
            </form>
        </nav>
        <p id="caja-editar-producto">Eliminar categoria</p>
        <nav >
            <form class="form-inline" action="../Forms/scripts/bajacategoria.php" method="POST">
                <?php

                $consulta = "SELECT idCategoria, Nombre FROM Categoria";
                $resultado = $mysqli->query($consulta);
                $result_categ = mysqli_num_rows($resultado);
                ?>
                <select required class="form-select form-select-sm" id="AInput" name="deleteCat" aria-label=".form-select-sm example">
                    <option selected>Selecciona la categoria a eliminar</option>
                    <?php
                    if ($result_categ > 0) {
                        while ($categoria = mysqli_fetch_array($resultado)) {
                    ?>
                            <option VALUE="<?php echo $categoria["idCategoria"]; ?>"><?php echo $categoria["Nombre"]; ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <button class="buttons3" type="submit">Eliminar</button>
            </form>
        </nav>

        <p id="caja-editar-producto">Añadir categoria</p>
        <nav >
            <form class="form-inline" action="../Forms/scripts/altacategoria.php" method="POST" enctype="multipart/form-data">
                <input required class="form-control mr-sm-2" id="AInput" type="search" name="nuevaCat" placeholder="Nombre de la categoria" aria-label="búsquedae">
                <div class="form-group">
                    <br></br>
                    <label id="foto" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" accept="image/*" id="image" name="foto" multiple />
                    </div>
                </div>
                <button class="buttons3" type="submit">Añadir</button>
            </form>
        </nav>

    </div>


</body>

</html>