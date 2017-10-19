function Tamano() {
	var arrayColor=document.getElementsByTagName("p");
	for(i=0; i<arrayColor.length;i=i+1)
	{
	arrayColor[i].style.fontSize="large";
	}
	// se define la variable del tamaño de la fuente en todos los párrafos
}
function sendMail() {
    var link = "mailto:ethazitalde4@gmail.com"
             + "?cc=myCCaddress@example.com"
             + "&subject=" + escape(document.getElementByClassName('span4').value + document.getElementByClassName('email').value)
             + "&body=" + escape(document.getElementByClassName('message').value)
    ;

    window.location.href = link;
}