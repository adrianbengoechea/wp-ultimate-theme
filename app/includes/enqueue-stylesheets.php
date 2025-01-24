<?php

add_action( 'wp_enqueue_scripts', 'theme_load_stylesheet' );
function theme_load_stylesheet() {


	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/dist/css/main.css' );


}