
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Formulario Login</title>
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
        <div class="recuadro">
            <img class="icon_user" src="icon_user.png" 
            alt="El icono de Usuario">
            <p>
            <form action="script-login.php" method="post">
            <h5><p class="cabezera">Iniciar sesión</p></h5>
            <div class="form-group row">
            <label for="inputUser" class="col-sm-2 col-form-label"><p class="define_box" name="user">Usuario</p></label>
                <div class="col-sm-9">
                <input type="text_box" name="user"class="form-control" >
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label" name="password"><p class="define_box">Contraseña</p></label>
            <div class="col-sm-9">
                <input type="password"name="password" class="form-control" >
            </div>
            </div>
            <p class="text-right"><a href="algo de php" class="enlace">¿Has olvidado tu contraseña?</p></a>
            <input class="buttons" type="submit" name="Inicio de sesión" value="Iniciar sesión"> 
            </form>
            <a href="C:\xampp\htdocs\VSCode\registro.php"><button class="buttons2" type="submit" name="Registro" value="Regístrate">Regístrate</button> </a>
        </p>
        </div>
        </div>
    </body>
</html>


