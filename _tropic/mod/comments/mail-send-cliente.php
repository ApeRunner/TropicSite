<?php 


$email = $_POST['Email'];



// PHP MAILIER
include '../global/config/phpmailer.php';
include 'mensaje-cliente.php';





// Mensaje
$mail->Subject = "Nuevo Comentario en tu Publicación" ;
//$html = file_get_contents('includes/mensaje_html.php');
//$text = file_get_contents('includes/mensaje_text.php');
$mail->Body    = $body;
$mail->IsHTML(true);
//$mail->AltBody = $text;




// Destinatario
$mail->AddAddress($Email1);  // Add a recipient



// Enviar Email
if(!$mail->Send()) echo "No se envió";


?>