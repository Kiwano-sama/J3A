//Funcion que una vez pulsado el boton 'enviar' envia los datos del formulario
function Enviar() {
	var Vemail = document.getElementsByName("email");
	var Vnombre = document.getElementsByName("nombre");
	var Vnumero = document.getElemntsByName("numero");
	if (Vemail == null() && Vemail == "0"() && Vnombre == null() && Vnumero =="0" () ) {
		return false;
		alert('Error al enviar formulario');
	} else {
		return true;
	}
}
// Funcion que comprueba que todos los datos han cumplido los requisitos
function validar(){
	if (validarEmail() && nombre() && numero()){
		alert("Sus datos son correcto, enviando...");
		return true;
	}else {
		alert("Datos incorrectos, compruebe que todos los datos sean correctos");
		return false;
	}
}
// Funcion para comprobar que se haya insertado un nombre
function nombre() {
	var nombre = document.getElementByName('nombre').value
	
	if (nombre ! = NULL) {
		return true;
	} else {
		alert("Por favor, introduzca su nombre");
		return false;
	}
}
// Funcion para comprobar que el email cumple con los requisitos
function validarEmail() {
	var valor = document.getElementById('email').value
	
	if (/\w+@\w+.\w+/.test(valor)) {
		return true;
	} else {
		alert("La dirección de email es incorrecta, por favor, compruebe que el email sea correcto.");
		return false;
	}
}
/* Funcion para determinar que parametros tiene que tener el 'Numero de
 contacto' y que debe tener 9 numeros si no da error y que no se pueda
 insertar letras en vez de numeros en 'Numero de
 contacto'
*/
function comprobarNumero(e){ 
	var keychar;
	var teclanum;
	var miNumero = document.getElementsById('numero');
	
	teclanum = e.which;
	keychar = String.fromCharCode(teclanum);
	
	if(keychar < '0' || keychar >'9'){
		return false;
	}else{
		return true;
	}
	 if (/^\d{9}/.test(miNumero) && (miNumero.length <= 9)){
	        return true;
	    }else {
	        alert("El numero insertado " + miNumero + " es erroneo");
	        return false;
	    }  
}
// Funcion para que no se pueda insertar mas de una '@'
function comprobarArroba(e){
	var caracterTecla;
    var codigoTecla;

    if (window.event){ 
        codigoTecla = e.keyCode;
    }else if (e.which){
        codigoTecla = e.which;
    }
    caracterTecla = String.fromCharCode(codigoTecla);

    if (caracterTecla == "@") { 
        if (document.trabaja.email.value.indexOf('@') >= 0) {
            return false;
        }else{
        	return true;
        }
    }
}