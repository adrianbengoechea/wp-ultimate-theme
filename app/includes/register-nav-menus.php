<?php

add_action( 'after_setup_theme', 'register_theme_nav_menus' );
function register_theme_nav_menus(){
    
    register_nav_menus(
		array(
			'primary' => esc_html__( 'Header (Primary)', _THEME_NAME ),

			'primary_mobile' => esc_html__( 'Header (Mobile)', _THEME_NAME ),

			'footer_fist' => esc_html__( 'Footer #1', _THEME_NAME ),
			'footer_second' => esc_html__( 'Footer #2', _THEME_NAME ),
		)
	);

}