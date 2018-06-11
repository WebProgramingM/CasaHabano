<?php  

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "josemonzter50@gmail.com";
    $to = "jose@socialastronauts.com";
    $subject = "Prueba de envio de email con PHP";
    $message = "Esto es un email de prueba enviado con PHP";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Email enviado!!";

			// $nombre = $_POST['name1'];
			// $correo = $_POST['email1'];
			// $mensaje = $_POST['message1'];

			// $destinatario = "apsaltidish@gmail.com";
			// $CC="josemonzter50@gmail.com";
			// $CO="jose@socialastronauts.com";
			// $asunto = "Contacto desde nuestra web";
			// $carta = "De: $nombre \n";
			// $carta .= "Correo: $correo \n";
			// $carta .= "Mensaje: $mensaje";
			// echo $carta;
			// // Enviando Mensaje
			// mail("$destinatario,$CC,$CO", $asunto, $carta);
			// header('Location:mensaje-de-envio.php');

?>