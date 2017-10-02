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
    <link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
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
    <!--AREA SLIDER-->
    <div class="slider_area">
        <div class="container">
            <div class="row">
                <div class="span4 hidden-phone">
                    <h2><span class="label">Designed for everyone!</span></h2>
                    <p class="intro">Simple and flexible HTML, CSS, and Javascript for popular user interface components and interactions.</p>
                    <p><span class="pun"><em>Valera is designed to help people of all skill levels designer or developer, huge nerd or early beginner. Use it as a complete kit or use to start something more complex.</em></span></p>
                    <hr class="visible-desktop">
                    <h4 class="visible-desktop">Alguna de nuestra especialización:</h4>
                    <div class="row visible-desktop">
                        <div class="span2">
                            <ul style="margin-top:10px;" class="unstyled">
                                <li><i class="icon-user"></i> Built for and by nerds</li>
                                <li><i class="icon-th"></i> 12-column grid</li>
                                <li><i class="icon-resize-horizontal"></i> Max-width 1200px</li>
                                <li><i class="icon-book"></i> Growing library</li>
                            </ul>
                        </div>
                        <div class="span2">
                            <ul style="margin-top:10px;" class="unstyled">
                                <li><i class="icon-resize-small"></i> Responsive design</li>
                                <li><i class="icon-eye-open"></i> Cross-everything</li>
                                <li><i class="icon-list-alt"></i> Styleguide docs</li>
                                <li><i class="icon-cog"></i> jQuery plugins</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <a href="123" class="btn btn-large btn-success mega"></i> Mira nuestros diseños</a>
                </div>
                <div class="span8 mainslider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="assets/img/slide2.jpg" />
                            </li>
                            <li>
                                <a href="http://flex.madebymufffin.com"><img src="assets/img/slide3.jpg" /></a>
                            </li>
                            <li>
                                <img src="assets/img/slide4.jpg" />
                            </li>
                            <li>
                                <img src="assets/img/slide5.jpg" />
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
    <!--FEATURES AREA-->
    <!--MAIN CONTENT AREA-->
   <section  id="contact" class="content-section text-center">
            <div class="contact-section">
                <div class="container">
                    <h1>Quieres trabajar con nosotros?</h1>
                    <h3>Rellena este formulario y envíanoslo para que podamos valorar tus posibilidades de trabajar con nosotros</h3>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form action="" method="POST" class="form-horizontal">
                                <div class="form-group">
                                    <label for="exampleInputName2" name="nombre">Nombre: </label>
                                    &nbsp;<input type="text" required class="form-control" id="exampleInputName2" >&nbsp;&nbsp;
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputName2" name="apellido">Apellidos: </label>
                                    &nbsp;<input type="text" required class="form-control" id="exampleInputEmail2" >&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label for="exampleInputEmail2" name="email">Email: </label>
                                    &nbsp;&nbsp; <input type="email" required class="form-control" id="exampleInputEmail2" placeholder="juan.doe@example.com">
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    &nbsp;&nbsp;&nbsp; <label for="exampleInputDNI" name="dni">DNI: </label>&nbsp;
                                    &nbsp;&nbsp;&nbsp;<input type="text" required class="form-control" id="exampleInputDNI">&nbsp;&nbsp;
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    
                                    <fieldset required>
                                        <legend>SELECCIONA UN PUESTO DE TRABAJO: </legend>
                                        <input required type="radio"  name="" value="diseñador">Diseñador de paginas web&nbsp;&nbsp;
                                        <input required type="radio" name="" value="desarrollador">Desarrollador de software&nbsp;&nbsp;
                                        <input required type="radio" name="" value="administrador">Administrador de paginas web&nbsp;&nbsp;
                                    </fieldset>
                                </div>
                                <br>
                                <br>
                                <div class="form-group ">
                                    <label for="exampleInputText" name="cv">Inserta tu CV: </label><br><br>
                                    <input type="file" required name="adjunto" />
                                </div>
                                <br>
                                <br>
                                <button type="submit" name="enviar" class="btn btn-default">Enviar</button>
                            </form>
                            <br>
                            <br>
                            <hr>
                           
                        </div>
                    </div>
                </div>
             </div>
        </section>
    <!--/MAIN CONTENT AREA-->
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
    <!-- Page Content -->

       


