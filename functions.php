<?php

// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'invest_name_styles');
add_action('wp_footer', 'invest_name_styles_footer');
add_action('wp_enqueue_scripts', 'powerange');
add_action( 'wp_enqueue_scripts', 'jquery_lib' );

function jquery_lib(){
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.12.4.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.js', array('jquery'), null, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
   
}

function invest_name_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css' );
	
}

function invest_name_styles_footer() {
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css' );
}

function styleAbout() {
	if (is_page(19)) {
		wp_enqueue_style( 'about', get_template_directory_uri() . '/assets/sass/about.css' );
	}
}

function powerange() {
	if (is_page(17)) {
		wp_enqueue_style( 'powerange-css', get_template_directory_uri() . '/assets/css/powerange.min.css' );
		  wp_enqueue_script( 'powerange-js', get_template_directory_uri() . '/assets/js/powerange.min.js', array('jquery'), null, true);
		   wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/calculator.js', array('jquery'), null, true);
	}
}


add_action('wp_enqueue_scripts', 'styleAbout');

add_theme_support('custom-logo');

add_theme_support('post-thumbnails'); // Картинки для постов, страниц

add_image_size( 'object-preview', 371, 141, true );
add_image_size( 'directions-preview', 170, 160, true );
add_image_size( 'sidebar-preview', 350, 200, true );