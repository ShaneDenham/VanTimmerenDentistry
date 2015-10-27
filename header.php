<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    		<meta name="theme-color" content="#121212">
	    	<?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<div id="container">
					<header class="header" role="banner">

						 <!-- This navs will be applied to the topbar, above all content
							  To see additional nav styles, visit the /parts directory -->
						 <?php get_template_part( 'parts/nav', 'top-offcanvas' ); ?>

					</header> <!-- end .header -->

					<?php if(is_front_page()) : ?>
						<div class="static-image" style="display: block; width:100%; height:500px; background-image: url('<?php echo get_stylesheet_directory_uri() ?>/images/top-static-image-home.jpg'); position: relative;">
							<div class="overlay"></div>
							<div id="content">
								<div class="row">
									<div class="small-12 columns text-center hero-text">

										<h2>A Dental Home<br><strong>For Your Family</strong></h2>
										<h3>We Are Dedicated To Your Health</h3>
										<p>Call Us! 616.538.1050</p>
										<a href="#" class="button hero-btn">Contact Us</a>

									</div>
								</div>
							</div>
						</div>
					<?php endif ?>
