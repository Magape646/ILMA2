<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Lexicon | Inbox</title>
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
												<li><a href="javascript:;"><i class="fa fa-fw f-s-10 m-r-5 fa-circle text-black"></i> Admin</a></li>
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
						<div class="wrapper bg-black-transparent-2">
							<!-- begin btn-toolbar -->
							<div class="btn-toolbar">
								<div class="btn-group m-r-5">
									<a href="javascript:;" class="p-t-5 pull-left m-r-3 m-t-2" data-click="email-select-all">
										<i class="far fa-square fa-fw text-muted f-s-16 l-minus-2"></i>
									</a>
								</div>
								<!-- begin btn-group -->
								<div class="btn-group dropdown m-r-5">
									<button class="btn btn-default btn-sm" data-toggle="dropdown">
										View All <span class="caret m-l-3"></span>
									</button>
									<ul class="dropdown-menu text-left text-sm">
										<li class="active"><a href="javascript:;"><i class="fa fa-circle f-s-10 fa-fw m-r-5"></i> All</a></li>
										<li><a href="javascript:;"><i class="fa fa-circle f-s-10 fa-fw m-r-5"></i> Unread</a></li>
										<li><a href="javascript:;"><i class="fa fa-circle f-s-10 fa-fw m-r-5"></i> Contacts</a></li>
										<li><a href="javascript:;"><i class="fa fa-circle f-s-10 fa-fw m-r-5"></i> Groups</a></li>
										<li><a href="javascript:;"><i class="fa fa-circle f-s-10 fa-fw m-r-5"></i> Newsletters</a></li>
										<li><a href="javascript:;"><i class="fa fa-circle f-s-10 fa-fw m-r-5"></i> Social updates</a></li>
										<li><a href="javascript:;"><i class="fa fa-circle f-s-10 fa-fw m-r-5"></i> Everything else</a></li>
									</ul>
								</div>
								<!-- end btn-group -->
								<!-- begin btn-group -->
								<div class="btn-group m-r-5">
									<button class="btn btn-sm btn-default"><i class="fa fa-redo f-s-14 t-plus-1"></i></button>
								</div>
								<!-- end btn-group -->
								<!-- begin btn-group -->
								<div class="btn-group">
									<button class="btn btn-sm btn-default hide" data-email-action="delete"><i class="fa t-plus-1 fa-times f-s-14 m-r-3"></i> <span class="hidden-xs">Delete</span></button>
									<button class="btn btn-sm btn-default hide" data-email-action="archive"><i class="fa t-plus-1 fa-folder f-s-14 m-r-3"></i> <span class="hidden-xs">Archive</span></button>
									<button class="btn btn-sm btn-default hide" data-email-action="archive"><i class="fa t-plus-1 fa-trash f-s-14 m-r-3"></i> <span class="hidden-xs">Junk</span></button>
								</div>
								<!-- end btn-group -->
								<!-- begin btn-group -->
								<div class="btn-group ml-auto">
									<button class="btn btn-default btn-sm">
										<i class="fa fa-chevron-left f-s-14 t-plus-1"></i>
									</button>
									<button class="btn btn-default btn-sm">
										<i class="fa fa-chevron-right f-s-14 t-plus-1"></i>
									</button>
								</div>
								<!-- end btn-group -->
							</div>
							<!-- end btn-toolbar -->
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
										<!-- begin list-email -->
										<ul class="list-group list-group-lg no-radius list-email">
											<li class="list-group-item unread">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user bg-gradient-blue">
													<span class="text-white">F</span>
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">Today</span>
														<span class="email-sender">Facebook Blueprint</span>
														<span class="email-title">Newly released courses, holiday marketing tips, how-to video, and more!</span>
														<span class="email-desc">Sed scelerisque dui lacus, quis pellentesque lorem tincidunt rhoncus. Nulla accumsan elit pharetra, lacinia turpis nec, varius erat.</span>
													</a>
												</div>
											</li>
											<li class="list-group-item unread">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user bg-gradient-purple">
													<span class="text-white">C</span>
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">Today</span>
														<span class="email-sender">Color Admin</span>
														<span class="email-title">Color Admin dashboard v2 is ready for live</span>
														<span class="email-desc">Proin interdum aliquam urna, quis lobortis magna tincidunt ac. Integer sed pulvinar neque...</span>
													</a>
												</div>
											</li>
											<li class="list-group-item unread">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user bg-grey">
													<span class="text-white">W</span>
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">Today</span>
														<span class="email-sender">support@wrapbootstrap.com</span>
														<span class="email-title">Bootstrap v4.0 is coming soon</span>
														<span class="email-desc">Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...</span>
													</a>
												</div>
											</li>
											<li class="list-group-item">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user bg-grey">
													<i class="fab fa-github-alt text-white"></i>
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">2 days ago</span>
														<span class="email-sender">Github</span>
														<span class="email-title">Sidebar animation bugfix</span>
														<span class="email-desc">Nam sit amet lacinia massa, sit amet blandit urna. Duis pharetra ex id ipsum posuere...</span>
													</a>
												</div>
											</li>
											<li class="list-group-item">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user bg-grey">
													<span class="text-white">W</span>
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">1 week ago</span>
														<span class="email-sender">Wrapbootstrap</span>
														<span class="email-title">Bootstrap Framework is awesome</span>
														<span class="email-desc">Etiam enim ipsum, malesuada in consectetur interdum, malesuada et lacus. Aenean faucibus turpis lorem...</span>
													</a>
												</div>
											</li>
											<li class="list-group-item">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user">
													<img src="../assets/img/user/user-12.jpg" alt="" />
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">2 months ago</span>
														<span class="email-sender">Gerald Huff</span>
														<span class="email-title">Handlebars help you to build semantic template </span>
														<span class="email-desc">Proin consectetur accumsan rhoncus. Nulla porta orci ultricies lectus consequat fringilla. Vestibulum ante ipsum primis in faucibus...</span>
													</a>
												</div>
											</li>
											<li class="list-group-item">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user">
													<img src="../assets/img/user/user-1.jpg" alt="" />
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">2 months ago</span>
														<span class="email-sender">Rick	Hopkins</span>
														<span class="email-title">jQuery 2++ no longer compatibility with the old browser</span>
														<span class="email-desc">Suspendisse ut urna orci. Vivamus ac diam sollicitudin, consequat mauris id, facilisis ipsum. Nam feugiat nisl a justo...</span>
													</a>
												</div>
											</li>
											<li class="list-group-item">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user">
													<img src="../assets/img/user/user-13.jpg" alt="" />
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">2 months ago</span>
														<span class="email-sender">Jan Scott</span>
														<span class="email-title">LESS & SASS, which one is good?</span>
														<span class="email-desc">Nam vulputate cursus imperdiet. Sed sodales urna vitae ipsum iaculis, at fermentum...</span>
													</a>
												</div>
											</li>
											<li class="list-group-item">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user">
													<img src="../assets/img/user/user-14.jpg" alt="" />
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">3 months ago</span>
														<span class="email-sender">Nadine Barnes</span>
														<span class="email-title">Simple Line Icons is available on Color Admin v1.4</span>
														<span class="email-desc">Maecenas auctor dui sit amet tristique congue. Pellentesque lobortis nulla quam. Etiam in vulputate magna...</span>
													</a>
												</div>
											</li>
											<li class="list-group-item">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user bg-grey">
													<span class="text-white">E</span>
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">3 months ago</span>
														<span class="email-sender">Ellen Underwood</span>
														<span class="email-title">Font Awesome 5 is available now</span>
														<span class="email-desc">Proin consectetur accumsan rhoncus. Nulla porta orci ultricies lectus consequat fringilla. Vestibulum ante ipsum primis in faucibus...</span>
													</a>
												</div>
											</li>
											<li class="list-group-item">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user bg-grey">
													<span class="text-white">W</span>
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">3 months ago</span>
														<span class="email-sender">newsletter@wrapbootstrap.com</span>
														<span class="email-title">Cyber week sale! Save up to 45%</span>
														<span class="email-desc">Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...</span>
													</a>
												</div>
											</li>
											<li class="list-group-item">
												<div class="email-checkbox">
													<label>
														<i class="far fa-square"></i>
														<input type="checkbox" data-checked="email-checkbox" />
													</label>
												</div>
												<a href="/emaildetail" class="email-user bg-grey">
													<span class="text-white">S</span>
												</a>
												<div class="email-info">
													<a href="/emaildetail">
														<span class="email-time">3 months ago</span>
														<span class="email-sender">Starbucks</span>
														<span class="email-title">Get your favorite Grande handcrafted beverage at $13</span>
														<span class="email-desc">Nam vulputate cursus imperdiet. Sed sodales urna vitae ipsum iaculis, at fermentum...</span>
													</a>
												</div>
											</li>
										</ul>
										<!-- end list-email -->
									</div>
									<!-- end scrollbar -->
								</div>
								<!-- end vertical-box-inner-cell -->
							</div>
							<!-- end vertical-box-cell -->
						</div>
						<!-- end vertical-box-row -->
						<!-- begin wrapper -->
						<div class="wrapper bg-black-transparent-2 clearfix">
							<div class="btn-group pull-right">
								<button class="btn btn-default btn-sm">
									<i class="fa fa-chevron-left f-s-14 t-plus-1"></i>
								</button>
								<button class="btn btn-default btn-sm">
									<i class="fa fa-chevron-right f-s-14 t-plus-1"></i>
								</button>
							</div>
							<div class="m-t-5 f-w-600">1,232 messages</div>
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
