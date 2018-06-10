<?php  

	// // if (isset($_POST['g-recaptcha-response'])) {
	// 	$response_recaptcha = $_POST['g-recaptcha-response'];
	// 	$secret ="6LefTFcUAAAAAK-rZPD0FILf2Ra75Tce2_IOhVtC";
	// 	$ip= $_SERVER['SERVER_ADDR'];
	// 	$url="https://www.google.com/recaptcha/api/siteverify";
	// 	$response = file_get_contents($url."?secret=".$secret."&response=".$response_recaptcha."&remoteip=".$ip);
	// 	$jsonresponse=json_decode($response);
	// 	echo $jsonresponse->success."<br>";
	// 	if ($jsonresponse->success) {
			// Llamando a los campos
			$nombre = $_POST['name'];
			$correo = $_POST['email'];
			$mensaje = $_POST['message'];
			// Datos para el correo
			// $destinatario = "reservas@nomadscancun.com";
			$destinatario = "apsaltidish@gmail.com";
			$CC="josemonzter50@gmail.com";
			$CO="jose@socialastronauts.com";
			$asunto = "Contacto desde nuestra web";
			$carta = "De: $nombre \n";
			$carta .= "Correo: $correo \n";
			$carta .= "Mensaje: $mensaje";
			// Enviando Mensaje
			mail("$destinatario,$CC,$CO", $asunto, $carta);
			header('Location:mensaje-de-envio.html');
	// 	}
	// 	else{
	// 		header('Location:../error-mensaje.html');	
	// 	}				
	// }
?>