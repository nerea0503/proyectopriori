<?php
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$servicio = $_POST['servicio'];

$header = 'From' . $email . "\r\n";
$header .= "X-Mailer:PHP/" . phpversion() , "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content- type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . "\r\n";
$message .="Su email es: " . $email . "\r\n";
$message .= "servicio" . $servicio . "\r\n";
$message .= "Enviado el:"  . date('d/m/y', time());

$para = 'martinahigimanisanmartin@gmail.com';
$asunto = 'CENTRO DE TERAPIA INTEGRAL ELUS';

mail ($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
