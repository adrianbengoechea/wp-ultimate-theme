<?php

add_action( 'after_setup_theme', 'theme_setup' );
function theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on xyxproject_namxyx, use a find and replace
		* to change 'xyxproject_namxyx' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( _THEME_NAME, get_template_directory() . '/languages' );

	// // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// /*
	// 	* Let WordPress manage the document title.
	// 	* By adding theme support, we declare that this theme does not use a
	// 	* hard-coded <title> tag in the document head, and expect WordPress to
	// 	* provide it for us.
	// 	*/
	add_theme_support( 'title-tag' );

	// /*
	// 	* Enable support for Post Thumbnails on posts and pages.
	// 	*
	// 	* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	// 	*/
	add_theme_support( 'post-thumbnails' );

	// // This theme uses wp_nav_menu() in one location.
	

	// /*
	// 	* Switch default core markup for search form, comment form, and comments
	// 	* to output valid HTML5.
	// 	*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'xyxproject_namxyx_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}