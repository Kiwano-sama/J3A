   <?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>
   
<script type="text/javascript">
function cambiaVisibilidad(opcion) {
    var login = document.getElementById('login');
    var registro = document.getElementById('Registro');
    if(opcion=="log"){
    	registro.style.display = 'none';
    	login.style.display = 'block';
    }else if (opcion=="reg"){
    	registro.style.display = 'block';
    	login.style.display = 'none';
      }
}
</script>

    <header>
        <div class="container"> 
           <div class="row hidden-phone">
                <a class="btn" data-toggle="modal" href="#myModal" style="float: right;"><img src="img/login.png" width="20px"/></a><span class="header_social">Siguenos en <span class="badge"><a href="https://twitter.com/j3a_design">Twitter</a></span> y <span class="badge"><a href="https://www.facebook.com/jtresa.designdevelopment.5">Facebook</a></span></span>
            </div>
            <div class="row">
                <div class="span4 logo">
                    <a href="index.php"><img src="assets/img/logo.png" alt="logo" style="margin-bottom:7px; margin-top:7px;" /></a>
                </div>
                <div class="span8">
                <!-- MENU PRINCIPAL -->
                    <nav id="main-nav">
                        <ul id="menu">
                            <li <?php if (($first_part=="") || ($first_part=="index.php")) {echo ' class=current';}?>><a href="index.php">Portal</a>
                                <ul>
                                    <li><a href="index.php">Default</a></li>
                                    <li><a href="index_compact.html">Compact</a></li>
                                </ul>
                            </li>
                            <li<?php if ($first_part=="sobrenosotros.php") {echo (' class="current"');}?>><a href="sobrenosotros.php">Sobre nosotros</a></li>
                            <li<?php if ($first_part=="trabajaConNosotros.php") {echo (' class="current"');}?>><a href="trabajaConNosotros.php">Trabaja Con Nosotros</a></li>
                            <li<?php if ($first_part=="servicios.php") {echo (' class="current"');}?>><a href="servicios.php">Qué hacemos</a></li>
                            <li<?php if ($first_part=="miembros.php") {echo (' class="current"');}?>><a href="miembros.php">Miembros</a> 
                                <ul>
                                    <li><a href="miembros.php">Ver miembros</a></li>
                                    <li><a href="miperfil.php">Mi perfil</a></li>
                                    <li><a href="ajustes.php">Ajustes</a></li>
                                </ul>
                            </li>
                            <li<?php if ($first_part=="contacto.php") {echo (' class="current"');}?>><a href="contacto.php">Contacto</a></li>
                        </ul>
                    </nav>
                    <!-- /MENU PRINCIPAL -->
                </div>
            </div>
		</div>
		
		
		<!-- login dentro del modulo -->
           <div id="myModal" class="modal hide fade">
            <div class="modal-header">
              <a class="close" data-dismiss="modal" >&times;</a>
              <h3 style="float: center;"><a onclick="cambiaVisibilidad('log')">Login</a> | <a onclick="cambiaVisibilidad('reg')">Registro</a></h3>
            </div>
            <div class="modal-body">
            <div id="login">
              <form name="loginForm" action="login/login.php" method="post">
			
				<div class="input-group input-group-icon">
					<input type="text" name="username" placeholder="Username" required
						maxlength="10" />
					<div class="input-icon">
						<i class="fa fa-user"></i>
					</div>
				</div>
				<div class="input-group input-group-icon">
					<input type="password" name="password" placeholder="Contraseña"
						required />
					<div class="input-icon">
						<i class="fa fa-key"></i>
					</div>
				</div>
			<a href="#">¿Has olvidado la contraseña? </a><br>
			<input class="btn btn-success" type="submit" value="Loguearse">
			</form>
			</div>
            
            
            <div id='Registro' style='display:none;'>
					<form name="miForm" action="login/registro.php"
					onsubmit="return validarForm()" method="post" enctype="multipart/form-data">
					
						<h2>Nueva Cuenta</h2>
						<h4>Datos</h4>
						<div class="input-group input-group-icon">
							<input type="text" name="username"
								placeholder="Username (min 4 caracteres, maximo 10)" required
								minlength="4" maxlength="10" />
							<div class="input-icon">
								<i class="fa fa-user"></i>
							</div>
						</div>
						<div class="input-group input-group-icon">
							<input type="text" name="nombre" placeholder="Nombre" required />
							<div class="input-icon">
								<i class="fa fa-user"></i>
							</div>
						</div>
						<div class="input-group input-group-icon">
							<input type="text" name="apellido" placeholder="Apellido" required />
							<div class="input-icon">
								<i class="fa fa-user"></i>
							</div>
						</div>
						<div class="input-group input-group-icon">
							<input type="email" name="email" placeholder="Dirección Email"
								required />
							<div class="input-icon">
								<i class="fa fa-envelope"></i>
							</div>
						</div>
						<div class="input-group input-group-icon">
							<input type="password" name="pass" placeholder="Contraseña"
								required />
							<div class="input-icon">
								<i class="fa fa-key"></i>
							</div>
						</div>
						
						<div class="input-group input-group-icon">
							<input class="input-group" type="file" name="user_image" accept="image/*" />
							<div class="input-icon">
								<i class="fa fa-file-image-o"></i>
							</div>
						</div>
						
						
					
					
						<div class="col-half">
							<h4>Fecha de Nacimiento</h4>
							<div class="input-group">
								<div class="col-third">
									<input type="text" name="dia" placeholder="DIA"
										onkeypress="return TeclaPulsada(event)" />
								</div>
								<div class="col-third">
									<input type="text" name="mes" placeholder="MES"
										onkeypress="return TeclaPulsada(event)" />
								</div>
								<div class="col-third">
									<input type="text" name="anio" placeholder="AÑO"
										onkeypress="return TeclaPulsada(event)" />
								</div>
								<span id="fechaNac" class="texto-rojo"></span>
							</div>
						</div>
						<div class="col-half">
							<h4>Genero</h4>
							<div class="input-group">
								<input type="radio" name="genero" value="h"
									id="genero-hombre" checked="checked" /> <label
									for="genero-hombre">Hombre</label> <input type="radio"
									name="genero" value="m" id="genero-mujer" /> <label
									for="genero-mujer">Mujer</label>
							</div>
						</div>
					
		
					
						<h4>Terminos y Condiciones</h4>
						<div class="input-group">
							<input type="checkbox" id="terms" name="terminos" /> <label
								for="terms">Acepto los términos y condiciones para
								inscribirme en este servicio y confirmo que he leído la política
								de privacidad.</label>
							<span id="terminos" class="texto-rojo"></span>
						</div>
					
					<input class="btn btn-success" type="submit" value="Registrarse">
				</form>
			</div>
            </div>
          </div>
	</header>