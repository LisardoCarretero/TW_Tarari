<?php
if (isset($_POST['submit'])) {
    //ini_set( 'display_errors', 1 ); # REMOVE // FOR DEBUG
    //error_reporting( E_ALL ); # REMOVE // FOR DEBUG
    $from = "tarariktevi265@hotmail.com"; // Email con el dominio del Hosting para evitar SPAM
    $fromName = "TARARI KE TE VI"; // Nombre que saldrá en el email recibido
    $to = $_POST['email'];; // Dirección donde se enviará el formulario
    $subject = $_POST['asunto']; // Asunto del Formulario

    /* Componemos el mensaje */
    $fullMessage = "Hola! " . $to . "\r\n";
    $fullMessage .= $_POST['nombre'] . " " . $_POST['validarApellidos'] . " te ha enviado un mensaje:\r\n";
    $fullMessage .= "\r\n";
    $fullMessage .= "Nombre: " . $_POST['nombre'] . "\r\n";
    $fullMessage .= "E-Mail: " . $_POST['email'] . "\r\n";
    $fullMessage .= "Asunto: " . $_POST['asunto'] . "\r\n";
    $fullMessage .= "Mensaje: " . $_POST['msg'] . "\r\n";
    $fullMessage .= "\r\n";
    $fullMessage .= "Saludos!\r\n";

    /* Creamos las cabeceras del Email */
    $headers = "TARARI KE TE VI\r\n";
    $headers .= "From: " . $fromName . "<" . $from . ">\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    $headers .= "Return-Path: " . $to . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    /* Enviamos el Formulario*/
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<center><h2>El E-Mail se ha enviado correctamente!</h2></center>";
    } else {
        echo "<center><h2>Ops ! El E-Mail ha fallado!</h2></center>S";
    }
}
?>