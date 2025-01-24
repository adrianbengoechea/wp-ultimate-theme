<?php

define( '_THEME_VERSION', time() );
define( '_THEME_NAME', 'project-name' );

define( '_PATH', dirname(__FILE__));
define( '_URI', home_url(str_replace(ABSPATH, '', _PATH) ) );

define( '_DIST_PATH', _PATH . '/dist' );
define( '_DIST_URI', _URI . '/dist' );

define( '_SRC_PATH', _PATH . '/src' );
define( '_SRC_URI', _URI . '/src' );

define( '_STYLESHEET_URI', get_stylesheet_directory_uri() );