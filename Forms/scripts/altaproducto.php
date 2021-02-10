<?php
    include_once('conexion.php');
    session_start();
    $nombre = $_POST['nombre'];
    $idProductos = $_POST['idProductos'];
    
    $consultaSQL = "SELECT * from producto WHERE productos.nombre = '$nombre'";
    $consulta = $mysqli->query($consultaSQL);
    $consultaSQL2 = "SELECT * from producto WHERE productos.idProductos = '$idProductos'";
    $consulta2 = $mysqli->query($consultaSQL2);
    
    $resultado = mysqli_fetch_array($consulta);
    

    if($consulta->num_rows !=0){
        echo "<center><h1>¡Producto ya dado de alta!</h1></center>";
        header("Refresh:2; url=../gestionproductos.php");
    } else if($consulta2->num_rows !=0) {
        echo "<center><h1>ID de producto en uso</h1></center>";
        header("Refresh:2; url=../gestionproductos.php");
    }
    else {
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $idOferta = $_POST['idOferta'];
        $imagen = $_POST['imagen'];
        $precio = $_POST['precio'];
        $Insert = "INSERT INTO productos (categoria, descripcion, idOferta, idProductos, imagen, nombre, precio)
        VALUES ('$categoria', '$descripcion', '$idOferta', '$idProductos', '$imagen', '$nombre', '$precio')";
        $consulta_insert = $mysqli->query($Insert);
        echo "<center><h1>¡Alta de producto realizada!</h1></center>";
        header("Refresh:2; url=../gestionproductos.php");
    }
?>