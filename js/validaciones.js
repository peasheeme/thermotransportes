function validar(){
	if(document.form.terminos.checked){
		document.form.submit();
	}else{
		alert('Debes aceptar los términos y condiciones');
		document.form.terminos.focus();
		return false;
	}
}