<!DOCTYPE html>        <!-- control shift v previsualización -->
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8"><title>Formulario Registro</title>
    <link rel="stylesheet" href="estilos/registro.css">
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
        <img class="icon_user" src="../Icons/icon_user2.png" width=15% height=15%
        alt="El icono de Usuario">
        <form action="scripts/script-singup.php" method="post">
          <h5><p class="cabezera">Regístrate</p></h5>
          <div class="form-group row">
           <label for="inputNombre" class="col-sm-2 col-form-label"><p class="define_box" name="nombre"></p></label>
            <div class="col-sm-9">
             <input required type="text_box" class="form-control" name="nombre" placeholder="Nombre*">
            </div>
           </div>
           <div class="form-group row">
            <label for="inputApellidos" class="col-sm-2 col-form-label"><p class="define_box" name="Apellidos"></p></label>
             <div class="col-sm-9">
              <input required type="text_box" class="form-control" name="Apellidos" placeholder="Apellidos*">
             </div>
            </div>
           <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label"><p class="define_box" name="email"></p></label>
             <div class="col-sm-9">
              <input required type="email" class="form-control" name="email" placeholder="Correo electrónico*">
             </div>
            </div>
            <div class="form-group row">
            <label for="inputEmailBool" class="col-sm-2 col-form-label"><p class="define_box" name="emailBool"></p></label>
             <div class="col-sm-9">
              <input required type="email" class="form-control" name="emailBool" placeholder="Confirmar correo electrónico*">
             </div>
            </div>
            <div class="form-group row">
                <label for="inputContraseña" class="col-sm-2 col-form-label"><p class="define_box" name="password"></p></label>
                 <div class="col-sm-9">
                  <input required type="password" class="form-control" name="password" placeholder="Contraseña*">
                 </div>
            </div>
            <div class="form-group row">
                <label for="inputContraseñaBool" class="col-sm-2 col-form-label"><p class="define_box" name="passwordBool"></p></label>
                 <div class="col-sm-9">
                  <input required type="password" class="form-control" name="passwordBool" placeholder="Confirmar contraseña*">
                 </div>
            </div>
            <div class="form-group row">
                <label for="inputUsuario" class="col-sm-2 col-form-label"><p class="define_box" name="Usuario"></p></label>
                 <div class="col-sm-9">
                  <input required type="text_box" class="form-control" name="Usuario" placeholder="Usuario*">
                 </div>
            </div>
            <div class="form-group row">
                <label for="inputTelf" class="col-sm-2 col-form-label"><p class="define_box" name="telf"></p></label>
                 <div class="col-sm-9">
                  <input type="tel" pattern="([0-9]{9})"  class="form-control" name="telf" placeholder="Teléfono">
                 </div>
            </div>
          <input class="buttons" type="submit" name="Contraseña" value="Regístrate">
        </form>
      </div>
    </div>
</body>