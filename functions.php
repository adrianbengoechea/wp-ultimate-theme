<?php
/**
 * project-name functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package project-name
 */

# REQUIRED INCLUDES
require "app/includes/constants.php";

require "app/includes/api-rest.php";

require "app/includes/acf-content-helpers.php";
require "app/includes/acf-json.php";

require "app/includes/register-nav-menus.php";
require "app/includes/register-post-types.php";
require "app/includes/register-taxonomies.php";

require "app/includes/disable-admin-bar.php";
require "app/includes/svg-support.php";
require "app/includes/template-functions.php";

require "app/includes/regular-content-helpers.php";

require "app/includes/theme-setup.php";
require "app/includes/theme-settings.php";
require "app/includes/theme-defaults.php";

require "app/includes/enqueue-scripts.php";
require "app/includes/enqueue-stylesheets.php";


