<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Lexicon | Email Detail</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/transparent/style.min.css" rel="stylesheet" />
	<link href="../assets/css/transparent/style-responsive.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/transparent/theme/orange.css') }}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
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
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-content-full-height">
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
				<a href="/user" class="navbar-brand"><img src="{{ asset('assets/img/logo/logo-admin-transparent.png') }}" alt="" /></a>
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
                                    <img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
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
                                    <img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
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
                                <img src="../assets/img/user/user-13.jpg" alt="" />
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
                            <li><a href="/inbox"><i class="fa fa-cog"></i> Inbox</a></li>
                            <li><a href="/myaccount"><i class="fa fa-pencil-alt"></i> My Account</a></li>
                            <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Help</a></li>

                        </ul>
                    </li>
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav" >
                    <li class="nav-header">Navigation</li>

                    <li class="has-sub" >
                        <a href="/user">
                            <i class="fa fa-list-ol"></i>
                            <span>Dashboard</span>
                        </a>
                        </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-play-circle"></i>
                            <span>To Do</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="/calender">
                            <i class="fa fa-gem"></i>
                            <span>Calender</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="/lessons">
                            <i class="fa fa-hdd"></i>
                            <span>Lessons</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span>Progress Report</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span>Insight</span>
                        </a>
                    </li>




                    <!-- begin sidebar minify button -->

                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

		<!-- begin #content -->
		<div id="content" class="content content-full-width inbox">
		    <!-- begin vertical-box -->
		    <div class="vertical-box with-grid">
		        <!-- begin vertical-box-column -->
		        <div class="vertical-box-column width-200 bg-black-transparent-2 hidden-xs">
		        	<!-- begin vertical-box -->
		        	<div class="vertical-box">
						<!-- begin wrapper -->
						<div class="wrapper bg-black-transparent-2 text-center">
							<a href="email_compose.html" class="btn btn-primary p-l-40 p-r-40 btn-sm">
								Compose
							</a>
						</div>
						<!-- end wrapper -->
						<!-- begin vertical-box-row -->
						<div class="vertical-box-row">
							<!-- begin vertical-box-cell -->
							<div class="vertical-box-cell">
								<!-- begin vertical-box-inner-cell -->
								<div class="vertical-box-inner-cell">
									<!-- begin scrollbar -->
									<div data-scrollbar="true" data-height="100%">
										<!-- begin wrapper -->
										<div class="wrapper p-0">
											<div class="nav-title"><b>FOLDERS</b></div>
											<ul class="nav nav-inbox">
												<li class="active"><a href="email_inbox.html"><i class="fa fa-inbox fa-fw m-r-5"></i> Inbox <span class="badge pull-right">52</span></a></li>
												<li><a href="email_inbox.html"><i class="fa fa-flag fa-fw m-r-5"></i> Important</a></li>
												<li><a href="email_inbox.html"><i class="fa fa-envelope fa-fw m-r-5"></i> Sent</a></li>
												<li><a href="email_inbox.html"><i class="fa fa-pencil-alt fa-fw m-r-5"></i> Drafts</a></li>
												<li><a href="email_inbox.html"><i class="fa fa-trash fa-fw m-r-5"></i> Trash</a></li>
											</ul>
											<div class="nav-title"><b>LABEL</b></div>
											<ul class="nav nav-inbox">
												<li><a href="javascript:;"><i class="fa fa-fw f-s-10 m-r-5 fa-circle text-inverse"></i> Admin</a></li>
												<li><a href="javascript:;"><i class="fa fa-fw f-s-10 m-r-5 fa-circle text-primary"></i> Designer & Employer</a></li>
												<li><a href="javascript:;"><i class="fa fa-fw f-s-10 m-r-5 fa-circle text-success"></i> Staff</a></li>
												<li><a href="javascript:;"><i class="fa fa-fw f-s-10 m-r-5 fa-circle text-warning"></i> Sponsorer</a></li>
												<li><a href="javascript:;"><i class="fa fa-fw f-s-10 m-r-5 fa-circle text-danger"></i> Client</a></li>
											</ul>
										</div>
										<!-- end wrapper -->
									</div>
									<!-- end scrollbar -->
								</div>
								<!-- end vertical-box-inner-cell -->
							</div>
							<!-- end vertical-box-cell -->
						</div>
						<!-- end vertical-box-row -->
					</div>
					<!-- end vertical-box -->
		        </div>
		        <!-- end vertical-box-column -->
		        <!-- begin vertical-box-column -->
		        <div class="vertical-box-column bg-black-transparent-2">
		        	<!-- begin vertical-box -->
		        	<div class="vertical-box">
						<!-- begin wrapper -->
						<div class="wrapper bg-black-transparent-2-lighter clearfix">
							<div class="pull-left">
								<div class="btn-group m-r-5">
									<a href="javascript:;" class="btn btn-default btn-sm"><i class="fa fa-reply f-s-14 m-r-3 m-r-xs-0 t-plus-1"></i> <span class="hidden-xs">Reply</span></a>
								</div>
								<div class="btn-group m-r-5">
									<a href="javascript:;" class="btn btn-default btn-sm"><i class="fa fa-trash f-s-14 m-r-3 m-r-xs-0 t-plus-1"></i> <span class="hidden-xs">Delete</span></a>
									<a href="javascript:;" class="btn btn-default btn-sm"><i class="fa fa-archive f-s-14 m-r-3 m-r-xs-0 t-plus-1"></i> <span class="hidden-xs">Archive</span></a>
								</div>
							</div>
							<div class="pull-right">
								<div class="btn-group">
									<a href="email_inbox.html" class="btn btn-default btn-sm disabled"><i class="fa fa-arrow-up f-s-14 t-plus-1"></i></a>
									<a href="email_inbox.html" class="btn btn-default btn-sm"><i class="fa fa-arrow-down f-s-14 t-plus-1"></i></a>
								</div>
								<div class="btn-group m-l-5">
									<a href="email_inbox.html" class="btn btn-default btn-sm"><i class="fa fa-times f-s-14 t-plus-1"></i></a>
								</div>
							</div>
						</div>
						<!-- end wrapper -->
						<!-- begin vertical-box-row -->
						<div class="vertical-box-row">
							<!-- begin vertical-box-cell -->
							<div class="vertical-box-cell">
								<!-- begin vertical-box-inner-cell -->
								<div class="vertical-box-inner-cell">
									<!-- begin scrollbar -->
									<div data-scrollbar="true" data-height="100%">
										<!-- begin wrapper -->
										<div class="wrapper">
											<h3 class="m-t-0 m-b-15 f-w-500">Bootstrap v4.0 is coming soon</h3>
											<ul class="media-list underline m-b-15 p-b-15">
												<li class="media media-sm clearfix">
													<a href="javascript:;" class="pull-left">
														<img class="media-object rounded-corner" alt="" src="../assets/img/user/user-12.jpg" />
													</a>
													<div class="media-body">
														<div class="email-from f-s-14 f-w-600 m-b-3">
															from support@wrapbootstrap.com
														</div>
														<div class="m-b-3"><i class="fa fa-clock fa-fw"></i> Today, 8:30 AM</div>
														<div class="email-to">
															To: nguoksiong@live.co.uk
														</div>
													</div>
												</li>
											</ul>
											<ul class="attached-document clearfix">
												<li class="fa-file">
													<div class="document-file">
														<a href="javascript:;">
															<i class="fa fa-file-pdf"></i>
														</a>
													</div>
													<div class="document-name"><a href="javascript:;">flight_ticket.pdf</a></div>
												</li>
												<li class="fa-camera">
													<div class="document-file">
														<a href="javascript:;">
															<img src="../assets/img/gallery/gallery-11.jpg" alt="" />
														</a>
													</div>
													<div class="document-name"><a href="javascript:;">front_end_mockup.jpg</a></div>
												</li>
											</ul>

											<p class="f-s-12 p-t-10">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel auctor nisi, vel auctor orci. <br />
												Aenean in pretium odio, ut lacinia tellus. Nam sed sem ac enim porttitor vestibulum vitae at erat.
											</p>
											<p class="f-s-12">
												Curabitur auctor non orci a molestie. Nunc non justo quis orci viverra pretium id ut est. <br />
												Nullam vitae dolor id enim consequat fermentum. Ut vel nibh tellus. <br />
												Duis finibus ante et augue fringilla, vitae scelerisque tortor pretium. <br />
												Phasellus quis eros erat. Nam sed justo libero.
											</p>
											<p class="f-s-12">
												Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br />
												Sed tempus dapibus libero ac commodo.
											</p>
											<br />
											<br />
											<p class="f-s-12">
												Best Regards,<br />
												Sean.<br /><br />
												Information Technology Department,<br />
												Senior Front End Designer<br />
											</p>
										</div>
										<!-- end wrapper -->
									</div>
									<!-- end scrollbar -->
								</div>
								<!-- end vertical-box-inner-cell -->
							</div>
							<!-- end vertical-box-cell -->
						</div>
						<!-- end vertical-box-row -->
						<!-- begin wrapper -->
						<div class="wrapper bg-black-transparent-2-lighter text-right clearfix">
							<div class="btn-group">
								<a href="email_inbox.html" class="btn btn-default btn-sm disabled"><i class="fa fa-arrow-up"></i></a>
								<a href="email_inbox.html" class="btn btn-default btn-sm"><i class="fa fa-arrow-down"></i></a>
							</div>
							<div class="btn-group m-l-5">
								<a href="email_inbox.html" class="btn btn-default btn-sm"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<!-- end wrapper -->
					</div>
					<!-- end vertical-box -->
		        </div>
		        <!-- end vertical-box-column -->
		    </div>
		    <!-- end vertical-box -->
		</div>
		<!-- end #content -->



		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../assets/js/theme/transparent.min.js"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/js/demo/email-inbox.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
			InboxV2.init();
		});
	</script>
</body>
</html>
