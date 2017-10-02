<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VALERA - Responsiv HTML Template based on Bootstrap, from Twitter</title>
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
<?php 
include 'header.php';
?>
    <!--WELCOME AREA-->
    <div class="gray_bg">
        <div class="container">
            <div class="row welcome_inner">
                <div class="span12">
                    <h1><span class="colored">///</span> Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!--/WELCOME AREA-->
    <!--MAIN CONTENT AREA-->
    <div id="map-contact">
    </div>
    <div class="container inner_content">
    	<section>
    		<div class="row">
            	<div class="span4">
                	<div class="well">
					<h4><span class="colored">///</span> Fontact information</h4>
                    <p>Valera is designed to help people of all skill levels designer or developer, huge nerd or early beginner. Use it as a complete kit or use to start something more complex.</p>
                	<hr>
                    <span><strong class="colored"> Aress:</strong> 123456 Street Name, Los Angeles</span>
                    <br>
                    <span><strong class="colored">Phone:</strong> (1800) 765-4321</span>
                    <br>
                    <span><strong class="colored">Fax:</strong> (1800) 765-4321</span>
                    <br>
                    <span><strong class="colored">Website:</strong> http://yoursitename.com</span>
                    <br>
                    <span><strong class="colored">Email:</strong> info@yoursitename.com</span>
                	</div>
                </div>
                <div class="span8">
                    <h3><span class="colored">///</span> Feel free to contact us</h3>
                    <div id="note"></div>
                        <form class="form" id="ajax-contact-form" action="javascript:alert('Was send!');">
                            <input type="text" name="name" class="span4" style="margin-right:25px;" placeholder="Name" />
                            <input  class="span4" name="email" placeholder="Email" />
                            <textarea type="text" name="message" placeholder="Message" rows="8" class="span8"></textarea>
                            <button type="submit"  class="btn btn-success">Send message</button>
                        </form>
                </div>
        	</div>
    	</section>
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
    <!--FOOTER-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="span3">
                    <img src="assets/img/logo-footer.png" alt="logo" style="margin-bottom:7px; margin-top:7px;" />
                <hr class="visible-phone">
                </div>
                <div class="span3">
                    <h5><span class="colored">///</span> Valera Company</h5>
                    <p>Valera is designed to help people of all skill levels designer or developer, huge nerd or early beginner. Use it as a complete kit or use to start something more complex.</p>
                    <hr class="visible-phone">
                </div>
                <div class="span3 flickr">
                    <h5><span class="colored">///</span> Contact info</h5>
                    <span><strong class="colored"> Aress:</strong> 123456 Street Name, Los Angeles</span>
                    <hr class=" hidden-phone"><br class="visible-phone">
                    <span><strong class="colored">Phone:</strong> (1800) 765-4321</span>
                    <hr class="visible-phone">
                </div>
                <div class="span3 soc_icons">
                    <h5><span class="colored">///</span> Stay in touch</h5>
                    <span>Find out what's happening:</span>
                    <hr>
                    <a href="#"><div class="icon_t"></div></a>
                    <a href="#"><div class="icon_facebook"></div></a>
                    <a href="#"><div class="icon_dribbble"></div></a>
                    <a href="#"><div class="icon_google"></div></a>
                    <a href="#"><div class="icon_in"></div></a>
                    <a href="#"><div class="icon_flickr"></div></a>
                </div>
            </div>
        </div>
    </footer>
    <!--/FOOTER-->
    <!--BOTTOM LINE-->
    <div class="bottom-block">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <span>Copyright 2012 Valera - Company. Design by <span class="undercolored"><a href="#">OrangeIde</a></span></span>
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
    <script src="assets/js/jquery.waitforimages.js"></script>
    <script src="assets/js/jquery.slabtext.min.js"></script>
    <script src="assets/js/jquery.flexslider-min.js"></script>
    <script src="assets/js/superfish-menu/superfish.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/twitter.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/jquery.gmap.min.js"></script>
    <script src="assets/js/jquery.preloader.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript" src="assets/js/contact.js"></script>
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
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30641321-1']);
  _gaq.push(['_setDomainName', 'orange-idea.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

    </body>
</html>