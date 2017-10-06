function cambiarColor() {
	// se define la variable del color de la paleta y la variable del valor de
	// los radio button
	var colorElegido = document.formPaleta.paleta.value;
	var Ps = document.getElementsByTagName('p');

	case 'etiquetaP':// con este case hacemos que todos los parrafos con la
					// etiqueta 'p' cambie de color
		// si son todos unamos tagname
		var Ps = document.getElementsByTagName('p');
		// Ps[i].style.color = colorElegido;
		for (var i = 0; i < Ps.length; i++)
			Ps[i].style.color = colorElegido;
	
}