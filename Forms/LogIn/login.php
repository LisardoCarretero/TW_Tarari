<?php
$conect=mysqli_connect("localhost","root","","tarari_ke_te_vi");

$username=htmlspecialchars($_POST['Username']);
$contrasena=htmlspecialchars($_POST['contrasena']);

$consulta ="SELECT * FROM usuario WHERE Username='$username' and contrasena='$contrasena'";
$resultado = mysqli_query($conect, $consulta);

$filas = mysqli_num_rows($resultado);
if($filas>0){

}
else{
header('C:\xampp\htdocs\TarariKeTeVi\Forms\LogIn\correct.html');
exit;
}
mysqli_free_result($resultado);
mysqli_close($conect);
?>
