<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8"><title>Formulario Registro</title>
    <link rel="stylesheet" href="estilos/registro_css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
      <div class="recuadro">
       
        <form action="../Scripts/script-singup.php" method="post">
        <img src="../../Icons/icon_user2.png"class="icon_user">
          <h5><p class="cabezera">Regístrate</p></h5>
          <div class="form-group row">
           <label for="inputNombre" class="col-sm-2 col-form-label"><p class="define_box" name="nombre"></p></label>
            <div class="col-sm-9">
             <input type="text_box" class="form-control" name="nombre" placeholder="Nombre*">
            </div>
           </div>
           <div class="form-group row">
            <label for="inputApellidos" class="col-sm-2 col-form-label"><p class="define_box" name="Apellidos"></p></label>
             <div class="col-sm-9">
              <input type="text_box" class="form-control" name="Apellidos" placeholder="Apellidos*">
             </div>
            </div>
           <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label"><p class="define_box" name="email"></p></label>
             <div class="col-sm-9">
              <input type="text_box" class="form-control" name="email" placeholder="Correo electrónico*">
             </div>
            </div>
            <div class="form-group row">
            <label for="inputEmailBool" class="col-sm-2 col-form-label"><p class="define_box" name="emailBool"></p></label>
             <div class="col-sm-9">
              <input type="text_box" class="form-control" name="emailBool" placeholder="Confirmar correo electrónico*">
             </div>
            </div>
            <div class="form-group row">
                <label for="inputContraseña" class="col-sm-2 col-form-label"><p class="define_box" name="password"></p></label>
                 <div class="col-sm-9">
                  <input type="password" class="form-control" name="password" placeholder="Contraseña*">
                 </div>
            </div>
            <div class="form-group row">
                <label for="inputContraseñaBool" class="col-sm-2 col-form-label"><p class="define_box" name="passwordBool"></p></label>
                 <div class="col-sm-9">
                  <input type="password" class="form-control" name="passwordBool" placeholder="Confirmar contraseña*">
                 </div>
            </div>
            <div class="form-group row">
                <label for="inputUsuario" class="col-sm-2 col-form-label"><p class="define_box" name="Usuario"></p></label>
                 <div class="col-sm-9">
                  <input type="text_box" class="form-control" name="Usuario" placeholder="Usuario*">
                 </div>
            </div>
            <div class="form-group row">
                <label for="inputTelf" class="col-sm-2 col-form-label"><p class="define_box" name="telf"></p></label>
                 <div class="col-sm-9">
                  <input type="text_box" class="form-control" name="telf" placeholder="Teléfono">
                 </div>
            </div>
          <input class="buttons" type="submit" name="Contraseña" value="Regístrate">
        </form>
      </div>
    </div>
</body>