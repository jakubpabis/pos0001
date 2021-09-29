<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package postery
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;800&display=swap" rel="stylesheet">

	<!-- Libs CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Feather/feather.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/aos/dist/aos.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/choices.js/public/assets/styles/choices.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/flickity-fade/flickity-fade.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/flickity/dist/flickity.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/highlightjs/styles/vs2015.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/jarallax/dist/jarallax.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/quill/dist/quill.core.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.min.css">

</head>

<body <?php body_class('pt-10 pt-md-0'); ?> style="overflow: visible;">

	<!-- NAVBAR
    ================================================== -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white border-bottom px-4">
		<div class="container-fluid">

			<!-- Brand -->
			<a class="navbar-brand mb-2" href="/">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-h.svg" class="navbar-brand-img" alt="Postery.studio logo">
			</a>

			<!-- Toggler -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Collapse -->
			<div class="collapse navbar-collapse" id="navbarCollapse">

				<!-- Toggler -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fe fe-x"></i>
				</button>

				<!-- Navigation -->
				<ul class="navbar-nav ml-auto mr-7">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarLandings" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
							About
						</a>
						<div class="dropdown-menu dropdown-menu-xl p-0" aria-labelledby="navbarLandings">
							<div class="row no-gutters">
								<div class="col-12 col-lg-6">
									<div class="dropdown-img-left" style="background-image: url(./assets/img/photos/photo-3.jpg);">

										<!-- Heading -->
										<h4 class="font-weight-bold text-white mb-0">
											Want to see an overview?
										</h4>

										<!-- Text -->
										<p class="font-size-sm text-white">
											See all the pages at once.
										</p>

										<!-- Button -->
										<a href="./overview.html" class="btn btn-sm btn-white shadow-dark fonFt-size-sm">
											View all pages
										</a>

									</div>
								</div>
								<div class="col-12 col-lg-6">
									<div class="dropdown-body">
										<div class="row no-gutters">
											<div class="col-6">

												<!-- Heading -->
												<h6 class="dropdown-header">
													Services
												</h6>

												<!-- List -->
												<a class="dropdown-item" href="./coworking.html">
													Coworking
												</a>
												<a class="dropdown-item" href="./rental.html">
													Rental
												</a>
												<a class="dropdown-item mb-5" href="./job.html">
													Job Listing
												</a>

												<!-- Heading -->
												<h6 class="dropdown-header">
													Apps
												</h6>

												<!-- List -->
												<a class="dropdown-item" href="./desktop-app.html">
													Desktop
												</a>
												<a class="dropdown-item" href="./mobile-app.html">
													Mobile
												</a>

											</div>
											<div class="col-6">

												<!-- Heading -->
												<h6 class="dropdown-header">
													Web
												</h6>

												<!-- List -->
												<a class="dropdown-item" href="./index.html">
													Basic
												</a>
												<a class="dropdown-item" href="./startup.html">
													Startup
												</a>
												<a class="dropdown-item" href="./enterprise.html">
													Enterprise
												</a>
												<a class="dropdown-item" href="./service.html">
													Service
												</a>
												<a class="dropdown-item" href="./cloud.html">
													Cloud Hosting
												</a>
												<a class="dropdown-item" href="./agency.html">
													Agency
												</a>

											</div>
										</div> <!-- / .row -->
									</div>
								</div>
							</div> <!-- / .row -->
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarPages" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
							FAQ
						</a>
						<div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarPages">
							<div class="row no-gutters">
								<div class="col-6">
									<div class="row no-gutters">
										<div class="col-12 col-lg-6">

											<!-- Heading -->
											<h6 class="dropdown-header">
												Career
											</h6>

											<!-- List -->
											<a class="dropdown-item" href="./careers.html">
												Listing
											</a>
											<a class="dropdown-item mb-5" href="./career-single.html">
												Opening
											</a>

											<!-- Heading -->
											<h6 class="dropdown-header">
												Company
											</h6>

											<!-- List -->
											<a class="dropdown-item" href="./about.html">
												About
											</a>
											<a class="dropdown-item" href="./pricing.html">
												Pricing
											</a>
											<a class="dropdown-item mb-5 mb-lg-0" href="./terms-of-service.html">
												Terms
											</a>

										</div>
										<div class="col-12 col-lg-6">

											<!-- Heading -->
											<h6 class="dropdown-header">
												Help center
											</h6>

											<!-- List -->
											<a class="dropdown-item" href="./help-center.html">
												Overview
											</a>
											<a class="dropdown-item mb-5" href="./help-center-article.html">
												Article
											</a>

											<!-- Heading -->
											<h6 class="dropdown-header">
												Contact
											</h6>

											<!-- List -->
											<a class="dropdown-item" href="./contact.html">
												Basic
											</a>
											<a class="dropdown-item" href="./contact-alt.html">
												Cover
											</a>

										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="row no-gutters">
										<div class="col-12 col-lg-6">

											<!-- Heading -->
											<h6 class="dropdown-header">
												Blog
											</h6>

											<!-- List -->
											<a class="dropdown-item" href="./blog.html">
												Rich View
											</a>
											<a class="dropdown-item" href="./blog-post.html">
												Article
											</a>
											<a class="dropdown-item" href="./blog-showcase.html">
												Showcase
											</a>
											<a class="dropdown-item mb-5 mb-lg-0" href="./blog-search.html">
												Search
											</a>

										</div>
										<div class="col-12 col-lg-6">

											<!-- Heading -->
											<h6 class="dropdown-header">
												Portfolio
											</h6>

											<!-- List -->
											<a class="dropdown-item" href="./portfolio-masonry.html">
												Masonry
											</a>
											<a class="dropdown-item" href="./portfolio-grid-rows.html">
												Grid Rows
											</a>
											<a class="dropdown-item" href="./portfolio-parallax.html">
												Parallax
											</a>
											<a class="dropdown-item" href="./portfolio-case-study.html">
												Case Study
											</a>
											<a class="dropdown-item" href="./portfolio-sidebar.html">
												Sidebar
											</a>
											<a class="dropdown-item" href="./portfolio-sidebar-fluid.html">
												Sidebar: Fluid
											</a>
											<a class="dropdown-item" href="./portfolio-grid.html">
												Basic Grid
											</a>

										</div>
									</div>
								</div>
							</div>
						</div> <!-- / .row -->
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarAccount" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
							Contact
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarAccount">
							<li class="dropdown-item dropright">
								<a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
									Settings
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="./account-general.html">
										General
									</a>
									<a class="dropdown-item" href="./account-security.html">
										Security
									</a>
									<a class="dropdown-item" href="./account-notifications.html">
										Notifications
									</a>
									<a class="dropdown-item" href="./billing-plans-and-payment.html">
										Plans & Payment
									</a>
									<a class="dropdown-item" href="./billing-users.html">
										Users
									</a>
								</div>
							</li>
							<li class="dropdown-item dropright">
								<a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
									Sign In
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="./signin-cover.html">
										Side Cover
									</a>
									<a class="dropdown-item" href="./signin-illustration.html">
										Illustration
									</a>
									<a class="dropdown-item" href="./signin.html">
										Basic
									</a>
									<a class="dropdown-item" data-toggle="modal" href="#modalSigninHorizontal">
										Modal Horizontal
									</a>
									<a class="dropdown-item" data-toggle="modal" href="#modalSigninVertical">
										Modal Vertical
									</a>
								</div>
							</li>
							<li class="dropdown-item dropright">
								<a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
									Sign Up
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="./signup-cover.html">
										Side Cover
									</a>
									<a class="dropdown-item" href="./signup-illustration.html">
										Illustration
									</a>
									<a class="dropdown-item" href="./signup.html">
										Basic
									</a>
									<a class="dropdown-item" data-toggle="modal" href="#modalSignupHorizontal">
										Modal Horizontal
									</a>
									<a class="dropdown-item" data-toggle="modal" href="#modalSignupVertical">
										Modal Vertical
									</a>
								</div>
							</li>
							<li class="dropdown-item dropright">
								<a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
									Password Reset
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="./password-reset-cover.html">
										Side Cover
									</a>
									<a class="dropdown-item" href="./password-reset-illustration.html">
										Illustration
									</a>
									<a class="dropdown-item" href="./password-reset.html">
										Basic
									</a>
								</div>
							</li>
							<li class="dropdown-item dropright">
								<a class="dropdown-link dropdown-toggle" data-toggle="dropdown" href="#">
									Error
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="./error-cover.html">
										Side Cover
									</a>
									<a class="dropdown-item" href="./error-illustration.html">
										Illustration
									</a>
									<a class="dropdown-item" href="./error.html">
										Basic
									</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>

			</div>

			<!-- Button -->
			<a class="btn-cart btn btn-secondary btn-lg btn-rounded-circle lift ml-auto" href="/cart" target="_blank">
				<i class="fe fe-shopping-cart"></i>
			</a>

		</div>
	</nav>