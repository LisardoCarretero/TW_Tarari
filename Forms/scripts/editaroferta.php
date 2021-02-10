<?php
    include_once('conexion.php');
    session_start();
    $nombre = $_POST['nombre'];
    $idProductos = $_POST['idProductos'];
    
    $consultaSQL = "SELECT * from producto WHERE productos.nombre = '$nombre' AND productos.idProductos = '$idProductos'";
    $consulta = $mysqli->query($consultaSQL);
    

    

    if($consulta->num_rows ==0){
        echo "<center><h1>¡Ese producto no existe!</h1></center>";
        header("Refresh:2; url=../gestionproductos.php");
    } 
    else {
        $idOferta = $_POST['idOferta'];
        $Update = "UPDATE productos set productos.idOderta = '$idOferta' WHERE productos.nombre = '$nombre' AND productos.idProductos = '$idProductos'";
        $consulta_update = $mysqli->query($Update);
        echo "<center><h1>¡Cambio de oferta realizado!</h1></center>";
        header("Refresh:2; url=../gestionproductos.php");
    }
?>