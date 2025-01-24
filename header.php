<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/mix-manifest.json">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="site-app" class="site-wrapper">

	<header>
		<?php

		echo 'header';

		?>
	</header>