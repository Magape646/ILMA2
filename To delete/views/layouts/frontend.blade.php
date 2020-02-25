<!DOCTYPE html>
<html lang="zxx">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title> @yield('title')</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

	<!-- ICON CSS -->
	<link rel="stylesheet" href="{{ asset('js/font-awesome/css/font-awesome.min.css') }}">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('js/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('js/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- MODERNIZR -->
     <script src="{{ asset('js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

     @yield('calendarcss')

</head>
<body class="home5">

<div class="wrapper">
	<header class="header header3 header5 header6">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="search-bar">
					<input type="search" placeholder="Type search text here...">
					<div class="search-close"><i class="fa fa-times"></i></div>
				</div>

				<div class="navbar-header hidden visible-xs">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/ "><img src="{{ asset('img/logo.png') }}" class="img-responsive" alt=""/></a>
				</div>

				<div class="navbar-social">
					<a href="#"><img src="{{ asset('img/icon/3.png') }}" class="img-responsive" alt=""/></a>
					<a href="#"><img src="{{ asset('img/icon/4.png') }}" class="img-responsive" alt=""/></a>
					<a href="#"><img src="{{ asset('img/icon/5.png') }}" class="img-responsive" alt=""/></a>
				</div>

				<div class="navbar-brand hidden-xs">
					<a href="/ "><img src="{{ asset('img/logo2.png') }}" class="img-responsive" alt=""/></a>
				</div>




			</div>
		</nav>


		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="nav-dark">
		<div class="container">
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown dropdown-v1">
                    <a href="/aboutuses">About</a>

				</li>
				<li class="dropdown dropdown-v1">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Education <span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/programmes">Sub-programmes</a></li>
						<li class="dropdown-parent">
							<a >Postgraduate Studies</a>
							<ul class="dropdown-menu">
								<li><a href="/honours">Honours</a></li>
								<li><a href="/masters">Master’s</a></li>
								<li><a href="/doctrates">PhD </a></li>
							</ul>
						</li>

					</ul>
				</li>
				<li class="dropdown dropdown-v1">
					<a href="/news">News</a>

				</li>
				<li class="dropdown dropdown-v1">
					<a href="/Calendar-front">Calendar</a>

				</li>




				<li class="dropdown dropdown-v1">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Publications <span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/publicationpapers">Paper</a></li>
						<li><a href="/publicationjournals">Journal Article</a></li>
					</ul>
				</li>



				<li class="dropdown dropdown-v1">
					<a href="/projects">Projects</a>

				</li>

                <li class="dropdown dropdown-v1">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/publicresources">Public resources</a></li>
						<li><a href="/resourcelinks">Links</a></li>

					</ul>
				</li>

                <li class="dropdown dropdown-v1">
					<a href="/eventilmas">Events</a>

				</li>


                <li class="dropdown dropdown-v1">
					<a href="/contactuses">Contact Us</a>

				</li>


			</ul>
		</div>

		</div>
		</div>

		<!-- /.navbar-collapse -->
    </header>


    @yield('indexcontent')








<div class="bg-gray">


	<footer class="margin-top-30">
		<div class="container">

			<div class="footer-bottom">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<p>&copy; 2020 ILMA Research Programme. All Rights Reserved.</p>
					</div>
					<div class="col-md-6 col-sm-6 text-right">
						<ul class="list-inline">
							<li><a href="./Contact_us.html">Contact Us</a></li>


						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>



@yield('jquery')



</body>
</html>

