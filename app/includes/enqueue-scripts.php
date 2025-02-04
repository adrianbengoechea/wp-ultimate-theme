<?php


add_action( 'wp_enqueue_scripts', 'theme_load_scripts' );
function theme_load_scripts() {

	wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/dist/js/app.js', array(), _THEME_VERSION, true );
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/dist/js/main.js', array(), _THEME_VERSION, true );

}


