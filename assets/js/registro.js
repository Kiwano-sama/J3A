function checkPass() {

    var clave1 = document.encuesta.clave1.value;
    var clave2 = document.encuesta.clave2.value;

    if (clave1.length === 0) {
        alert("La clave no puede estar vacia!");
        return false;
    } else {

        if (clave1 === clave2) {
            return true;
        } else {
            alert("Las claves introducidas son distintas...\nCompruébalo!");
            return false;
        }
    }

}


function validarForm() {

    var diaIntroducido = document.miForm.dia.value;
    if ((diaIntroducido > 31) || (diaIntroducido < 1)) {
        document.getElementById("fechaNac").innerHTML = '<p style="texto-rojo"><strong>Error:</strong> El dia debe ser entre 1 y 31</p>';
        return false;
    }

    var mesIntroducido = document.miForm.mes.value;
    if ((mesIntroducido > 12) || (mesIntroducido < 1)) {
        document.getElementById("fechaNac").innerHTML = '<p style="texto-rojo"><strong>Error:</strong> El mes debe ser entre 1 y 12</p>';
        return false;
    }

    var anioIntroducido = document.miForm.anio.value;
    if ((anioIntroducido > 2017) || (anioIntroducido < 1900)) {
        document.getElementById("fechaNac").innerHTML = '<p style="texto-rojo"><strong>Error:</strong> Año incorrecto</p>';
        return false;
    }
    var comprobarTerminos = document.miForm.terminos.checked;
    if (!comprobarTerminos) {
        document.getElementById("terminos").innerHTML = '<p style="texto-rojo"><strong>Error:</strong> Debes aceptar los terminos y condiciones</p>';
        return false;
    }
   

}

function TeclaPulsada(e) {
    var keychar;
    var teclanum;

    teclanum = e.which;
    keychar = String.fromCharCode(teclanum);

    //alert(keychar);
    //alert(teclanum);

    if (keychar < "0" || keychar > "9") {
        return false;
    } else {
        return true;
    }
}

