<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs

  ================================================== -->
  <link rel="shortcut icon" href="../img/favicon.png">

  	<!-- ICON CSS -->
    <link rel="stylesheet" href="{{ asset('events/js/font-awesome/css/font-awesome.min.css') }}">











<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ILMA | Current Events</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
<link href="{{ asset('events/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('events/css/bootstrap-theme.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('events/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('events/vendor/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('events/vendor/mediaelement/mediaelementplayer.css') }}" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<link href="{{ asset('events/css/custom.css') }}" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
<!-- Color Style -->
<link href="{{ asset('events/colors/color4.css') }}" rel="stylesheet" type="text/css">
<!-- SCRIPTS
  ================================================== -->
<script src="{{ asset('events/js/modernizr.js') }}"></script><!-- Modernizr -->
</head>
<body class="home">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
	<!-- Start Site Header -->
	<header class="site-header">
    	<div class="container-spec">
        	<div class="site-logo">
            <h1>
                <a href="/index"><img src="{{ asset('images/logo2.png') }}" alt="Logo"></a>

            </h1>
            </div>
            <!-- Main Navigation -->
            <nav class="main-navigation" role="navigation">
                <ul class="sf-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#speakers">Speakers</a></li>
                    <li><a href="#venue">Venue</a></li>
                    <li><a href="#schedule">Schedule</a></li>
                    <li><a href="#partners">Partners</a></li>
                	<li ><a href="#register">Register</a></li>
                </ul>
            </nav>
            <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
    	</div>
	</header>
	<!-- End Site Header -->
    <!-- Showcase -->
    <div class="showcase wheighter">
        <!-- Start Hero Slider -->
        <div class="hero-slider flexslider wheighter" data-autoplay="yes" data-pagination="no" data-arrows="no" data-style="fade" data-speed="5000" data-pause="yes">
            <ul class="slides">
                <li class=" parallax parallax1 wheighter" style="background-image:url(/storage/img/events_images/{{ $eventilma->cover1_image}})"></li>
                <li class=" parallax parallax2 wheighter" style="background-image:url(/storage/img/events_images/{{ $eventilma->cover2_image}})"></li>
            </ul>
        </div>
        <!-- End Hero Slider -->
        <div class="event-hero-info">
        	<div class="container">
                <div class="event-info">
                    <span class="tl" data-appear-animation="fadeInDown" data-appear-animation-delay="200">{{ $eventilma->invitationtype }} </span>
                    <span class="page-title" data-appear-animation="zoomIn" data-appear-animation-delay="500">{{ $eventilma->eventtitle }} </span>
                    <span class="tl" data-appear-animation="fadeInDown" data-appear-animation-delay="700">{{ $eventilma->eventvenue }} </span>
                    <span class="event-date" data-appear-animation="fadeInUp" data-appear-animation-delay="900">{{ $eventilma->eventdate }} </span>
                </div>
           	</div>
        </div>
    </div>
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full">
        	<!-- Home Section Content -->
        	<section id="home">
            	<div class="padding-tb50 lgray-bg">
                    <div class="container">
                        <p class="lead text-center">{{ $eventilma->eventintro }}</p>

                    </div>
                    <br>
                    <div class="container">
                        <p class="lead text-center"><strong>{{ $eventilma->eventtitle }}</strong></p>

                    </div>
                    <div class="container">
                        <p class="lead text-center">{{ $eventilma->eventdate }}</p>

                    </div>
                </div>
                <div class="container-spec home-content">
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <div class="video-popup">
                                <img src="/images/video.jpg" alt="">

                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="fw-inner-right">
                                <h3 class="page-title">Background</h3>
                                <blockquote>
                                    {{ $eventilma->background }}
                                </blockquote>

                            </div>
                        </div>
                    </div>
              	</div>
           	</section>
        	<!-- Speakers Section Content -->
        	<section class="onepage-section lgray-bg" id="speakers">
            	<div class="container">
                	<header class="onepage-section-headers text-align-center">
                    	<h3 class="page-title">Speakers</h3>
                    	<h2 class="page-stitle">Meet our main speakers at the conference</h2>

                    </header>
                    <div class="row">
                        <ul class="team-grid">
                            <li class="col-md-4 col-sm-4 team-item">
                                <div class="team-item-image">
                                    <img src="{{ asset('images/speaker1.jpg') }}" alt="">
                                    <div class="team-item-overlay">
                                    	<div class="team-item-overlay-inner">
                                    		<a ><i class="fa fa-twitter"></i></a>
                                    		<a ><i class="fa fa-globe"></i></a>
                                    	</div>
                                  	</div>
                                </div>
                                <div class="team-item-cont">
                                	<h5>{{ $eventilma->speaker1 }}</h5>
                                    <span class="meta-data">{{ $eventilma->speaker1insitution }}</span>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 team-item">
                                <div class="team-item-image">
                                    <img src="{{ asset('images/speaker2.jpg') }}" alt="">
                                    <div class="team-item-overlay">
                                    	<div class="team-item-overlay-inner">
                                    		<a ><i class="fa fa-twitter"></i></a>
                                    		<a ><i class="fa fa-globe"></i></a>
                                    	</div>
                                  	</div>
                                </div>
                                <div class="team-item-cont">
                                	<h5>{{ $eventilma->speaker2 }}</h5>
                                    <span class="meta-data">{{ $eventilma->speaker2insitution }}</span>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-4 team-item">
                                <div class="team-item-image">
                                    <img src="{{ asset('images/speaker3.jpg') }}" alt="">
                                    <div class="team-item-overlay">
                                    	<div class="team-item-overlay-inner">
                                    		<a ><i class="fa fa-twitter"></i></a>
                                    		<a ><i class="fa fa-globe"></i></a>
                                    	</div>
                                  	</div>
                                </div>
                                <div class="team-item-cont">
                                	<h5>{{ $eventilma->speaker3 }}</h5>
                                    <span class="meta-data">{{ $eventilma->speaker3insitution }}</span>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6 team-item">
                                <div class="team-item-image">
                                    <img src="{{ asset('images/speaker4.jpg') }}" alt="">
                                    <div class="team-item-overlay">
                                    	<div class="team-item-overlay-inner">
                                    		<a ><i class="fa fa-twitter"></i></a>
                                    		<a ><i class="fa fa-globe"></i></a>
                                    	</div>
                                  	</div>
                                </div>
                                <div class="team-item-cont">
                                	<h5>{{ $eventilma->speaker4 }}</h5>
                                    <span class="meta-data">{{ $eventilma->speaker4insitution }}</span>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6 team-item">
                                <div class="team-item-image">
                                    <img src="{{ asset('images/speaker5.jpg') }}" alt="">
                                    <div class="team-item-overlay">
                                    	<div class="team-item-overlay-inner">
                                    		<a ><i class="fa fa-twitter"></i></a>
                                    		<a ><i class="fa fa-globe"></i></a>
                                    	</div>
                                  	</div>
                                </div>
                                <div class="team-item-cont">
                                	<h5>{{ $eventilma->speaker5 }}</h5>
                                    <span class="meta-data">{{ $eventilma->speaker5insitution }}</span>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6 team-item">
                                <div class="team-item-image">
                                    <img src="{{ asset('images/speaker6.jpg') }}" alt="">
                                    <div class="team-item-overlay">
                                    	<div class="team-item-overlay-inner">
                                    		<a ><i class="fa fa-twitter"></i></a>
                                    		<a ><i class="fa fa-globe"></i></a>
                                    	</div>
                                  	</div>
                                </div>
                                <div class="team-item-cont">
                                	<h5>Matilda Anderson</h5>
                                    <span class="meta-data">KU Leuven</span>
                                </div>
                            </li>
                            <li class="col-md-3 col-sm-6 team-item">
                                <div class="team-item-image">
                                    <img src="{{ asset('images/speaker7.jpg') }}" alt="">
                                    <div class="team-item-overlay">
                                    	<div class="team-item-overlay-inner">
                                    		<a ><i class="fa fa-twitter"></i></a>
                                    		<a><i class="fa fa-globe"></i></a>
                                    	</div>
                                  	</div>
                                </div>
                                <div class="team-item-cont">
                                	<h5>William Harris</h5>
                                    <span class="meta-data">ILMA</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            	<div class="spacer-50"></div>
            </section>


        	<!-- Venue Section Content -->
        	<section class="onepage-section" id="venue">
            	<div class="container">
                	<header class="onepage-section-headers text-align-center">
                    	<h3 class="page-title">Venue</h3>
                    	<h2 class="page-stitle">The symposium will take place at the Emerald Conference Centre in Vanderbijlpark, South Africa. Accommodation will be available at the Conference Centre as well as guest houses in the area. </h2>
                   		<a   class="btn btn-primary btn-lg">More info about location</a>
                   	</header>
              	</div>
            </section>




        	<!-- Schedule Section Content -->
        	<section class="onepage-section " id="schedule">
            	<div class="container">
                	<header class="onepage-section-headers text-align-center lgray-bg">
                    	<h3 class="page-title">Schedule</h3>
                    	<h2 class="page-stitle">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus imperdiet justo.</h2>
                   		<a href="{{ asset('img/Documents/Lorem_ipsum.pdf') }}" class="btn btn-primary btn-lg">Download Schedule PDF</a>
                       </header>


                    <div class="spacer-30"></div>
                    <div class="row">
                    	<div class="col-md-7">
                            <div class="tabs schedule-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"> <a data-toggle="tab" href="#sampletab1"> Day 1 </a> </li>
                                    <li> <a data-toggle="tab" href="#sampletab2"> Day 2 </a> </li>
                                </ul>
                                <div class="tab-content lgray-bg">
                                    <div id="sampletab1" class="tab-pane active">
                                        <div class="event-task">
                                        	<h5>Start<span class="label label-secondary">11:00 AM</span></h5>
                                			<p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        </div>
                                        <div class="event-task">
                                        	<h5>Consectetur adipiscing<span class="label label-secondary">1:00 PM</span></h5>
                                			<p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        </div>
                                    </div>
                                    <div id="sampletab2" class="tab-pane">
                                        <div class="event-task">
                                        	<h5>End<span class="label label-secondary">11:00 AM</span></h5>
                                			<p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        </div>
                                        <div class="event-task">
                                        	<h5>Consectetur adipiscing<span class="label label-secondary">1:00 PM</span></h5>
                                			<p>Nulla consequat massa quis enim.Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 sm-push-top">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem. Donec vestibulum justo a diam ultricies pellentesque aliquet non lorem. Donec vestibulum justo a diam ultricies pellentesque aliquet non lorem. Donec vestibulum justo a diam ultricies pellentesque.</p>
                            <div class="gallery row">
                            	<figure class="col-md-4 col-sm-4 col-xs-6 format-image" data-appear-animation="fadeIn" data-appear-animation-delay="10">
                                	<a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="{{ asset('images/schedule1.png') }}" alt=""></a>
                                </figure>
                            	<figure class="col-md-4 col-sm-4 col-xs-6 format-video" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                                	<a href="http://youtu.be/NEFfnbQlGo8" data-rel="prettyPhoto[gallery]" class="media-box"><img src="images/schedule1.png" alt=""></a>
                                </figure>
                            	<figure class="col-md-4 col-sm-4 col-xs-6 format-image" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                                	<a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="{{ asset('images/schedule1.png') }}" alt=""></a>
                                </figure>
                            	<figure class="col-md-4 col-sm-4 col-xs-6 format-image" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                                	<a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="{{ asset('images/schedule1.png') }}" alt=""></a>
                                </figure>
                            	<figure class="col-md-4 col-sm-4 col-xs-6 format-image" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                                	<a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="{{ asset('images/schedule1.png') }}" alt=""></a>
                                </figure>
                            	<figure class="col-md-4 col-sm-4 col-xs-6 format-image" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                                	<a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" data-rel="prettyPhoto[gallery]" class="media-box"><img src="{{ asset('images/schedule1.png') }}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                   	</div>
               	</div>
            	<div class="spacer-50"></div>
            </section>
        	<!-- Partners Section Content -->
        	<section class="onepage-section lgray-bg" id="partners">
            	<div class="container">
                	<header class="onepage-section-headers text-align-center">
                    	<h3 class="page-title">Presented by</h3>

                        <hr class="sm">
                   	</header>
                    <div class="text-align-center">
                      	<img src="{{ asset('images/logo_envato.png') }}" alt="Envato">
                        <div class="spacer-75"></div>
                  		<h3>In association with</h3>
                        <hr class="sm">
                    </div>
                    <div class="row text-align-center">
                    	<div class="col-md-3 col-sm-3 col-xs-6">
                      		<img src="{{ asset('images/logo_tf.png') }}" alt="ThemeForest">
                        </div>
                    	<div class="col-md-3 col-sm-3 col-xs-6">
                      		<img src="{{ asset('images/logo_cc.png') }}" alt="CodeCanyon">
                        </div>
                    	<div class="col-md-3 col-sm-3 col-xs-6">
                      		<img src="{{ asset('images/logo_gr.png') }}" alt="GraphicRiver">
                        </div>
                    	<div class="col-md-3 col-sm-3 col-xs-6">
                      		<img src="{{ asset('images/logo_pd.png') }}" alt="PhotoDune">
                        </div>
                    </div>

               	</div>
            	<div class="spacer-50"></div>
            </section>

        	<!-- Register Section Content -->
        	<section class="onepage-section" id="register">
            	<div class="container">
                	<header class="onepage-section-headers text-align-center">
                    	<h3 class="page-title">Register</h3>
                    	<h2 class="page-stitle">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus imperdiet justo.</h2>
                   	</header>
                    <form id="contactform" name="contactform" class="registration-form" action="mail/registration.php">


                        <div class="row">
                            <div class="col-md-7">
                            	<input type="text" name="Name" id="Name" class="form-control input-lg" placeholder="Name*">
                        		<div class="row">
                            		<div class="col-md-6">
                            			<input type="email" name="Email" id="Email" class="form-control input-lg" placeholder="Email*">
                                  	</div>
                            		<div class="col-md-6">
                            			<input type="text" name="Phone" id="Phone" class="form-control input-lg" placeholder="Phone*">
                                  	</div>
                              	</div>
                            	<input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Register">
                                <div class="clearfix"></div>
                                <div id="message"></div>
                            </div>
                            <div class="col-md-4 col-md-offset-1 sm-push-top">
                            	<h3>Contact Us</h3>
                            	<address>
                                	ILMA Research Focus Area<br>
                                    P O Box 1174<br>North-West University<br>
                                    Vanderbijlpark<br>1900<br><br>
                                    <a href="mailto:registrants@ilma.co.za" class="basic-link">ilma@nwu.ac.za
                                    </a><br>
                                    +27 (0)16 910 3410
                                </address>
                            </div>
                       	</div>
                    </form>
                    <div class="spacer-75"></div>
               	</div>
            </section>
        </div>
    </div>
    <!-- Start site footer -->

    <!-- Start site footer bottom -->
    <footer class="site-footer-bottom gray-bg padding-tb20">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-6 col-sm-6 copyrights-left">
                	&copy; 2020 ILMA Research Programme. All Rights Reserved.
                </div>
                <div class="col-md-6 col-sm-6 copyrights-right">
                  	<ul class="social-icons pull-right">
                    	<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="http://www.pinterest.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a>
                 	</ul>
                </div>
           	</div>
      	</div>
    </footer>
    <!-- End site footer -->
  	<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

</div>
<script src="{{ asset('events/js/jquery-2.0.0.min.js') }}"></script> <!-- Jquery Library Call -->
<script src="{{ asset('events/vendor/prettyphoto/js/prettyphoto.js') }}"></script> <!-- PrettyPhoto Plugin -->
<script src="{{ asset('events/js/helper-plugins.js') }}"></script> <!-- Helper Plugins -->
<script src="{{ asset('events/js/bootstrap.js') }}"></script> <!-- UI -->
<script src="{{ asset('events/js/waypoints.js') }}"></script> <!-- UI -->
<script src="{{ asset('events/js/init.js') }}"></script> <!-- All Scripts -->
<script src="{{ asset('events/vendor/flexslider/js/jquery.flexslider.js') }}"></script> <!-- FlexSlider -->
<script src="{{ asset('events/js/jquery.simpleWeather.min.js') }}"></script>
<script>
// Docs at http://simpleweatherjs.com
$(document).ready(function() {
  $.simpleWeather({
    location: 'Chicago, IL',
    woeid: '',
    unit: 'f',
    success: function(weather) {
      html = '<i class="wi wi-'+weather.code+'"></i> '+weather.temp+'&deg;'+weather.units.temp+'';

      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});
</script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script> <!-- Google Map -->
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();
var address = "CITYCLUB, CHICAGO IL"; //Add your address here, all on one line.
var latitude;
var longitude;
var color = "#579bd3"; //Set your tint color. Needs to be a hex value.

function getGeocode() {
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
    		latitude = results[0].geometry.location.lat();
			longitude = results[0].geometry.location.lng();
			initGoogleMap();
    	}
	});
}

function initGoogleMap() {
	var styles = [
	    {
	      stylers: [
	        { saturation: -100 }
	      ]
	    }
	];

	var options = {
		mapTypeControlOptions: {
			mapTypeIds: ['Styled']
		},
		center: new google.maps.LatLng(latitude, longitude),
		zoom: 13,
		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		zoomControl: true,
		disableDefaultUI: true,
		mapTypeId: 'Styled'
	};
	var div = document.getElementById('gmap');
	var map = new google.maps.Map(div, options);
	marker = new google.maps.Marker({
	    map:map,
	    draggable:false,
	    animation: google.maps.Animation.DROP,
	    position: new google.maps.LatLng(latitude,longitude)
	});
	var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
	map.mapTypes.set('Styled', styledMapType);

	var infowindow = new google.maps.InfoWindow({
	      content: "<div class='iwContent'>"+address+"</div>"
	});
	google.maps.event.addListener(marker, 'click', function() {
	    infowindow.open(map,marker);
	  });


	bounds = new google.maps.LatLngBounds(
	  new google.maps.LatLng(-84.999999, -179.999999),
	  new google.maps.LatLng(84.999999, 179.999999));

	rect = new google.maps.Rectangle({
	    bounds: bounds,
	    fillColor: color,
	    fillOpacity: 0.2,
	    strokeWeight: 0,
	    map: map
	});
}
google.maps.event.addDomListener(window, 'load', getGeocode);
</script>
</body>
</html>
