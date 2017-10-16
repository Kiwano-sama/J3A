   <?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>
   
    <header>
        <div class="container"> 
           <div class="row hidden-phone">
                <a class="btn" data-toggle="modal" href="#myModal" style="float: right; margin-left:7px;"><img src="img/login.png" width="20px"/></a><img class="flip" src="assets/img/panel.jpg" style="float: right;"/><span class="header_social">Siguenos en <span class="badge"><a href="https://twitter.com/j3a_design">Twitter</a></span> y <span class="badge"><a href="https://www.facebook.com/jtresa.designdevelopment.5">Facebook</a></span></span>
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
              <h3 style="float: center;"><a href="#">Login</a> | <a href="#">Registro</a></h3>
            </div>
            <div class="modal-body">
              <form name="loginForm" action="login.php" method="post">
			
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
            
          </div>
	</header>