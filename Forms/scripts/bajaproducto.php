<?php
    include_once('conexion.php');
    session_start();
    $nombre = $_POST['nombre'];
    $idProductos = $_POST['idProductos'];
    
    $consultaSQL = "SELECT * from producto WHERE productos.nombre = '$nombre'";
    $consultaSQL2 = "SELECT * from producto WHERE productos.idProductos = '$idProductos'";
    $consulta2 = $mysqli->query($consultaSQL2);
    $consulta = $mysqli->query($consultaSQL);
    

    

    if(($consulta->num_rows ==0) && ($consulta2->num_rows ==0)){
        echo "<center><h1>¡Ese producto no existe!</h1></center>";
        header("Refresh:2; url=../gestionproductos.php");
    } 
    if($consulta->num_rows ==0){
        $Delete1 = "DELETE FROM productos WHERE productos.nombre = '$nombre'";
        $consulta_delete1 = $mysqli->query($Delete1);
        echo "<center><h1>¡Baja de producto realizada!</h1></center>";
        header("Refresh:2; url=../gestionproductos.php");
    }

    if($consulta->num_rows ==0){
        $Delete2 = "DELETE FROM productos WHERE productos.idProductos = '$idProductos'";
        $consulta_delete2 = $mysqli->query($Delete2);
        echo "<center><h1>¡Baja de producto realizada!</h1></center>";
        header("Refresh:2; url=../gestionproductos.php");
    }
?>