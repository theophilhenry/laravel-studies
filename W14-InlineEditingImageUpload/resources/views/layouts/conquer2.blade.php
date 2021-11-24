<!DOCTYPE html>
<!-- 
Template Name: Conquer - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/conquer-responsive-admin-dashboard-template/3716838?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<title>160419078 - Web Framework Programming</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/assets/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
	<link href="{{ asset('conquer2/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="{{ asset('conquer2/assets/css/style-conquer.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/assets/css/style-responsive.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/assets/css/pages/tasks.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('conquer2/assets/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color" />
	<link href="{{ asset('conquer2/assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-header-fixed">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="index.html">
					<img src="{{ asset('conquer2/assets/img/logo.png') }}" alt="logo" />
				</a>
			</div>
			<form class="search-form search-form-header" role="form" action="index.html">
				<div class="input-icon right">
					<i class="icon-magnifier"></i>
					<input type="text" class="form-control input-sm" name="query" placeholder="Search...">
				</div>
			</form>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<img src="{{ asset('conquer2/assets/img/menu-toggler.png') }}" alt="" />
			</a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav pull-right">
				<li class="devider">
					&nbsp;
				</li>
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">{{ Auth::user()->name ?? "Menu" }}</span>
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							@guest
							<a href="{{ route('login') }}">
								<i class="fa fa-key"></i>Log In</a>
							@endguest
							@auth
							<a href="{{ route('logout') }}" onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
								<i class="fa fa-key"></i> Log Out</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
							@endauth
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<div class="clearfix">
	</div>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<!-- DOC: for circle icon style menu apply page-sidebar-menu-circle-icons class right after sidebar-toggler-wrapper -->
				<ul class="page-sidebar-menu">
					<li class="sidebar-toggler-wrapper">
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
						<div class="sidebar-toggler">
						</div>
						<div class="clearfix">
						</div>
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					</li>
					<li class="sidebar-search-wrapper">
						<form class="search-form" role="form" action="index.html" method="get">
							<div class="input-icon right">
								<i class="icon-magnifier"></i>
								<input type="text" class="form-control" name="query" placeholder="Search...">
							</div>
						</form>
					</li>
					<li class='{{ (request()->is("/")) ? "active" : ""}}'>
						<a href="{{ url('/') }}">
							<i class="icon-home"></i>
							<span class="title">Home</span>
							<span class="selected"></span>
						</a>
					</li>
					@auth
					<li class='{{ (request()->is("categories")) ? "active" : ""}}'>
						<a href="{{ route('categories.index') }}">
							<i class="icon-note"></i>
							<span class="title">Categories</span>
							<span class="selected"></span>
						</a>
					</li>
					<li class='{{ (request()->is("products")) ? "active" : ""}}'>
						<a href="{{ route('products.index') }}">
							<i class="icon-social-dropbox"></i>
							<span class="title">Products</span>
							<span class="selected"></span>
						</a>
					</li>
					<li class='{{ (request()->is("suppliers")) ? "active" : ""}}'>
						<a href="{{ route('suppliers.index') }}">
							<i class="icon-rocket"></i>
							<span class="title">Suppliers</span>
							<span class="selected"></span>
						</a>
					</li>
					<li class='{{ (request()->is("reports")) ? "active" : ""}}'>
						<a href="javascript:;">
							<i class="icon-doc"></i>
							<span class="title">Reports</span>
							<span class="arrow "></span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href='{{ route("reports.showCake", "roti") }}'>
									<i class="icon-anchor"></i>
									Show Cake with Category Roti</a>
							</li>
							<li>
								<a href="{{ route('reports.totalProductPerCategory') }}">
									<i class="icon-book-open"></i>
									Total Product Per Category</a>
							</li>
						</ul>
					</li>
					<li class='{{ (request()->is("transactions")) ? "active" : ""}}'>
						<a href="{{ route('transactions.index') }}">
							<i class="icon-basket-loaded"></i>
							<span class="title">Transactions</span>
							<span class="selected"></span>
						</a>
					</li>
				</ul>
				@endauth
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<!--  -->
			@yield('content')
			<!--  -->
		</div>
		<!-- END CONTENT -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Conquer by keenthemes.
		</div>
		<div class="footer-tools">
			<span class="go-top">
				<i class="fa fa-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	@yield('ajax')
	<!-- BEGIN CORE PLUGINS -->
	<script src="{{ asset('conquer2/assets/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="{{ asset('conquer2/assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script> lorem100
	<script src="{{ asset('conquer2/assets/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jquery.peity.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jquery-knob/js/jquery.knob.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/flot/jquery.flot.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/bootstrap-daterangepicker/moment.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/gritter/js/jquery.gritter.js') }}" type="text/javascript"></script>
	<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
	<script src="{{ asset('conquer2/assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="{{ asset('conquer2/assets/scripts/app.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/scripts/index.js') }}" type="text/javascript"></script>
	<script src="{{ asset('conquer2/assets/scripts/tasks.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/jquery.editable.min.js') }}" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {
			App.init(); // initlayout and core plugins
			Index.init();
			Index.initJQVMAP(); // init index page's custom scripts
			Index.initCalendar(); // init index page's custom scripts
			Index.initCharts(); // init index page's custom scripts
			Index.initChat();
			Index.initMiniCharts();
			Index.initPeityElements();
			Index.initKnowElements();
			Index.initDashboardDaterange();
			Tasks.initDashboardWidget();
		});
	</script>
	@yield('initialscript')
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>