<?php  


			$nombre = $_POST['name'];
			$correo = $_POST['email'];
			$mensaje = $_POST['message'];

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

?>