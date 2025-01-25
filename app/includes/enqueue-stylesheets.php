<?php

add_action( 'wp_enqueue_scripts', 'theme_load_stylesheet' );
function theme_load_stylesheet() {


	wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), _THEME_VERSION );	

	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css', array(), _THEME_VERSION );	
	wp_enqueue_style( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css', array(), _THEME_VERSION );	
	wp_enqueue_style( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css', array(), _THEME_VERSION );	
	wp_enqueue_style( 'simplebar', 'https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.3.0/simplebar.min.css', array(), _THEME_VERSION );	

	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/dist/css/main.css', array(), _THEME_VERSION );


}