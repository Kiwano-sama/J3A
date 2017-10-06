function cambiarColor() {
	// se define la variable del color de la paleta y la variable del valor de
	// los radio button
	var colorElegido = document.formPaleta.paleta.value;
	var Ps = document.getElementsByTagName('p');
	var na = document.getElementsByTagName('h1','h2','h3');
	var vElegido = document.formPaleta.button.value;
	
	
	switch (vElegido) {

	case 'etiquetaP':// con este case hacemos que todos los parrafos con la
					// etiqueta 'p' cambie de color
		// si son todos unamos tagname
		var Ps = document.getElementsByTagName('p');
		// Ps[i].style.color = colorElegido;
		for (var i = 0; i < Ps.length; i++)
			Ps[i].style.color = colorElegido;
		break;
	case 'etiquetaTitulos':// con este case hacemos que solo los textos con el tagName
						// '' cambie de color
		var na = document.getElementsByTagName('h1','h2','h3');
		for (var i = 0; i < na.length; i++)
			na[i].style.color = colorElegido;
		break;
	}
	
}