<!--
    Item Name: Luxurious - Hotel Booking HTML Template + Admin Dashboard.
    Author: ashishmaraviya
    Version: 2.2.0
    Copyright 2024
	Author URI: https://themeforest.net/user/ashishmaraviya
-->
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/luxurious-html-v22/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Feb 2024 13:00:58 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Best Luxurious Hotel Booking Template.">
    <meta name="keywords"
        content="hotel, booking, business, restaurant, spa, resort, landing, agency, corporate, start up, site design, new business site, business template, professional template, classic, modern">
    <meta name="author" content="ashishmaraviya">

	<title>Luxurious - Hotel Booking HTML Template + Admin Dashboard</title>

	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/img/favicon/favicon.ico">

	<!-- Icon CSS -->
	<link href="assets/css/vendor/materialdesignicons.min.css" rel="stylesheet">
	<link href="assets/css/vendor/remixicon.css" rel="stylesheet">

	<!-- Vendor -->
	<link href='assets/css/vendor/datatables.bootstrap5.min.css' rel='stylesheet'>
	<link href='assets/css/vendor/responsive.datatables.min.css' rel='stylesheet'>
	<link href='assets/css/vendor/daterangepicker.css' rel='stylesheet'>
	<link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/vendor/apexcharts.css" rel="stylesheet">
	<link href="assets/css/vendor/simplebar.css" rel="stylesheet">
	<link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet">

	<!-- Main CSS -->
	<link id="mainCss" href="assets/css/style.css" rel="stylesheet">
</head>

<body data-lh-mode="light">
	<main class="wrapper sb-default">
		<!-- Loader -->
		<div class="lh-loader">
			<span class="loader"></span>
		</div>

		<!-- Header -->
		<header class="lh-header">
			<div class="container-fluid">
				<div class="lh-header-items">
					<div class="left-header">
						<a href="javascript:void(0)" class="lh-toggle-sidebar">
							<span class="outer-ring">
								<span class="inner-ring"></span>
							</span>
						</a>
						<div class="header-search-box">
							<div class="header-search-drop">
								<a href="javascript:void(0)" class="open-search"><i class="ri-search-line"></i></a>
								<form class="lh-search">
									<input class="search-input" type="text" placeholder="Search...">
									<a href="javascript:void(0)" class="search-btn"><i class="ri-search-line"></i>
									</a>
								</form>
							</div>
						</div>
					</div>
					<div class="right-header">
						<div class="lh-right-tool lh-flag-drop language">
							<div class="lh-hover-drop">
								<div class="lh-hover-tool">
									<img class="flag" src="assets/img/flag/us.png" alt="flag">
								</div>
								<div class="lh-hover-drop-panel right">
									<ul>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/us.png"
													alt="flag">English</a></li>
										<li><a href="javascript:void(0)"><img class="flag" src="assets/img/flag/in.png"
													alt="flag">Hindi</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="lh-right-tool apps">
							<div class="lh-hover-drop">
								<div class="lh-hover-tool">
									<i class="ri-apps-2-line"></i>
								</div>
								<div class="lh-hover-drop-panel right apps">
									<h6 class="title">Apps</h6>
									<ul>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/1.png"
													alt="flag">Github</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/2.png"
													alt="flag">Dribbble</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/3.png"
													alt="flag">Dropbox</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/4.png"
													alt="flag">Figma</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/5.png"
													alt="flag">Meta</a></li>
										<li><a href="javascript:void(0)"><img class="app" src="assets/img/apps/6.png"
													alt="flag">Adsense</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="lh-right-tool display-screen">
							<a class="lh-screen full" href="javascript:void(0)"><i class="ri-fullscreen-line"></i></a>
							<a class="lh-screen reset" href="javascript:void(0)"><i
									class="ri-fullscreen-exit-line"></i></a>
						</div>
						<div class="lh-right-tool">
							<a class="lh-notify" href="javascript:void(0)">
								<i class="ri-notification-2-line"></i>
								<span class="label"></span>
							</a>
						</div>
						<div class="lh-right-tool display-dark">
							<a class="lh-mode dark" href="javascript:void(0)"><i class="ri-moon-clear-line"></i></a>
							<a class="lh-mode light" href="javascript:void(0)"><i class="ri-sun-line"></i></a>
						</div>
						<div class="lh-right-tool lh-user-drop">
							<div class="lh-hover-drop">
								<div class="lh-hover-tool">
									<img class="user" src="assets/img/user/1.jpg" alt="user">
								</div>
								<div class="lh-hover-drop-panel right">
									<div class="details">
										<h6>Moris Waites</h6>
										<p>moris@example.com</p>
									</div>
									<ul class="border-top">
										<li><a href="team-profile.html">Profile</a></li>
										<li><a href="#">Help</a></li>
										<li><a href="#">Messages</a></li>
										<li><a href="team-update.html">Settings</a></li>
									</ul>
									<ul class="border-top">
										<li><a href="signin.html"><i class="ri-logout-circle-r-line"></i>Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>