<?php
error_reporting(0);
$nombre = $_POST['nombre'];
$correo= $_POST['correoenvia'];
$mensaje=$_POST['mensaje'];
$header = 'From: ' . $correo . " rn";
$header .= "X-Mailer: PHP/" . phpversion() . " rn";
$header .= "Mime-Version: 1.0 rn";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por : " . $nombre . " rn";
$mensaje .= "Su e-mail es : " . $correo. " rn";
$mensaje .= "Mensaje : " . $_POST['mensaje'] . " rn";
$mensaje .= "Enviado el ; " . date('d/m/Y', time());

$para = 'suarezmolina17@gmail.com';
$asunto = 'Formulario enviado pagina web';

mail($para, $asunto, utf8_decode($mensaje), $header, $telefono);

echo 'mensaje enviado correctamente';

?>