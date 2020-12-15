<?php
    include_once('conexion.php');
    session_start();
    $user = $_POST['user'];
    $password = $_POST['password'];
    $consultaSQL = "SELECT * from usuario WHERE usuario.Username = '$user'";
    $consulta = $mysqli->query($consultaSQL);
    
    $resultado = mysqli_fetch_array($consulta);

    if(isset($resultado['Username']) && $resultado['contrasena'] == $password){
        echo("Chachi");
    }
    else if(isset($resultado['Username'])){
        echo "<center><h1>¡Fallo en contraseña!</h1></center>";
        header("Refresh:2; url=../login.php");
    }else {
        echo "<center><h1>¡Fallo en usuario!</h1></center>";
        header("Refresh:2; url=../login.php");
    }
?>