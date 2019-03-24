<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- <link rel="icon" href="./favicon.ico"> -->

		<title>Сайт</title>
		<!-- Bootstrap core CSS -->
		<!-- Fonts Google Roboto -->
		<link href="https://fonts.googleapis.com/css?family=Hanalei+Fill|Kirang+Haerang|Oswald|Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">

		<!-- Slick Slider -->
		<!-- Custom styles for this template -->
        
        <?php wp_head(); ?>

	</head>

	<body>
	<div class="container">
		<div class="top-nav">
			<div class="row justify-content-between align-items-center">
				<div class="col-xl-auto ">
					<div class="logo">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<!-- /.col-md -->
				<div class="col-xl-auto">
					<div class="top-nav_btn">
						<i class="icon-menu"></i>
					</div>
					<?php
					wp_nav_menu( [ 
						'menu'			  => 'top_menu',
						'container'       => 'ul', 
						'menu_class'      => 'top-nav_menu', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
					
					?>
				</div>
				<!-- /.col-md -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.top-nav -->