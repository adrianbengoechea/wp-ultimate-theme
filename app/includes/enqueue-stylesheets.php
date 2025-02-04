<?php

add_action( 'wp_enqueue_scripts', 'theme_load_stylesheet' );
function theme_load_stylesheet() {
	
	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css', array(), _THEME_VERSION );	

	wp_enqueue_style( 'app', get_stylesheet_directory_uri() . '/dist/css/app.css', array(), _THEME_VERSION );

}