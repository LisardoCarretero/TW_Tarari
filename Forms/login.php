
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Formulario Login</title>
        <link rel="stylesheet" href="estilos/login.css">
        <link rel="stylesheet" href="../index.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light" id="cabezera">
            <div class="container-fluid" >
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a href="../index.html">             <img class="icon_shop"  src="../Icons/TARARI.png" width=15% height=15%  id="icon_shop"></a>
                    <span id="titulo"> TARARI KE TE VI </span>
                    <form class="d-flex" id="searcher">
                        <img src="../Icons/lupa.png" class="button" href="" id="lupa">
                        <input class="form-control me-2" type="search" placeholder="" aria-label="Search" id="buscador">
                    </form>
                    <a href="login.php">  <img class="icon_rigth"  src="../Icons/cesta.png" width=45px height=45px id="icon_cesta"></a>
                    <a href="login.php">  <img class="button"      src="../Icons/icon_user.png" id="icon_user"></a>
              </div>
            </div>
    </nav>
        <div class="cabezera2 ">
            <a href="C:\xampp\htdocs\VSCode\TODASLASCATEGORIAS">    <button class="buttons2" type="submit" name="Registro" value="Regístrate" id="text_header">Todas las categorías</button> </a>
            <a href="C:\xampp\htdocs\VSCode\Ofertas">               <button class="buttons2" type="submit" name="Registro" value="Ofertas" id="text_header">Ofertas</button> </a>
            <a href="C:\xampp\htdocs\VSCode\¿Dónde encontrarnos?">  <button class="buttons2" type="submit" name="Registro" value="location" id="text_header">¿Dónde encontrarnos?</button> </a>
            <a href="C:\xampp\htdocs\VSCode\Contáctanos">           <button class="buttons2" type="submit" name="Registro" value="Contáctanos" id="text_header">Contáctanos</button> </a>
        </div>


        <div class="container">
        <div class="recuadro">
            <img class="icon_user" src="../Icons/icon_user2.png" 
            alt="El icono de Usuario">
            <p>
            <form action="scripts/script-login.php" method="post">
            <h5><p class="cabezera">Iniciar sesión</p></h5>
            <div class="form-group row">
            <label for="inputUser" class="col-sm-2 col-form-label"><p class="define_box" name="user">Usuario</p></label>
                <div class="col-sm-9">
                <input required type="text_box" name="user"class="form-control" >
                </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label" name="password"><p class="define_box">Contraseña</p></label>
            <div class="col-sm-9">
                <input required type="password"name="password" class="form-control" >
            </div>
            </div>
            <p class="text-right"><a href="algo de php" class="enlace">¿Has olvidado tu contraseña?</p></a>
            <input class="buttons" type="submit" name="Inicio de sesión" value="Iniciar sesión"> 
            </form>
            <a href="registro.php"><button class="buttons3" type="submit" name="Registro" value="Regístrate">Regístrate</button> </a>
        </p>
        </div>
        </div>
    </body>
</html>


