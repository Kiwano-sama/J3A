<?php 
session_start();
require_once 'conf/conexion.php';


$linkPerfilDeUsuario = $_SERVER['QUERY_STRING'];

$sqlInfoUsuario = "SELECT Username, Nombre, Apellido, Email, fechaNac, genero, esCliente, esAdmin FROM `usuario` WHERE username = '$linkPerfilDeUsuario'";
if (mysqli_query($link, $sqlInfoUsuario)){
	
	$resultInfoUsuario = mysqli_query($link, $sqlInfoUsuario);
	
	while ($row = mysqli_fetch_array($resultInfoUsuario, MYSQLI_ASSOC))  {
		$username = $row['Username'];
		$nombre = $row['Nombre'];
		$apellido = $row['Apellido'];
		$email = $row['Email'];
		$fechaNac = $row['fechaNac'];
		if ($row['genero'] === "h"){
			$genero = "Hombre";
		} else if ($row['genero'] === "m"){
			$genero = "Mujer";
		}
	}
} else {
	echo('<div class="alert alert-danger">');
	echo('<a class="close" data-dismiss="alert">×</a>');
	echo('<h4 class="alert-heading">Error!</h4>');
	echo('No existe este usuario.');
	echo('</div>');
	echo('</div>');
	
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>J3A - Diseño Gráfico y Web</title>
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

?>
	<!--/HEADER-->
    <!--AREA BIENVENIDA-->
     <div class="gray_bg">
        <div class="container">
            <div class="row welcome_inner">
                <div class="span12">
                    <h1><span class="colored">///</span> Perfil de <span class="colored"><?php echo $username;?></span></h1>
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

$usernameLogueado = $_SESSION['username'];

?>
  
  <div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <!--Contenido Sidebar-->
      
      <div class="profilepic">
					<img src="assets/img/miembros/savandy.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $username;?>
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
						<li class="active">
							<a href="#">
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
						<li>
							<a href="configuracion.php">
							<i class="icon-cog"></i>
							Configuración </a>
						</li>
					</ul>
				</div>
            
    </div>
       
    <div class="span10">
    <h3><span class="colored">///</span> Tu información:</h3>
    
    <table class="table table-striped table-bordered table-condensed">
        <tbody>
          <tr>
            <td width="30%" style="text-align: right">Username:</td>
            <td width="70%"><?php echo $username; ?></td>
          </tr>          
           <tr>
            <td width="30%" style="text-align: right">Email:</td>
            <td width="70%"><?php echo $email; ?></td>
          </tr>
          <tr>
            <td width="30%" style="text-align: right">Nombre:</td>
            <td width="70%"><?php echo $nombre; ?></td>
          </tr>
          <tr>
            <td width="30%" style="text-align: right">Apellido:</td>
            <td width="70%"><?php echo $apellido; ?></td>
          </tr>
          <tr>
            <td width="30%" style="text-align: right">Genero:</td>
            <td width="70%"><?php echo $genero; ?></td>
          </tr>
          <tr>
            <td width="30%" style="text-align: right">Fecha de nacimiento:</td>
            <td width="70%"><?php echo $fechaNac; ?></td>
          </tr>
        </tbody>        
      </table>

      <hr>

      <?php
      if ($_POST) {
      	
      	$usernameComentario = $_SESSION['username'];
      	$comentario = (filter_input(INPUT_POST, 'comentario'));
      	
      	
      	$insertarComentario = ("INSERT INTO `comentario` (`idComentario`, `enPerfilUsuario`, `respuestaAcomentario`, `username`, `comentario`, `fecha`) VALUES (NULL, '$username', NULL, '$usernameComentario', '$comentario', now())");

      	
      	if (mysqli_query($link, $insertarComentario)) {
      		echo '<div class="alert alert-success">';
      		echo '<strong>Exito!</strong> Has añadido un comentario';
      		echo '</div>';
      		
      		
      	} else {
      		echo '<div class="alert alert-danger">';
      		echo '<strong>Error!</strong> No se ha podido añadir el comentario, intentalo de nuevo. ' . mysqli_error($link);
      		echo '</div>';
      	}
      }
      
      
  // Selección de todos los comentarios de la BBDD, para éste usuario
  $sql = "SELECT * FROM comentario WHERE enPerfilUsuario = '$username'";
  $result = mysqli_query($link, $sql);
  
  // Contar el total de comentarios del perfil:
  $sqlComentarios = "SELECT count(enPerfilUsuario) from comentario where enPerfilUsuario = '$username'";
  $resultComentarios = mysqli_query($link, $sql);
  $cantidadComentarios = (mysqli_num_rows($resultComentarios));
  
  echo ('<h3><span class="colored">///</span> ' . $cantidadComentarios . ' Comentario(s):</h3>');
  
  
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

  	if (($row['respuestaAcomentario'] === NULL)) {
  		$idComentario = $row['idComentario'];
  			echo ('<div class="comment">');
            echo ('<div class="row">');
  			echo ('<div class="span8">');
            echo ('<img src="assets/img/avatar.jpg" alt="" class="avatar"  align="left"/>');
            echo ('<div>');
            echo ('<h5><a href="#">' . $row['username'] . '</a> ' . $row['fecha'] . ' <span class="small"><a class="badge" href="#">Replay</a></span></h5>');
            echo ('<em>' . $row['comentario'] . '</em>');
            echo ('</div>');
            echo ('</div>');
            echo ('</div>');
            echo ('</div>');
                 
            $sqlcom = "SELECT * FROM comentario WHERE respuestaAcomentario = '$idComentario'";
            $resultado = mysqli_query($link, $sqlcom);
                  while ($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                  
                  	echo ('<div class="comment  pull-right">');
                  	echo ('<div class="row">');
                  	echo ('<div class="span8">');
                  	echo ('<img src="assets/img/avatar.jpg" alt="" class="avatar"  align="left"/>');
                  	echo ('<div>');
                  	echo ('<h5><a href="#">' . $row['username'] . '</a> ' . $row['fecha'] . ' <span class="small"><a class="badge" href="#">Replay</a></span></h5>');
                  	echo ('<em>' . $row['comentario'] . '</em>');
                  	echo ('</div>');
                  	echo ('</div>');
                  	echo ('</div>');
                  	echo ('</div>');                  
                  }
  	}
  }  
  ?>
                <div class="row">
                	<div class="span10"><hr></div>
                </div>
      
       <h3><span class="colored">///</span> Deja un comentario</h3>
                <div class="row" style="margin-top: 20px;">
                	<div class="span10">
                        <form name="loginForm" class="form" action="verperfil.php?<?php echo $linkPerfilDeUsuario;?>" method="post">
                            <textarea name="comentario" placeholder="comentario" rows="5" class="span10" cols=""></textarea>
                            <button type="submit"  class="btn btn-success">Enviar</button>
                        </form>
                    </div>
                </div>
      
                
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