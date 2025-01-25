<?php


add_action( 'wp_enqueue_scripts', 'theme_load_scripts' );
function theme_load_scripts() {


	wp_enqueue_script( 'vuejs', 'https://unpkg.com/vue@3/dist/vue.global.js', array(), _THEME_VERSION, true );

	wp_enqueue_script( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js', array(), _THEME_VERSION, true );
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js', array(), _THEME_VERSION, true );
	wp_enqueue_script( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js', array(), _THEME_VERSION, true );
	wp_enqueue_script( 'anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js', array(), _THEME_VERSION, true );
	wp_enqueue_script( 'simplebar', 'https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.3.0/simplebar.min.js', array(), _THEME_VERSION, true );

	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/dist/js/main.js', array(), _THEME_VERSION, true );


}


