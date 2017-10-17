<!DOCTYPE html>
<html lang="es">
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
    <link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
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
    <!--AREA BIENVENIDA-->
     <div class="gray_bg">
        <div class="container">
            <div class="row welcome_inner">
                <div class="span12">
                    <h1><span class="colored">///</span> MIEMBROS J3A</h1>
                </div>
            </div>
        </div>
    </div>
    <!--/AREA BIENVENIDA-->




    <!--AREA CONTENIDO-->
    <div class="container inner_content">
    <section>
    
    <?php
session_start();

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
?>
    
    
    <h2><span class="colored"><strong>///</strong></span> Todos los <span class="undercolored">miembros</span></h2>
    
     <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Username</th>
        <th>Información</th>
        <th>Roles</th>
      </tr>
    </thead>
    <tbody>
  <?php 
  // Selección de todos los usuarios de la BBDD, excepto contraseña
  $sql = "SELECT Username, Nombre, Apellido, fechaNac, esCliente, esAdmin FROM `usuario`";
  $result = mysqli_query($link, $sql);
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
  	
  	echo ("<tr>");
  	echo ("<td>");
  	echo ($row['Username']);
  	echo ("</td>");
  	echo ("<td>");
  	echo ("Nombre: " . '<span class="undercolored"><a href="verperfil.php?' . $row['Username']. '">' . $row['Nombre'] . '</a></span>');
  	echo (" # Apellido: " . '<span class="undercolored">' . $row['Apellido'] . '</span>');
  	echo (" # Fecha de Nacimiento: " . '<span class="undercolored">' . $row['fechaNac'] . '</span>');
  	echo ("</td>");
  	echo ("<td>");
  	
  	if ($row['esAdmin']){
  	echo ('<span class="label label-info">Administrador</span>');
  	}
  	
  	if ($row['esCliente']){
  		echo ('<span class="label label-success">Cliente</span>');
  	} else if (!($row['esAdmin']) && !($row['esCliente'])){
  		echo ('<span class="label label-default">Miembro</span>');
  	}
  	echo ("</td>");
  	echo ("</tr>");
  	

  }
  mysqli_free_result($result);
  ?>  

    </tbody>
  </table>
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
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/jquery.slabtext.min.js"></script>
    <script src="assets/js/jquery.flexslider-min.js"></script>
    <script src="assets/js/superfish-menu/superfish.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/twitter.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/jquery.gmap.min.js"></script>
    <script src="assets/js/jquery.preloader.js"></script>
    <script src="assets/js/custom.js"></script>
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