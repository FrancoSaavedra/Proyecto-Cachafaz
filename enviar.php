<?php
$nombre = $_POST ["nombre"];
$mail = $_POST["email"];
$mensaje = $_POST["mensaje"];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
​
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n"; //nombre del cliente//
$mensaje .= "Su e-mail es: " . $mail . " \r\n"; //mail del cliente//
$mensaje .= "Mensaje: " . $_POST[' mensaje '] . " \r\n"; //Mensaje del cliente//
$mensaje .= "Enviado el " . date('d/m/Y', time()); //fecha de emisión de ese mail//
​
$para = 'francosaave1998@gmail.com'; // El mail a donde van a llegar los mensajes
$asunto = 'Mensaje de mi sitio web'; //asunto que me va a llegar a mi mail cuando se trate de un  mail de la web//
​
mail($para, $asunto, utf8_decode($mensaje), $header); //magia para que funcione el php//
​
header('Location:index.html');//para que una ves que toca el boton de enviar le vuelve al home//








?>