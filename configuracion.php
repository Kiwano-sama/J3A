<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>J3A - Diseño Gráfico y Web</title>
    <script src="assets/js/ciego.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" />
    <link href="assets/css/miembros.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE 8]>
    	<link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
    <![endif]-->
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/tab.ico">
    <link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png">
    <!--GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700,400italic,700italic|Doppio+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bowlby+One+SC' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Days+One|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Exo:800' rel='stylesheet' type='text/css'>
    <!--/GOOGLE FONTS-->
</head>
    <body>
    <!--TOP-->
    <div class="top_line"></div>
    <div class="panel hidden-phone">
        <div id="map">
        </div>
    </div>
    <!--/TOP-->
    <!--HEADER-->
<?php 
include 'header.php';
require_once 'conf/conexion.php';
?>
	<!--/HEADER-->
	<?php include 'cambioTamanio.php';?>      
    <!--AREA BIENVENIDA-->
     <div class="gray_bg">
        <div class="container">
            <div class="row welcome_inner">
                <div class="span12">
                    <h1><span class="colored">///</span> MI PERFIL</h1>
                </div>
            </div>
        </div>
    </div>
    <!--/AREA BIENVENIDA-->




    <!--AREA CONTENIDO-->
    <div class="container inner_content">
    <section>
    
    <?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	
} else {
	
	echo('<div class="alert alert-danger">');
	echo('<a class="close" data-dismiss="alert">×</a>');
	echo('<h4 class="alert-heading">Error!</h4>');
	echo('Esta página solo puede verse por los usuarios registrados. <a href="login">Logueate</a>.');
	echo('</div>');
	echo('</div>');
	
	exit;
}

$now = time();

if($now > $_SESSION['expire']) {
	session_destroy();
	
	echo('<div class="alert alert-block">');
	echo('<a class="close" data-dismiss="alert">×</a>');
	echo('<h4 class="alert-heading">Error!</h4>');
	echo('Tu sesion ha terminado. <a href="login">Logueate</a>.');
	echo('</div>');
	echo('</div>');
	exit;
}

$username = $_SESSION['username'];

$sqlInfoUsuario = "SELECT Nombre, Apellido, fechaNac, genero, Email, esCliente, esAdmin FROM `usuario` WHERE username = '$username'";
$resultInfoUsuario = mysqli_query($link, $sqlInfoUsuario);

while ($row = mysqli_fetch_array($resultInfoUsuario, MYSQLI_ASSOC))  {
	$nombre = $row['Nombre'];
	$apellido = $row['Apellido'];
	$fechaNac = $row['fechaNac'];
	$email = $row['Email'];
	if ($row['genero'] === "h"){
		$genero = "Hombre";
	} else if ($row['genero'] === "m"){
		$genero = "Mujer";
	}
}
?>
  
  <div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <!--Contenido Sidebar-->
      
      <div class="profile-userpic">
					<img src="assets/img/miembros/savandy.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo ($_SESSION['username']);?>
					</div>
					
					<?php
				if ($row['esAdmin']){
				  	echo ('<div class="profile-usertitle-job">Administrador</div>');
				  	}
				  	
				  	if ($row['esCliente']){
				  		echo ('<div class="profile-usertitle-job">Cliente</div>');
				  	} else if (!($row['esAdmin']) && !($row['esCliente'])){
				  		echo ('<div class="profile-usertitle-job">Miembro</div>');
				  }
					
  	?>
				
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Añadir</button>
					<button type="button" class="btn btn-danger btn-sm">Mensaje</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="miperfil.php">
							<i class="icon-home"></i>
							Perfil </a>
						</li>
						<li>
							<a href="amigos.php">
							<i class="icon-user"></i>
							Amigos </a>
						</li>
						<li>
							<a href="tickets.php" target="_blank">
							<i class="icon-book"></i>
							Tickets </a>
						</li>
						<li class="active">
							<a href="configuracion.php">
							<i class="icon-cog"></i>
							Configuración </a>
						</li>
					</ul>
				</div>
            
    </div>
       
    <div class="span10">
    
    <div id="alerta-datos"></div>
    <h3><span class="colored">///</span> Cambia tus datos:</h3>
    <?php 
    if ($_POST) {
      	
    	$nombre = (filter_input(INPUT_POST, 'nombre'));
    	$apellido = (filter_input(INPUT_POST, 'apellido'));
    	$email = (filter_input(INPUT_POST, 'email'));
    	$genero = (filter_input(INPUT_POST, 'genero')); 	
    	$fechaNac = (filter_input(INPUT_POST, 'fecha'));
      	
      	
    	$modificarUsuario = ("UPDATE `usuario` SET `Nombre` = '$nombre', `Apellido` = '$apellido', `Email` = '$email', `Genero` = '$genero', `FechaNac` = '$fechaNac'  WHERE `usuario`.`username` = '$username';");
      	
    	
    	
    	
    	if (mysqli_query($link, $modificarUsuario)) {
    		echo '<div class="alert alert-success">';
    		echo '<strong>Exito!</strong> Has modificado tus datos.';
    		echo '</div>';
    		
    		
    	} else {    		
    		echo '<div class="alert alert-danger">';
    		echo '<strong>Error!</strong> No se han podido modificar los datos, intentalo de nuevo.' . mysqli_error($link);
    		echo '</div>';
    	}
    	
    	
      }
      ?>
    
    <form name="miForm" action="configuracion.php"
			onsubmit="return validarForm()" method="post" enctype="multipart/form-data">
        
    <table class="table table-striped table-bordered table-condensed">
        <tbody>
        
        
        
          <tr>
            <td width="30%" style="text-align: right">Email:<br><i>Actual: <?php echo $email; ?></i></td>
            <td width="70%">


<div class="input-group input-group-icon">
					<input type="email" name="email" placeholder="Dirección Email"
						required value="<?php echo $email; ?>"/>
					<div class="input-icon">
						<i class="fa fa-envelope"></i>
					</div>
				</div>


			</td>
          </tr>
          <tr>
            <td width="30%" style="text-align: right">Nombre:<br><i>Actual: <?php echo $nombre; ?></i></td>
            <td width="70%">

<div class="input-group input-group-icon">
					<input type="text" name="nombre" placeholder="Nombre" required value="<?php echo $nombre; ?>"/>
					<div class="input-icon">
						<i class="fa fa-user"></i>
					</div>
				</div>

</td>
          </tr>
          <tr>
            <td width="30%" style="text-align: right">Apellido:<br><i>Actual: <?php echo $apellido; ?></i></td>
            <td width="70%">
            
            <div class="input-group input-group-icon">
					<input type="text" name="apellido" placeholder="Apellido" required value="<?php echo $apellido; ?>"/>
					<div class="input-icon">
						<i class="fa fa-user"></i>
					</div>
				</div>
            
            </td>
          </tr>
          <tr>
            <td width="30%" style="text-align: right">Genero:<br><i>Actual: <?php echo $genero; ?></i></td>
            <td width="70%">
            
            
					
					<div class="input-group">
						<input type="radio" name="genero" value="h"
							id="genero-hombre" checked="checked" /> <label
							for="genero-hombre">Hombre</label> <input type="radio"
							name="genero" value="m" id="genero-mujer" /> <label
							for="genero-mujer">Mujer</label>
					</div>
				
            
            </td>
          </tr>
          <tr>
            <td width="30%" style="text-align: right">Fecha de nacimiento:<br><i>Actual: <?php echo $fechaNac; ?></i></td>
            <td width="70%">
            
            <div class="input-group">
							
<input type="date" name="fecha" max=”2017-10-18″ value="<?php echo $fechaNac; ?>"></div>
            
            </td>
          </tr>
          
          <tr>
          <td style="text-align:center" colspan="2">
          <input class="btn btn-success" type="submit" value="Cambiar datos">
		
          </td>
          </tr>
          
        </tbody>        
      </table>
</form>
                
    </div>
  </div>
</div>
  </section>
  
 
  
  </div>
    <!--/AREA CONTENIDO-->
    <!--TWITTER AREA-->
    <div class="twitter-block">
        <div class="container">
            <div class="row">
                <div class="span3 header">
                    <h5><span class="colored">///</span> Our Twitter Feed</h5>
                    <p>Find out what's happening, right now, with the people and organizations you care about.</p>
                </div>
                <div class="span9">
                    <div class="well">
                        <img class="twit_img" src="assets/img/twitter.png" alt="Visit link" />
                        <div id="jstwitter" class="clearfix">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/TWITTER AREA-->
    
<?php 
include 'footer.php';
?>
    <!--BOTTOM LINE-->
    <div class="bottom-block">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <span>Copyright 2017 J3A - Diseñado por <span class="undercolored"><a href="#">Julen, Jon Ander, Jenifer y Ander</a></span></span>
                        </div>
                        <div class="span6">
                            <span class="pull-right visible-desktop"><span class="undercolored"><a href="#">Home</a></span> / <span class="undercolored"><a href="#">Features</a></span> / <span class="undercolored"><a href="#">Pages</a></span> / <span class="undercolored"><a href="#">Portfolio</a></span> / <span class="undercolored"><a href="#">Blog</a></span> / <span class="undercolored"><a href="#">Typography</a></span> / <span class="undercolored"><a href="#">Contact</a></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/BOTTOM LINE-->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>	
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/google-code-prettify/prettify.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-transition.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-alert.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-modal.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-dropdown.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-scrollspy.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-tab.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-tooltip.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-popover.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-button.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-collapse.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-carousel.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap-typeahead.js" type="text/javascript"></script>
    <script src="assets/js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="assets/js/jquery.slabtext.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="assets/js/superfish-menu/superfish.js" type="text/javascript"></script>
    <script src="assets/js/plugin.js" type="text/javascript"></script>
    <script src="assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="assets/js/twitter.js" type="text/javascript"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="assets/js/jquery.gmap.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.preloader.js" type="text/javascript"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>
	<script type="text/javascript">var runFancy = true;</script>
    <!--[if IE]>
    <script type="text/javascript">
        runFancy = false;
    </script>
    <![endif]-->
    <script type="text/javascript">
		if (runFancy) {
			jQuery.noConflict()(function($){
			$(".view").preloader();
			$(".flexslider").preloader();
			});
		}
    </script>
	</body>
</html>