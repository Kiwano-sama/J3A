<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="http://html5-templates.com/" />
    <title>J3A-Home</title>
	<meta name="description" content="A minimalist Bootstrap theme by StartBootstrap. Contains everything you need to get started building your website. All you have to do is change the text and images.">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">J3A-Web Developers & Designers</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">Sobre Nosotros</a>
                    </li>
                    <li>
                        <a href="services.php">Servicios</a>
                    </li>
                     <li>
                        <a href="jobs.php">Trabaja con Nosotros</a>
                    </li>
                    <li>
                        <a href="contact.php">Contáctanos</a>
                    </li>
                    <li>
                        <a href="portfolio-3-col.html">Ejemplos de Proyectos</a>
                    </li>
                            
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://www.in-tuition.net/wp-content/uploads/2015/11/Malware.png');"></div>
                <div class="carousel-caption">
                    <h3>Desarrollamos aplicaciones para empresas</h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://holykaw.alltop.com/wp-content/uploads/2013/11/Screen-Shot-2013-11-12-at-2.08.19-PM.png');"></div>
                <div class="carousel-caption">
                    <h3>Diseñamos tu web a tu gusto</h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://avanzamarketing.com/wp-content/uploads/2016/12/pantallazoazul-1024x285.jpg');"></div>
                <div class="carousel-caption">
                    <h3>Realizamos mantenimientos de páginas y apps</h3>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
<section  id="contact" class="content-section text-center">
            <div class="contact-section">
                <div class="container">
                    <h1>Quieres trabajar con nosotros?</h1>
                    <h3>Rellena este formulario y envianoslo para que podamos valorar tus posibilidades de trabajar con nosOtros</h3>
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
                            <h3>Nuestras redes sociales:</h3>
                            <table align="center">
                                <tr class="list-inline banner-social-buttons">
                                <h3>Siguenos:</h3>

                                <td> <a href="https://twitter.com/?lang=es" id="gh" target="_blank" title="Twitter">Twitter<span class="fa-stack fa-lg">
                                            <i class="fa fa-square-o fa-stack-2x"></i>
                                            <i class="fa fa-twitter fa-stack-1x"></i></td>
                                        </span>

                                        <td> <a href="https://es-es.facebook.com/"  target="_blank" title="Facebook">Facebook<span class="fa-stack fa-lg">
                                                    <i class="fa fa-square-o fa-stack-2x"></i>
                                                    <i class="fa fa-facebook fa-stack-1x"></i></td>
                                                </span>
                                                <td> <a href="https://plus.google.com/about?hl=es"  target="_blank" title="Google">Google+<span class="fa-stack fa-lg">
                                                            <i class="fa fa-square-o fa-stack-2x"></i>
                                                            <i class="fa fa-google fa-stack-1x"></i></td>
                                                </span>
                                </tr>
                            </table>    
                        </div>
                    </div>
                </div>
             </div>
        </section>

        <!-- Footer -->
      

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>


