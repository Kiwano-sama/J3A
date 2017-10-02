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

$link = mysqli_connect('localhost', 'j3a', 'Qwerty123_', 'j3a');

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
                    <h4 class="visible-desktop">Some of Template Features:</h4>
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
                    <a href="123" class="btn btn-large btn-success mega"></i> Purchase this theme for 15$</a>
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
    <div class="container portfolio">
        <div style="margin-top:65px;">
            <div class="row">
                <div class="span4">
                    <div class="modal hade fade" id="myModal">
                        <div class="modal-header">
                        <a class="close" data-dismiss="modal">x</a>
                        <h3>Modal header</h3>
                        </div>
                        <div class="modal-body">
                        <p>One fine body...</p>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                    <div>
                        <h2><span class="colored"><strong>///</strong></span> From <span class="undercolored"><a href="#">Portfolio</a></span></h2>
                        <hr class="dash">
                        <div>
                            <p><em>The fluid grid system uses percents for column widths instead of fixed pixels. It has the responsive variations, ensuring proper proportions for key screen resolutions and devices.</em></p>
                        </div>
                        <hr class="dash">
                        <div class="well visible-desktop center">
                            <a class="btn btn-success btn-small" style="margin-right:10%" href="#"><i class="icon-picture icon-white"></i> View Portfolio</a> <a class="btn btn-success btn-small" data-toggle="modal" href="#myModal" ><i class="icon-download icon-white"></i> Download PDF</a>
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
                        <a href="assets/img/gal/1.jpg" rel="prettyPhoto"><img src="assets/img/gal/1.jpg" alt="" /></a>
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
                        <h2><span class="colored"><strong>///</strong></span> About <span class="undercolored"><a href="#">valera</a></span></h2>
                        <hr class="dash">
                        <div class="intro">
                            <p style="margin-bottom:10px;"><em>Powerful WordPress theme very flexible, easy for customizing and well documented, approaches for.</em></p>
                        </div>
                        <hr class="dash intro">
                    </div>
                    <div class="span3">
                        <div class="about_icons pull-left">
                            <img src="assets/img/frame.png" />
                        </div>
                        <div>
                            <h5>12-column grid</h5>
                            <p>Grid systems aren't everything, but having a durable and flexible one at the core of your work can make development much simpler.</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="about_icons pull-left">
                            <img src="assets/img/skills.png" />
                        </div>
                        <div>
                            <h5>All skill levels</h5>
                            <p>Bootstrap is designed to help people of all skill levels designer or developer, huge nerd or early beginner.</p>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="well">
                            <h6>Web design</h6>
                            <div class="progress progress-success progress-striped active" style="margin-bottom: 9px;">
                                <div class="bar" style="width: 90%"></div>
                            </div>
                            <h6>Programming</h6>
                            <div class="progress progress-success progress-striped active" style="margin-bottom: 9px;">
                                <div class="bar" style="width: 70%"></div>
                            </div>
                            <h6>Social marketing</h6>
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
                                                        <p>Built to support new HTML5 elements and syntax.</p>
                                                        <small>HTML5</small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Progressively enhanced components for ultimate style.</p>
                                                        <small>CSS3</small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Built for and maintained by the community via GitHub.</p>
                                                        <small>Open-source</cite></small>
                                                    </blockquote>
                                                </li>
                                                <li>
                                                    <blockquote>
                                                        <p>Brought to you by an experienced engineer and designer.</p>
                                                        <small>Made at Twitter</small>
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
                    <h2><span class="colored"><strong>///</strong></span> From our <span class="undercolored"><a href="#">blog</a></span></h2>
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