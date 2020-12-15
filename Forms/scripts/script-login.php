<?php
    include_once('conexion.php');
    session_start();
    $user = $_POST['user'];
    $password = $_POST['password'];
    $consultaSQL = "SELECT * from usuario WHERE usuario.Username = '$user' AND usuario  .contrasena = '$password'";
    $consulta = $mysqli->query($consultaSQL);
    
    $resultado = mysqli_fetch_array($consulta);

    if(isset($resultado['Username'])){
        echo("Chachi");
    }
    else{
        include_once('login-incorrecto.php');
    }
?>