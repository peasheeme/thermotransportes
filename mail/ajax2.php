<?php

$msjStatus2 = null;

//comprobar si existe el botón
if(isset($_POST['ajax2'])){

	//variables de cada campo
	$nombre2 = trim($_POST['nombre2']);
	$email2 = trim($_POST['email2']);
	(int)$telefono2 = trim($_POST['telefono2']);
	$ciudad2 = trim($_POST['ciudad2']);
	$mensaje2 = trim($_POST['mensaje2']);

	//validación del campo nombre
	if($nombre2 == ""){
		$msjStatus2 = "<script>document.getElementById('nombre2-status').innerHTML='*El campo es requerido';</script>";
	}

	elseif(!preg_match('/^[a-zA-Z ]*$/', $nombre2)){
		$msjStatus2 = "<script>document.getElementById('nombre2-status').innerHTML='*Solo se admiten letras';</script>";
	}

	elseif(strlen($nombre2)<2){
		$msjStatus2 = "<script>document.getElementById('nombre2-status').innerHTML='*M&iacute;nimo 2 caracteres';</script>";
	}

	elseif(strlen($nombre2)>100){
		$msjStatus2 = "<script>document.getElementById('nombre2-status').innerHTML='*M&aacute;ximo 100 caracteres';</script>";
	}

	//validación campo email
	elseif($email2 == ""){
		$msjStatus2 = "<script>document.getElementById('email2-status').innerHTML='*El campo es requerido';</script>";
	}

	elseif(!filter_var($email2, FILTER_VALIDATE_EMAIL)){
		$msjStatus2 = "<script>document.getElementById('email2-status').innerHTML='*Introduce un correo v&aacute;lido';</script>";
	}

	elseif(strlen($email2)<2){
		$msjStatus2 = "<script>document.getElementById('email2-status').innerHTML='*M&iacute;nimo 2 caracteres';</script>";
	}

	elseif(strlen($email2)>200){
		$msjStatus2 = "<script>document.getElementById('email2-status').innerHTML='*M&aacute;ximo 200 caracteres';</script>";
	}

	//validación campo teléfono
	elseif($telefono2 == ""){
		$msjStatus2 = "<script>document.getElementById('telefono2-status').innerHTML='*El campo es requerido';</script>";
	}

	elseif(!filter_var($telefono2, FILTER_VALIDATE_INT)){
		$msjStatus2 = "<script>document.getElementById('telefono2-status').innerHTML='*S&oacute;lo n&uacute;meros';</script>";
	}

	elseif(strlen($telefono2)<8){
		$msjStatus2 = "<script>document.getElementById('telefono2-status').innerHTML='*Introduzca un t&eacute;lefono v&aacute;lido';</script>";
	}

	elseif(strlen($telefono2)>15){
		$msjStatus2 = "<script>document.getElementById('telefono2-status').innerHTML='*T&eacute;lefono demasiado largo';</script>";
	}

	//validación campo ciudad
	elseif($ciudad2 == ""){
		$msjStatus2 = "<script>document.getElementById('ciudad2-status').innerHTML='*El campo es requerido';</script>";
	}

	elseif(strlen($ciudad2)<2){
		$msjStatus2 = "<script>document.getElementById('ciudad2-status').innerHTML='*M&iacute;nimo 2 caracteres';</script>";
	}

	elseif(strlen($ciudad2)>70){
		$msjStatus2 = "<script>document.getElementById('ciudad2-status').innerHTML='*M&aacute;ximo 70 caracteres';</script>";
	}

	//validación campo mensaje
	elseif($mensaje2 == ""){
		$msjStatus2 = "<script>document.getElementById('mensaje2-status').innerHTML='*El campo es requerido';</script>";
	}

	elseif(strlen($mensaje2)<2){
		$msjStatus2 = "<script>document.getElementById('mensaje2-status').innerHTML='*M&iacute;nimo 2 caracteres';</script>";
	}

	elseif(strlen($mensaje2)>500){
		$msjStatus2 = "<script>document.getElementById('mensaje2-status').innerHTML='*M&aacute;ximo 500 caracteres';</script>";
	}

	//validar check
	elseif(!isset($_POST['terminos2'])){
		$msjStatus2 = "<script>document.getElementById('terminos2-status').innerHTML='*Debes aceptar los t&eacute;rminos y condiciones';</script>";
	}

	else{
			//a quién se enviará el correo
			$destino2 = "juan_27angel@hotmail.com";

			//asunto del correo
			$asunto2 = "Mensaje de la página web";

			//cabeceras para el envío de html
			$headers = 'MIME-Version: 1.0' . "\r\n"; 
			$headers.= "Content-type: text/html; charset=UTF-8\r\n";

			//contenido del correo
			$contenido2 = '
			<!DOCTYPE html>
			<html>
			<head></head>
			<body>
				<h2>'.$nombre2.' ha enviado el siguiente mensaje a través de tu sitio web</h2>
		
				<p>'.$mensaje2.'</p>
		
				<p>Contacta a  '.$nombre2.' al correo:  <span style="color:blue;"> '.$email2.'</span> o al télefono: '.$telefono2.' </p>
				
				<ul>
					<li>Correo: '.$email2.'</li>
					<li>Teléfono: '.$telefono2.'</li>
					<li>Ciudad: '.$ciudad2.'</li>
				</ul>

				<p>Ir a mi sitio web <span style="color:blue">http://thermotransportes.com/</span></p>
			</body>
			</html>
		';

		$envio = mail($destino2, $asunto2, $contenido2, $headers);

		if($envio){
			header('Location:gracias.php');
			//enviando autorespuesta
			$pfw_header = "From: ventas@thermotransportes.com"
			. "Reply-To: ventas@thermotransportes.com";
			$pfw_subject = "Mensaje recibido";
			$pfw_email_to = "$correo";
			$pfw_message = "Muchas Gracias $nombre2, por su mensaje: $mensaje"
			. "Su mensaje ha sido recibido satisfactoriamente. n"
			. "Nos pondremos en contacto contigo lo antes posible en su e-mail: $correo n"
			. " n"
			. " n"
			. "--------------------------------------------------------------------------n"
			. "Favor de NO responder este E-mail ya que es generado Automaticamente.n";
			
			@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header);
		}else{
			echo "<script>alert('El mensaje no se ha podido enviar, inténtelo de nuevo en unos momentos, Redireccionando...');</script>";
			echo "<script>window.location.href = 'index.php';</script>";
		}
	}
}

echo $msjStatus2;

?>