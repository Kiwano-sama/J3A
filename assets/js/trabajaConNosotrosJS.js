alert('Hola, bienvenido a nuestra seccion trabaja con nostros, aqui deberás rellenar este formulario y enviarnoslo');
//Funcion para validar el formulario
function validar() {
	alert('hola validar');
	if (validarEmail() /* && comprobarnombre() && numero() */) {
		alert("Sus datos son correcto, enviando...");
		return true;
	} else {

		alert("Datos incorrectos, compruebe que todos los datos sean correctos");
		return false;
	}
}
// Funcion para comprobar que el email cumple con los requisitos
function validarEmail() {
	// alert('hola prueba validarEmail');
	var valor = document.getElementById('email').value
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor)) {
		return true;
	} else {
		alert("La dirección de email es incorrecta, por favor, compruebe que el email sea correcto.");
		return false;
	}
}

/* 	
 * Funcion para determinar que parametros tiene que tener el 'Numero de
 * contacto' y que debe tener 9 numeros si no da error y que no se pueda
 * insertar letras en vez de numeros en 'Numero de
 * contacto'
*/
function comprobarNumero(e) {
	var keychar;
	var teclanum;
	var miNumero = document.getElementById('numero');
	// alert('holaa prueba 2 comprobarNumero');
	teclanum = e.which;
	keychar = String.fromCharCode(teclanum);

	// alert('holaa prueba comprobarNumero');
	if (keychar < '0' || keychar > '9') {
		// alert('holaa prueba 1 comprobarNumero');
		return false;
	} else {
		return true;
	}
	// alert('holaa prueba 2 comprobarNumero');
	if (/^\d{9}/.test(miNumero) && (miNumero.length <= 9)) {
		return true;
	} else {
		alert("El numero insertado " + miNumero + " es erroneo");
		return false;
	}
}
//Funcion para que no se puedan insertar numeros en el campo 'Nombre'
function comprobarLetra(e) {
	var keychar;
	var teclanum;

	teclanum = e.which;
	keychar = String.fromCharCode(teclanum);

	// alert(keychar);
	if ((keychar >= 'a' && keychar <= 'z') || (keychar >= 'A' && keychar <= 'Z')) {
		return true;
	} else {
		return false;
	}
}
// // alert('holaa prueba 2 comprobarNumero');
// }
// Funcion para que no se pueda insertar mas de una '@'
function comprobarArroba(e) {
	var caracterTecla;
	var codigoTecla;

	if (window.event) {
		codigoTecla = e.keyCode;
	} else if (e.which) {
		codigoTecla = e.which;
	}
	caracterTecla = String.fromCharCode(codigoTecla);

	if (caracterTecla == "@") {
		if (document.trabaja.email.value.indexOf('@') >= 0) {
			return false;
		} else {
			return true;
		}
	}
}