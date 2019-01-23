<?php
//mensaje de salida
$msjStatus = null;

//comprobar si existe el botón
if(isset($_POST['ajax'])){

	//variables de cada campo
	$nombre = trim($_POST['nombre']);
	$email = trim($_POST['email']);
	(int)$telefono = trim($_POST['telefono']);
	$origen = trim($_POST['origen']);
	$destino = trim($_POST['destino']);
	$fecha = trim($_POST['fecha']);
	$opcionesServicio = trim($_POST['opcionesServicio']);
	$opcionesCarga = trim($_POST['opcionesCarga']);
	$mensaje = trim($_POST['mensaje']);
	

	//variables para la fecha
	$hoy = date("Y-m-d");
	$fechaFormulario = $fecha;



	//validación del campo nombre
	if($nombre == ""){
		$msjStatus = "<script>document.getElementById('nombre-status').innerHTML='*El campo es requerido';</script>";
	}

	elseif(!preg_match('/^[a-zA-Z ]*$/', $nombre)){
		$msjStatus = "<script>document.getElementById('nombre-status').innerHTML='*Solo se admiten letras';</script>";
	}

	elseif(strlen($nombre)<2){
		$msjStatus = "<script>document.getElementById('nombre-status').innerHTML='*M&iacute;nimo 2 caracteres';</script>";
	}

	elseif(strlen($nombre)>100){
		$msjStatus = "<script>document.getElementById('nombre-status').innerHTML='*M&aacute;ximo 100 caracteres';</script>";
	}

	//validación campo email
	elseif($email == ""){
		$msjStatus = "<script>document.getElementById('email-status').innerHTML='*El campo es requerido';</script>";
	}

	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$msjStatus = "<script>document.getElementById('email-status').innerHTML='*Introduce un correo v&aacute;lido';</script>";
	}

	elseif(strlen($email)<2){
		$msjStatus = "<script>document.getElementById('email-status').innerHTML='*M&iacute;nimo 2 caracteres';</script>";
	}

	elseif(strlen($email)>200){
		$msjStatus = "<script>document.getElementById('email-status').innerHTML='*M&aacute;ximo 200 caracteres';</script>";
	}

	//validación campo teléfono
	elseif($telefono == ""){
		$msjStatus = "<script>document.getElementById('telefono-status').innerHTML='*El campo es requerido';</script>";
	}

	elseif(!filter_var($telefono, FILTER_VALIDATE_INT)){
		$msjStatus = "<script>document.getElementById('telefono-status').innerHTML='*S&oacute;lo n&uacute;meros';</script>";
	}

	elseif(strlen($telefono)<8){
		$msjStatus = "<script>document.getElementById('telefono-status').innerHTML='*Introduzca un t&eacute;lefono v&aacute;lido';</script>";
	}

	elseif(strlen($telefono)>15){
		$msjStatus = "<script>document.getElementById('telefono-status').innerHTML='*T&eacute;lefono demasiado largo';</script>";
	}

	//validación campo origen
	elseif($origen == ""){
		$msjStatus = "<script>document.getElementById('origen-status').innerHTML='*El campo es requerido';</script>";
	}

	elseif(strlen($origen)<2){
		$msjStatus = "<script>document.getElementById('origen-status').innerHTML='*M&iacute;nimo 2 caracteres';</script>";
	}

	elseif(strlen($origen)>70){
		$msjStatus = "<script>document.getElementById('origen-status').innerHTML='*M&aacute;ximo 70 caracteres';</script>";
	}

	//validación campo destino
	elseif($destino == ""){
		$msjStatus = "<script>document.getElementById('destino-status').innerHTML='*El campo es requerido';</script>";
	}

	elseif(strlen($destino)<2){
		$msjStatus = "<script>document.getElementById('destino-status').innerHTML='*M&iacute;nimo 2 caracteres';</script>";
	}

	elseif(strlen($destino)>70){
		$msjStatus = "<script>document.getElementById('destino-status').innerHTML='*M&aacute;ximo 70 caracteres';</script>";
	}

	//validación campo fecha
	elseif($fecha == ""){
		$msjStatus = "<script>document.getElementById('fecha-status').innerHTML='*El campo es requerido';</script>";
	}

	/*elseif($hoy == $fechaFormulario || $hoy > $fechaFormulario){
		$msjStatus = "<script>document.getElementById('fecha-status').innerHTML='No se puede seleccionar una fecha anterior';</script>";
	}*/

	//validación campo opciones-servicio
	elseif($opcionesServicio == ""){
		$msjStatus = "<script>document.getElementById('opciones-servicio-status').innerHTML='*Debe seleccionar una opci&oacute;n';</script>";
	}

	//validación campo opciones-carga
	elseif($opcionesCarga == ""){
		$msjStatus = "<script>document.getElementById('opciones-carga-status').innerHTML='*Debe seleccionar una opci&oacute;n';</script>";
	}

	//validación campo mensaje
	elseif($mensaje == ""){
		$msjStatus = "<script>document.getElementById('mensaje-status').innerHTML='*El campo es requerido';</script>";
	}

	elseif(strlen($mensaje)<2){
		$msjStatus = "<script>document.getElementById('mensaje-status').innerHTML='*M&iacute;nimo 2 caracteres';</script>";
	}

	elseif(strlen($mensaje)>500){
		$msjStatus = "<script>document.getElementById('mensaje-status').innerHTML='*M&aacute;ximo 500 caracteres';</script>";
	}

	//validar check
	elseif(!isset($_POST['terminos'])){
		$msjStatus = "<script>document.getElementById('terminos-status').innerHTML='*Debes aceptar los t&eacute;rminos y condiciones';</script>";
	}

	else{
			//a quién se enviará el correo
			$destino = "juan_27angel@hotmail.com";

			//asunto del correo
			$asunto = "Mensaje de la página web";

			//cabeceras para el envío de html
			$headers = 'MIME-Version: 1.0' . "\r\n"; 
			$headers.= "Content-type: text/html; charset=UTF-8\r\n";

			//contenido del correo
			$contenido = '
			<!DOCTYPE html>
			<html>
			<head></head>
			<body>
				<h2>'.$nombre.' ha enviado el siguiente mensaje a través de tu sitio web</h2>
		
				<p>'.$mensaje.'</p>
		
				<p>Contacta a  '.$nombre.' al correo:  <span style="color:blue;"> '.$email.'</span> o al télefono: '.$telefono.' </p>
				
				<ul>
					<li>Correo: '.$email.'</li>
					<li>Teléfono: '.$telefono.'</li>
					<li>Origen: '.$origen.'</li>
					<li>Destino: '.$destino.'</li>
					<li>Fecha: '.$fecha.'</li>
					<li>Servicio: '.$opcionesServicio.'</li>
					<li>Carga: '.$opcionesCarga.'</li>
				</ul>

				<p>Ir a mi sitio web <span style="color:blue">http://thermotransportes.com/</span></p>
			</body>
			</html>
		';

		$envio = mail($destino, $asunto, $contenido, $headers);

		if($envio){
			header('Location:gracias.php');
			//enviando autorespuesta
			$pfw_header = "From: ventas@thermotransportes.com"
			. "Reply-To: ventas@thermotransportes.com";
			$pfw_subject = "Mensaje recibido";
			$pfw_email_to = "$correo";
			$pfw_message = "Muchas Gracias $nombre, por su mensaje: $mensaje"
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

echo $msjStatus;

?>