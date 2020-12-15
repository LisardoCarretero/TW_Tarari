<?php
    include_once('conexion.php');
    session_start();

    $Nombre = $_POST['nombre'];
    $Apellidos = $_POST['Apellidos'];
    $Email = $_POST['email'];
    $Conf_email = $_POST['emailBool'];
    $Password = $_POST['password'];
    $Conf_password = $_POST['passwordBool'];
    $Usuario = $_POST['Usuario'];
    $Telefono = $_POST['telf'];

    $findme   = '@';
    $pos = strpos($Email, $findme);
    if ($pos === false) {
        echo "<center><h1>¡Usuario ya registrado!</h1></center>";
        header("Refresh:2; url=../login.php"); 
    } 
    //Comprobar si confirmaciones son iguales, si no lanzar a una nueva pagina 
    $consultaSQL = "SELECT * from usuario WHERE usuario.Username = '$Usuario' AND usuario  .contrasena = '$Password'";
    $consulta = $mysqli->query($consultaSQL);
    
    if($consulta->num_rows ==0){

        
        $Insert = "INSERT INTO Usuario (Username, nombre, apellidos, correo, contrasena, telefono, TipoUsuario)
        VALUES ('$Usuario', '$Nombre', '$Apellidos', '$Email', '$Password', '$Telefono', '0')";
        
        $consulta_insert = $mysqli->query($Insert);
        
        include_once("../../index.html");
    }else {
        echo "<center><h1>¡Usuario ya registrado!</h1></center>";
        header("Refresh:2; url=../login.php");       
    }
?>