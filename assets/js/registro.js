	function checkPass() {

		var clave1 = document.encuesta.clave1.value;
		var clave2 = document.encuesta.clave2.value;

		if (clave1.length==0) {
			alert("La clave no puede estar vacia!");
			return false;
		} else {

			if (clave1 == clave2) {
				return true;
			} else {
				alert("Las claves introducidas son distintas...\nCompruébalo!");
				return false;
			}
		}

	}


function validarForm() {
	var x = document.forms["miForm"]["username"].value;
	if (x == "") {
		document.getElementById("errorBox").innerHTML = "<strong>Error:</strong> El campo username no puede estar vacio.";
		return false;
	}
}

