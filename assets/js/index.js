function cambiarColor() {
	document.getElementByTagName("p").style.color = "black";
	// se define la variable del color de la paleta y la variable del valor de
	// los radio button
	var colorElegido = document.formPaleta.paleta.value;
	var Ps = document.getElementsByTagName("p");
		// Ps[i].style.color = colorElegido;
	for (var i = 0; i < Ps.length; i ++)
		Ps[i].style.color = colorElegido;
	
}