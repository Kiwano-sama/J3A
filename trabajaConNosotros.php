<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>J3A - Diseño Gráfico y Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- styles -->
    <script src="assets/js/trabajaConNosotrosJS.js"></script>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/css/cssTrabajaConNosotros.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet"  />
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE 8]>
    	<link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
    <![endif]-->
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
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

$link = mysqli_connect('https://j3a.scm.azurewebsites.net', 'j3a', 'Qwerty123_', 'j3a');

$sql = "SELECT * FROM `usuario`";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
{
echo ($row['Username'] . '  ' . $row['Nombre']);
}
mysqli_free_result($result);
?>
	<!--/HEADER-->
    <!--AREA BIENVENIDA-->
    <div class="gray_bg">
        <div class="container">
            <div class="row welcome">
                <div class="span12">
                    <h1>J3A - Empresa de <span class="undercolored">diseño</span> <span class="undercolored">gráfico</span> <span class="colored">&amp;</span> <span class="undercolored">web</span></h1>
                    <p><em>Hacemos diseños de páginas web con HTML5 / CSS3 template very flexible, very easy for customizing and well documented, approaches for personal and professional use.</em></p>
                </div>
            </div>
        </div>
    </div>
    <!--/AREA BIENVENIDA-->
    
    <br>
    <br>
    <br>
    <!--FEATURES AREA-->
    <!--MAIN CONTENT AREA-->
   <div align="center" class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h3>¿Quieres trabajar con nosotros?</h3>
                        </div>                        
                       <form name="trabaja" action="http://www.google.es/" onSubmit="return validar()">
                        <!-- <form name="trabaja" action="trabajaConNosotros.php" method="post" onSubmit="return validar()"> -->
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label  class="control-label" for="nombre">Nombre: </label>
                                        <input  required  id="numero" name="numero" onKeyPress="return nombre()" type="text"  class="form-control input-md"  >
                                    </div>                                   
                                </div>
                                <!-- Text input-->                                
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                       <label  class="control-label" for="email">Email: </label>
                                        <input required  id="email" name="email" type="text" onKeyPress="return comprobarArroba(event)" placeholder="juan@tuemail.com" class="form-control input-md" >
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                    <label  class="control-label" for="numero">Numero de Contacto: </label>
                                        <input   required  id="numero" name="numero" onKeyPress="return comprobarNumero(event)" type="text" class="form-control input-md">
                                       
                                    </div>                          
                                </div>
                                <br>                                 
                                <br>                        
                                <div class="col-md-6">
                                     <div class="form-group">                                   
                                    <fieldset>
                                        <legend>Selecciona un puesto de trabajo:  </legend>
                                     	<input required type="radio"  value="diseñador"> Diseñador de paginas Web&nbsp;&nbsp; 
                                     	<input required type="radio"  value="desarrollador"> Desarrollador de Software&nbsp;&nbsp; 
                                     	<input required type="radio"  value="administrador"> Administrador de paginas Web&nbsp;&nbsp;                                     
                                   	<br> 
                                   	<br>  
                                    </fieldset>
                                	</div>
                                </div>
                                <br>
                                <br> 
                                <br>
                                <div class="col-md-12">
                                <p>Mandanos tu CV aquí: </p>
                                    <input required type="file" name="cv">
                                </div>
                            </div>
                            <br>
                            <br>
                             <!-- Buttons -->	
                         <input  type="submit" value="Enviar">
                         <input type="reset" value="Deshacer">
                        </form>
                        <!-- form end -->
                    </div>
               </div>
       	 </div>
     </div>
     <br>
     <br>
     <br>
     <br>
    <script>
    $(document).ready(function(){
    });
    </script>
    <!--/MAIN CONTENT AREA-->
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
    <!-- Page Content -->
