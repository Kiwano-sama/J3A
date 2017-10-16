<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>J3A - Diseño Gráfico y Web</title>
    <script src="assets/js/index.js" type="text/javascript"></script>
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

// Comentado codigo para conexión a bbdd
// $link = mysqli_connect('127.0.0.1:56624', 'j3a', 'Qwerty123_', 'j3a');

// $sql = "SELECT * FROM `usuario`";
// $result = mysqli_query($link, $sql);
// while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
// {
// echo ($row['Username'] . '  ' . $row['Nombre']);
// }
// mysqli_free_result($result);


?>
	<!--/HEADER-->
    <!--AREA BIENVENIDA-->
    <div class="gray_bg">
        <div class="container">
            <div class="row welcome">
                <div class="span12">
                    <h1>J3A - Empresa de <span class="undercolored">diseño</span> <span class="undercolored">gráfico</span> <span class="colored">&amp;</span> <span class="undercolored">web</span></h1>
                    <p><em>Hacemos diseños de páginas web con HTML5 / CSS3 muy flexibles, fáciles de customizar y bien documentadas, nuestras páginas están pensadas para uso personal y profesional.</em></p>
                </div>
            </div>
        </div>
    </div>
    <fieldset>
    	<p class="intro">¿Quieres cambiar el color de la fuente? Aquí te dejamos una paleta para que selecciones el color que deseas</p>
    	<form name="formPaleta" action="" method="get">
			<input name="paleta" type="color" value="" onchange="cambiarColor()"/>
			<input name="botonModificar" type="button" value="modificar Color"/>	
		</form>
   	</fieldset>        
    <!--/AREA BIENVENIDA-->
    <!--AREA SLIDER-->
    <div class="slider_area">
        <div class="container">
            <div class="row">
                <div class="span4 hidden-phone">
                    <h2><span class="label">Diseños para todo el mundo!</span></h2>
                    <p class="intro">HTML flexible, CSS, Javascript para componentes de interfaz de usuario e interacciones populares.</p>
                    <p><span class="pun"><em>Nuestras páginas están diseñadas para gente con todo tipo de limitaciones, por lo que se adaptan a las posibles dependencias de los usuarios. Pueden usarse como un kit completo o como bases ampliables según las necesidades de los clientes.</em></span></p>
                    <hr class="visible-desktop">
                    <h4 class="visible-desktop">Alguna de nuestras especializacións:</h4>
                    <div class="row visible-desktop">
                        <div class="span2">
                            <ul style="margin-top:10px;" class="unstyled">
                                <li><i class="icon-user"></i> Diseñadas para todo el mundo</li>
                                <li><i class="icon-th"></i> Cuadrícula de 12 columnas</li>
                                <li><i class="icon-resize-horizontal"></i> Anchura máxima de 1200px</li>
                                <li><i class="icon-book"></i> Librería en continua evolución</li>
                            </ul>
                        </div>
                        
                        <div class="span2">
                            <ul style="margin-top:10px;" class="unstyled">
                                <li><i class="icon-resize-small"></i> Diseño responsivo</li>
                                <li><i class="icon-eye-open"></i> Multi-plataforma</li>
                                <li><i class="icon-list-alt"></i> Documentos de guía de estilos</li>
                                <li><i class="icon-cog"></i> plugins jQuery</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <a href="servicios.php" class="btn btn-large btn-success mega"></i> Mira nuestros diseños</a>
                </div>
                <div class="span8 mainslider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="assets/img/slide1.jpg" />
                            </li>
                            <li>
                                <img src="assets/img/slide1-1.jpg" />
                            </li>
                            <li>
                                <img src="assets/img/slide1-2.jpg" />
                            </li>
                            <li>
                                <img src="assets/img/slide1-3.jpg" />
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
                        <p><em> Realizamos aplicaciones con HTML 5 y CSS 3, para adaptarnos a las últimas tecnologías. </em></p>
                </div>
                <div class="span4 clearfix">
                        <img src="assets/img/resp.png" class="pull-left" />
                        <h3>Responsive Design</h3>
                        <p><em> Creamos diseños responsivos que se adaptan a las distintas pantallas y dispositivos, como smartphones o tablets.</em></p>
                </div>
                <div class="span4 clearfix">
                        <img src="assets/img/doc.png" class="pull-left" />
                        <h3>Bien Documentados</h3>
                        <p><em>Utilizamos varios lenguajes de programación para crear nuestras aplicaciones, dominamos JAVA, JavaScript, PHP y aún más importante, Scratch. </em></p>
                </div>
            </div>
        </div>
    </div>
    <!--FEATURES AREA-->
    <!--MAIN CONTENT AREA-->
    <div class="container portfolio">
        <div style="margin-top:65px;">
            <div class="row">
                <div class="span4">
                    <div class="modal hade fade" id="myModal">
                        <div class="modal-header">
                        <a class="close" data-dismiss="modal">x</a>
                        <h3>Cabecera</h3>
                        </div>
                        <div class="modal-body">
                        <p>Portfolio en construcción</p>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                    <div>
                        <h2><span class="colored"><strong>///</strong></span> Desde nuestro <span class="undercolored"><a href="#">Portfolio</a></span></h2>
                        <hr class="dash">
                        <div>
                            <p><em>El sistema de cuadrículas fluído usa porcentajes como anchura de página en vez de pixels. Tiene variaciones responsivas, garantizando que funcione bien en otros dispositivos y resoluciones.</em></p>
                        </div>
                        <hr class="dash">
                        <div class="well visible-desktop center">
                            <a class="btn btn-success btn-small" style="margin-right:10%" href="#"><i class="icon-picture icon-white"></i> Ver Portfolio</a> <a class="btn btn-success btn-small" data-toggle="modal" href="#myModal" ><i class="icon-download icon-white"></i> Download PDF</a>
                        </div>
                    </div>
                </div>
                <div class="span4 block">
                    <div class="view view-first">
                        <a href="assets/img/gal/2.jpg" rel="prettyPhoto"><img src="assets/img/gal/2.jpg" alt="" /></a>
                        <div class="mask">
                            <a href="assets/img/gal/2.jpg" rel="prettyPhoto" class="info"><img src="assets/img/plus.png" alt="Hanging Note Sign Psd" /></a>
                            <a href="#" class="link"><img src="assets/img/link.png" alt="Visit link" /></a>
                        </div>
                    </div>
                    <h5><i class="icon-picture"></i> <a href="#">Psd Retro Badges Vintage</a></h5>
                    <div class="description">
                        <p class="clo">A set of 6 original vintage and retro badges.</p>
                    </div>
                </div>
                <div class="span4 block">
                    <div class="view view-first">
                        <a href="assets/img/gal/11.jpg" rel="prettyPhoto"><img src="assets/img/gal/1.jpg" alt="" /></a>
                        <div class="mask">
                            <a href="assets/img/gal/1.jpg" rel="prettyPhoto" class="info"><img src="assets/img/plus.png" alt="Hanging Note Sign Psd" /></a>
                            <a href="#" class="link"><img src="assets/img/link.png" alt="Visit link" /></a>
                        </div>
                    </div>
                    <h5><i class="icon-picture"></i> <a href="#">Hanging Note Sign Psd</a></h5>
                    <div class="description">
                        <p class="clo">Our note is a great way to showcase an offer.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row" style="margin-top:45px; margin-bottom:45px;">
                <div class="span6">
                    <div class="row">
                    <div class="span6">
                        <h2><span class="colored"><strong>///</strong></span> Sobre nuestras <span class="undercolored"><a href="#">páginas</a></span></h2>
                        <hr class="dash">
                        <div class="intro">
                            <p style="margin-bottom:10px;"><em> Son páginas potentes con base WordPress muy flexibles, fáciles de personalizar y bien documentadas para tal fin.</em></p>
                        </div>
                        <hr class="dash intro">
                    </div>
                    <div class="span3">
                        <div class="about_icons pull-left">
                            <img src="assets/img/frame.png" />
                        </div>
                        <div>
                            <h5>Cuadrícula de 12 columnas</h5>
                            <p> El sistema de cuadrículas no lo es todo, pero teniendo uno de base simple y robusta puede hacer desarrollar tu página web mucho más sencillo.</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="about_icons pull-left">
                            <img src="assets/img/skills.png" />
                        </div>
                        <div>
                            <h5>Para todos los públicos</h5>
                            <p>Bootstrap ha sido diseñado para ayudar a la gente de cualquier nivel de conocimiento en diseño y desarrollo, nuestra páginas están preparadas para poder ser modificadas por el cliente aunque su conocimiento sea limitado.</p>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="well">
                            <h6>Diseño Web</h6>
                            <div class="progress progress-success progress-striped active" style="margin-bottom: 9px;">
                                <div class="bar" style="width: 90%"></div>
                            </div>
                            <h6>Programación</h6>
                            <div class="progress progress-success progress-striped active" style="margin-bottom: 9px;">
                                <div class="bar" style="width: 70%"></div>
                            </div>
                            <h6>Marketing social</h6>
                            <div class="progress progress-success progress-striped active" style="margin-bottom: 9px;">
                                <div class="bar" style="width: 80%"></div>
                            </div>
                            <h6>SEO</h6>
                            <div class="progress progress-success progress-striped active" style="margin-bottom: 9px;">
                                <div class="bar" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row visible-desktop">
                        <div class="span6 ">
                            <hr class="dash">
                            <h3><span class="colored"><strong>///</strong></span> Testimonios de los clientes</h3>
                                <div class="row">
                                <div class="span6">
                                    <div class="well" style="margin-top:10px;">
                                        <div class="testimonialslider">
                                            <ul class="slides">
                                                <li>
                                                    <blockquote>
                                                        <p>Trabajan bien, el bocadillo era de chopped y lo repartieron entre los tres, a Ander le tuve que dar dinero.</p>
                                                        <small>Pescador Bermeano</small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>No miréis a los ojos al del traje rosa, da miedo.</p>
                                                        <small>Bilbaína Aleatoria</small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Mal pero bien.</p>
                                                        <small>Hombre expresivo</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Es una mejor empresa que ENTIC Software.</p>
                                                        <small>J3A Company</small>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>La única empresa del mundo que trabaja por abrazos!</p>
                                                        <small>Acusado por Acoso</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Saben apreciar el verdadero valor de las cabras.</p>
                                                        <small>El gallego Breixo Cabreira</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Detuvieron a los caminantes sin vidriagón.</p>
                                                        <small>Jon Nieve</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Hicieron a America grande de nuevo.</p>
                                                        <small>Donald Trump</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>No me pisaron lo barrido por lo que no tuve que sacar el hacha.</p>
                                                        <small>Hombre de la escoba de la casa en ruinas</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Me pagaron la coca al primer aviso y sin recurrir al plata o plomo.</p>
                                                        <small>Pablo Emilio Escobar Gaviria</cite></small>
                                                    </blockquote>
                                                </li>   
                                                <li>
                                                    <blockquote>
                                                        <p>Visca Catalonya Lliure! Visca Gothic!</p>
                                                        <small>The Quadels</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>No estáis preparados.</p>
                                                        <small>Illidan Tempestira</cite></small>
                                                    </blockquote>
                                                </li> 
                                                <li>
                                                    <blockquote>
                                                        <p>Habéis probado reiniciando el router?</p>
                                                        <small>Servicio Técnico</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Habéis probado apagando el ordenador?</p>
                                                        <small>Servicio Técnico again</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Está conectado a la corriente el equipo?</p>
                                                        <small>Servicio Técnico again again</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Habéis iniciado la sesión con el usuario con la contraseña?</p>
                                                        <small>Servicio Técnico one more time</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Estáis contratados.</p>
                                                        <small>Bill Gates</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Os habría robado las ideas de seguir vivo.</p>
                                                        <small>Steve Jobs</cite></small>
                                                    </blockquote>
                                                </li>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <h2><span class="colored"><strong>///</strong></span> Nuestras <span class="undercolored"><a href="#">Noticias</a></span></h2>
                    <hr class="dash">
                </div>
                <div class="span6">
                    <div class="row">
                        <div class="blogslider span6 clearfix">
                            <ul class="slides">
                                <li>
                                    <div class="blog_item">
                                        <div class="blog_head">
                                            <h4>Anoter blog post</h4>
                                            <span><i class="icon-calendar icon-white"></i> Fantasy by Lewis Carroll on Aug 24, 2011</span>
                                        </div>
                                        <div class="view view-first">
                                            <a href="assets/img/gal/6.jpg" rel="prettyPhoto"><img src="assets/img/gal/6.jpg" alt="" /></a>
                                            <div class="mask">
                                                <a href="assets/img/gal/6.jpg" rel="prettyPhoto" class="info"><img src="assets/img/plus.png" alt="Hanging Note Sign Psd" /></a>
                                                <a href="#" class="link"><img src="assets/img/link.png" alt="Visit link" /></a>
                                            </div>
                                        </div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.<br><br><a class="btn btn-small" href="#">Read More</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog_item">
                                        <div class="blog_head">
                                            <h4>Anoter blog post</h4>
                                            <span><i class="icon-calendar icon-white"></i> Fantasy by Lewis Carroll on Aug 24, 2011</span>
                                        </div>
                                        <div class="view view-first">
                                            <a href="assets/img/gal/3.jpg" rel="prettyPhoto"><img src="assets/img/gal/3.jpg" alt="" /></a>
                                            <div class="mask">
                                                <a href="assets/img/gal/3.jpg" rel="prettyPhoto" class="info"><img src="assets/img/plus.png" alt="Hanging Note Sign Psd" /></a>
                                                <a href="#" class="link"><img src="assets/img/link.png" alt="Visit link" /></a>
                                            </div>
                                        </div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.<br><br><a class="btn btn-small" href="#">Read More</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog_item">
                                        <div class="blog_head">
                                            <h4>Anoter blog post</h4>
                                            <span><i class="icon-calendar icon-white"></i> Fantasy by Lewis Carroll on Aug 24, 2011</span>
                                        </div>
                                        <div class="view view-first">
                                            <a href="assets/img/gal/4.jpg" rel="prettyPhoto"><img src="assets/img/gal/4.jpg" alt="" /></a>
                                            <div class="mask">
                                                <a href="assets/img/gal/4.jpg" rel="prettyPhoto" class="info"><img src="assets/img/plus.png" alt="Hanging Note Sign Psd" /></a>
                                                <a href="#" class="link"><img src="assets/img/link.png" alt="Visit link" /></a>
                                            </div>
                                        </div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.<br><br><a class="btn btn-small" href="#">Read More</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog_item">
                                        <div class="blog_head">
                                            <h4>Anoter blog post</h4>
                                            <span><i class="icon-calendar icon-white"></i> Fantasy by Lewis Carroll on Aug 24, 2011</span>
                                        </div>
                                        <div class="view view-first">
                                            <a href="assets/img/gal/5.jpg" rel="prettyPhoto"><img src="assets/img/gal/5.jpg" alt="" /></a>
                                            <div class="mask">
                                                <a href="assets/img/gal/5.jpg" rel="prettyPhoto" class="info"><img src="assets/img/plus.png" alt="Hanging Note Sign Psd" /></a>
                                                <a href="#" class="link"><img src="assets/img/link.png" alt="Visit link" /></a>
                                            </div>
                                        </div>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.<br><br><a class="btn btn-small" href="#">Read More</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/MAIN CONTENT AREA-->
    <!--TWITTER AREA-->
    <div class="twitter-block">
        <div class="container">
            <div class="row">
                <div class="span3 header">
                    <h5><span class="colored">///</span> Nuestro Contenido en Twitter</h5>
                    <p>Descubre lo que está ocurriendo, al momento, con la gente y la empresa que os interesa.</p>
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