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
    <!--AREA SLIDER-->
    <div class="slider_area">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <h2><span class="label">¿Quieres trabajar con nosotros?</span></h2>                    
                    <hr>                    
                    <div class="well-block">                       
                        <form name="trabaja" action="" method="post" onSubmit="return validar()">
                            <!-- Form start -->
                            <div class="row-fluid">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label  class="control-label" for="nome">Nombre: *</label>
                                        <input required  id="nombre" name="nombre" type="text"  onKeyPress="return comprobarLetra(event)"class="form-control input-md"  >
                                    </div>                                   
                                </div>
                                <!-- Text input-->                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label  class="control-label" for="email">Email: *</label>
                                        <input required  id="email" name="email" type="text" onKeyPress="return comprobarArroba(event)" placeholder="juan@tuemail.com" class="form-control input-md" >
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                    <label  class="control-label" for="number">Numero de Contacto: *</label>
                                        <input required  id="numero" name="numero" type="text" onKeyPress="return comprobarNumero(event)" class="form-control input-md">                                       
                                    </div>                           
                                </div> 
                                <br>
                                <br>                        
                                <div class="col-md-6">
                                     <div class="form-group">                                   
                                    <fieldset>
                                        <legend>Selecciona un puesto de trabajo:  </legend>
                                     	<input required type="radio" name="puesto" value="diseñador">&nbsp;Diseñador de paginas Web&nbsp;&nbsp; 
                                     	<input required type="radio" name="puesto" value="desarrollador">&nbsp;Desarrollador de Software&nbsp;&nbsp; 
                                     	<input required type="radio" name="puesto" value="administrador">&nbsp;Administrador de paginas Web&nbsp;&nbsp; 
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
                             <!-- Buttons -->                         
                         <input  onSubmit="return Enviar()" type="submit" value="Enviar" class="btn-large btn-success mega" style="width:400px">                         
                        </form>
<?php    

// Recibimos por POST los datos procedentes del formulario    
$host_db = "127.0.0.1:56624";
$user_db = "j3a";
$pass_db = "Qwerty123_";
$db_name = "j3a";
$tbl_name = "trabajadores";

$nombre = $_POST["nombre"];    
$email = $_POST["email"];    
$numero = $_POST["numero"];
$puesto = $_POST["puesto"];
$cv = $_POST["cv"];

// Abrimos la conexion a la base de datos    
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
	die("La conexion falló: " . $conexion->connect_error);
}

$_GRABAR_SQL = "INSERT INTO trabajadores (nombre,email,numero,puesto,cv) VALUES ('$nombre','$email','$numero','$puesto','$cv')";    
mysql_query($_GRABAR_SQL);   

// Cerramos la conexion a la base de datos    
mysqli_close($conexion); 

// Confirmamos que el registro ha sido insertado con exito    

echo "    
<p>Los datos han sido guardados con exito.</p>    

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>    
";    
?>  
// <?php 

// // Recibimos por POST los datos procedentes del formulario 

// $nombr = $_POST["nombre"];           // Asi recogemos el nombre desde el formulario 
//     $nombre = strip_tags($nombr);    // Eliminamos la etiquetas que puedan existir 
//     $n_nombre = strlen($nombre);     // Contamos el numero de caracteres 

// $emai = $_POST["email"];            // Asi recogemos el email desde el formulario 
//     $email = strip_tags($emai);     // Eliminamos la etiquetas que puedan existir 
     
//         // Validamos el email de manera muy simple, contempla que exista la @, el . y no exista espacios en blanco 
//         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  
//             // Email valido, contamos los caracteres 
//             $n_email = strlen($email);         // Contamos el numero de caracteres 
//         } else {  
//             // Email no valido, asignamos 0 al numero de caracteres 
//             $n_email = 0; 
//         }  

// $fecha = date("d-m-Y");     // Asi recogemos la fecha 
// $hora = date("H:i");        // Asi recogemos la hora 

// $total_car = $n_nombre * $n_email;    // Si alguno de ellos vale 0, $total_car valdrá 0 

// if ($total_car >= 1) {  
//     // Abrimos la conexion a la base de datos 
//     include("../abre_conexion.php"); 
     
//     $_GRABAR_SQL = "INSERT INTO $tabla_db1 (nombre,email,fecha, hora) VALUES ('$nombre', '$email', '$fecha', '$hora')";  
//     mysql_query($_GRABAR_SQL); 
     
//     // Cerramos la conexion a la base de datos 
//     include("../cierra_conexion.php"); 
     
//     // Confirmamos que el registro ha sido insertado con exito 
     
//     echo " 
//     <p>Los datos han sido guardados con exito.</p> 
     
//     <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p> 
     
//     <p><a href='http://www.uterra.com/archcodfuente/demos/id103/lista2.php' title='Clic aquí'>Ver los resgistros  
     
//     guardados</a></p> 
//     "; 
     
// } else { 
     
//     echo " 
//     Los campos <b>nombre</b> y <b>email</b> no pueden estar vacios.<br /> 
//     <a href=\"javascript:history.go(-1)\">Volver</a> 
//     "; 
// } 
?> 
                        <!-- form end -->
                    </div>
                </div>
                <div class="span6 mainslider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="assets/img/slideN2.jpg" />
                            </li>
                            <li>
                                <a href="http://flex.madebymufffin.com"><img src="assets/img/slideN3.jpg" /></a>
                            </li>
                            <li>
                                <img src="assets/img/slideN4.jpg" />
                            </li>
                            <li>
                                <img src="assets/img/slideN5.jpg" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/AREA SLIDER-->
    <!--FEATURES AREA-->
    <div class="gray_bg">
        <div class="container">
            <div class="row m25">
                <div class="span4 clearfix">
                        <img src="assets/img/html5.png" class="pull-left" />
                        <h3>HTML 5 <span class="colored">&amp;</span> CSS 3</h3>
                        <p><em>Built to support new HTML5 elements and syntax. Progressively enhanced components for ultimate style. Yes, Valera is awesome!</em></p>
                </div>
                <div class="span4 clearfix">
                        <img src="assets/img/resp.png" class="pull-left" />
                        <h3>Responsive Design</h3>
                        <p><em> Our components are scaled according to a range of resolutions and devices to provide a consistent experience, no matter what.</em></p>
                </div>
                <div class="span4 clearfix">
                        <img src="assets/img/doc.png" class="pull-left" />
                        <h3>Well Documented</h3>
                        <p><em>Valera was designed first and foremost as a styleguide to document not only our features, but best practices and living.</em></p>
                </div>
            </div>
        </div>
    </div>
    <!--/AREA BIENVENIDA--> 

    <br>
    <br>
    <!--FEATURES AREA-->
    <!--MAIN CONTENT AREA-->
     <br>
     <br>
    <script>
    $(document).ready(function(){
    });
    </script>
    <!--/MAIN CONTENT AREA-->
        <!--TWITTER AREA-->
    <div class="twitter-block">
        <div class="container">
            <div class="row">
                <div class="span3 header">
                    <h5><span class="colored">///</span><a href="https://twitter.com/j3a_design"> Nuestro Contenido en Twitter</a></h5>
                    <p>Descubre lo que está ocurriendo, al momento, con la gente y la empresa que os interesa.</p>
                </div>
                <div class="span9">
                    <div class="well">
                        <img class="twit_img" src="assets/img/twitter.png" alt="Visit link"/>
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
                            <span class="pull-right visible-desktop"><span class="undercolored"><a href="index.php">Portal</a></span> / <span class="undercolored"><a href="sobrenosotros.php">Sobre Nosotros</a></span> / <span class="undercolored"><a href="trabajaConNosotros.php">Trabaja con Nosotros</a></span> / <span class="undercolored"><a href="servicios.php">Qué hacemos</a></span> / <span class="undercolored"><a href="miembros.php">Miembros</a></span> /  <span class="undercolored"><a href="contacto.php">Contacto</a></span></span>
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
