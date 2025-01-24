<?php


add_action( 'wp_enqueue_scripts', 'theme_load_scripts' );
function theme_load_scripts() {


	// wp_enqueue_script( 'vuejs', 'https://unpkg.com/vue@3/dist/vue.global.js', array(), _THEME_VERSION, true );

	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/dist/js/main.js', array(), _THEME_VERSION, true );


}


