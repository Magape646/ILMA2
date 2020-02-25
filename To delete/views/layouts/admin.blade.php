<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>

        @yield('title')

    </title>
     <link rel="shortcut icon" href="" type="{{ asset('assets/img/logo/icon') }}"> <link rel="icon" href="{{ asset('assets/img/logo/favicon.ico') }}" type="assets/icon">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/animate/animate.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/transparent/style.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/transparent/style-responsive.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/transparent/theme/orange.css') }}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/plugins/nvd3/build/nv.d3.css') }}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL CSS STYLE ================== -->
    <link href="{{ asset('assets/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" />


    	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" media='print' />
	<link href="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin page-cover -->
	<div class="page-cover"></div>
	<!-- end page-cover -->

	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-header-fixed page-sidebar-fixed page-with-two-sidebar">
		<!-- begin #header -->
		<div id="header" class="header navbar-default show-bg ">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle pull-left" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<button type="button" class="navbar-toggle pull-right" data-click="right-sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/admin2" class="navbar-brand"><img src="{{ asset('assets/img/logo/logo-admin-transparent.png') }}" alt="" /></a>
			</div>
			<!-- end navbar-header -->

			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">


                <li class="dropdown">
                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                        <i class="fa fa-bell"></i>
                        <span class="label">5</span>
                    </a>
                    <ul class="dropdown-menu media-list dropdown-menu-right">
                        <li class="dropdown-header">NOTIFICATIONS (5)</li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left">
                                    <i class="fa fa-bug media-object bg-silver-darker"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
                                    <div class="text-muted f-s-11">3 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left">
                                    <img src="{{ asset('assets/img/user/user-1.jpg') }}" class="media-object" alt="" />
                                    <i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">John Smith</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="text-muted f-s-11">25 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left">
                                    <img src="{{ asset('assets/img/user/user-2.jpg') }}" class="media-object" alt="" />
                                    <i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Olivia</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="text-muted f-s-11">35 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left">
                                    <i class="fa fa-plus media-object bg-silver-darker"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"> New User Registered</h6>
                                    <div class="text-muted f-s-11">1 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left">
                                    <i class="fa fa-envelope media-object bg-silver-darker"></i>
                                    <i class="fab fa-google text-warning media-object-icon f-s-14"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading"> New Email From John</h6>
                                    <div class="text-muted f-s-11">2 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer text-center">
                            <a href="javascript:;">View more</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown navbar-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="d-none d-md-inline">Log Out here</span> <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:;" class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Log Out') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                    </div>
                </li>



			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->




		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">



<!-- begin sidebar scrollbar -->
<div data-scrollbar="true" data-height="100%">
    <!-- begin sidebar user -->
    <ul class="nav">
        <li class="nav-profile">
            <a href="javascript:;" data-toggle="nav-profile">
                <div class="image">
                    <img src="{{ asset('assets/img/user/user-13.jpg') }}" alt="" />
                </div>
                <div class="info">
                    <b class="caret pull-right"></b>
                    {{ Auth::user()->name }}
                    <small>User ID : {{ Auth::user()->id }}</small>
                </div>
            </a>
        </li>
        <li>
            <ul class="nav nav-profile">
                <li><a href="javascript:;"><i class="fa fa-cog"></i> Inbox</a></li>
                <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> My Account</a></li>
                <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Help</a></li>

            </ul>
        </li>
    </ul>
    <!-- end sidebar user -->
    <!-- begin sidebar nav -->
    <ul class="nav">
        <li class="nav-header">Edit Site Pages</li>



        <li><a href="/admin2"></b><i class="fa fa-gem"></i> <span>Dashboard</span></a></li>



        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret"></b>
                <i class="fa fa-list-ol"></i>
                <span>Home Page </span>
            </a>
            <ul class="sub-menu">
                <li><a href="javascript:;">Welcome Section <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                <li><a href="javascript:;">Recent News Section</a></li>
                <li><a href="javascript:;">Dashboard Section</a></li>
                <li><a href="javascript:;">Featured Videos Section</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret"></b>
                <i class="fa fa-table"></i>
                <span>About Us Page</span>
            </a>
            <ul class="sub-menu">
                <li><a href="/aboutuslanding">About Us Section</a></li>
                <li><a href="/stafflanding">Staff Section</a></li>
                <li><a href="/reportslanding">Reports Section</a></li>
            </ul>
        </li>

        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret"></b>
                <i class="fa fa-align-left"></i>
                <span>Education Page</span>
            </a>
            <ul class="sub-menu">
                <li><a href="/programmelanding">Programmes Page</a></li>
                <li><a href="/honourslanding">Honours Page</a></li>
                <li><a href="/masterslanding">Masters Page</a></li>
                <li><a href="/doctrateslanding">Doctrate Page</a></li>
                <li><a href="">Information Page</a></li>

            </ul>
        </li>
        

        <li><a href="/newslanding"><i class="fa fa-gift"></i> <span>News Page</span></a></li>


        <li><a href="javascript:;"><i class="fa fa-align-left"></i> <span>Calendar Page</span></a></li>




        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret"></b>
                <i class="fa fa-cogs"></i>
                <span>Publications Page</span>
            </a>
            <ul class="sub-menu">         
                <li><a href="/journalslanding">Journal Page</a></li>
                <li><a href="/paperslanding">Papers Page</a></li>
            </ul>
        </li>


        <li><a href="/projectslanding"><i class="fa fa-cogs"></i> <span>Projects Page</span></a></li>

       
        

        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret"></b>
                <i class="fa fa-cogs"></i>
                <span>Resources Page</span>
            </a>
            <ul class="sub-menu">
                <li><a href="/resourceslanding">Public Resources page</a></li>
                <li><a href="/linkslanding">Links page</a></li>
            </ul>
        </li>

        
        
        <li><a href="/eventslanding"><i class="fa fa-cogs"></i> <span>Events Page</span></a></li>

       

        <li><a href="/contactuslanding"><i class="fa fa-align-left"></i> <span>Contacts Page</span></a></li>

        <li><a href="/role-register"></b><i class="fa fa-key"></i> <span>Add Users</span></a></li>

        <!-- end sidebar minify button -->
    </ul>
    <!-- end sidebar nav -->
</div>
<!-- end sidebar scrollbar -->



		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

		<!-- begin #content -->
		<div id="content" class="content">

            @include('notifications.message')
            @yield('content')

            <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('article-ckeditor');
            </script>



		</div>
		<!-- end #content -->

        <!-- begin theme-panel -->

        <!-- end theme-panel -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('assets/plugins/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js') }}"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/js-cookie/js.cookie.js') }}"></script>
	<script src="{{ asset('assets/js/theme/transparent.min.js') }}"></script>
	<script src="{{ asset('assets/js/apps.min.js') }}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js"></script>
    <script src="{{ asset('assets/plugins/nvd3/build/nv.d3.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js') }}"></script>

	<script src="{{ asset('assets/js/demo/dashboard-v2.min.js') }}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->


	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('assets/plugins/fullcalendar/lib/moment.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo/calendar.demo.min.js') }}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.all.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo/form-wysiwyg.demo.min.js') }}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->


  
 

    
	<script>
		$(document).ready(function() {
			COLOR_GREEN = '#00cbff';
			App.init();
			DashboardV2.init();
		});
	</script>

</body>
</html>
