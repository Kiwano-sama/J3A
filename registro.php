<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>J3A - Registro</title>

	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link href="assets/css/estiloRegistro.css" rel="stylesheet">
</head>
    <body>

<!--CONTENIDO-->
<div class="container">

<?php 

echo (filter_input(INPUT_POST, 'nombre'));

?>

<!-- Aquí irán los errores del submit -->
<div id="alerta" class="alert alert-error collapse" role="alert">
</div>

  <form name="miForm" action="registro.php" onsubmit="return validarForm()" method="post">
    <div class="row">
      <h4>Nueva Cuenta</h4>
      <div class="input-group input-group-icon">
        <input type="text" name="username" placeholder="Username"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="nombre" placeholder="Nombre"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" name="apellido" placeholder="Apellido"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" name="email" placeholder="Dirección Email"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" name="pass" placeholder="Contraseña"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Fecha de Nacimiento</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DIA"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MES"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="AÑO"/>
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4>Genero</h4>
        <div class="input-group">
          <input type="radio" name="genero" value="hombre" id="genero-hombre"/>
          <label for="genero-hombre">Hombre</label>
          <input type="radio" name="genero" value="mujer" id="genero-mujer"/>
          <label for="genero-mujer">Mujer</label>
        </div>
      </div>
    </div>

    <div class="row">
      <h4>Terminos y Condiciones</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">Acepto los términos y condiciones para inscribirme en este servicio y confirmo que he leído la política de privacidad.</label>
      </div>
    </div>
    <input class="btn btn-success" type="submit" value="Registrarse">
  </form>
</div>
<!--/CONTENIDO -->
    
    <script src="../assets/js/registro.js"></script>
    
</body>
</html>