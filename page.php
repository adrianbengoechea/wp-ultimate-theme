<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xyxproject_namxyx
 */

get_header();

?>

<main role="main">

  <h1 class="text-3xl font-bold underline">{{title}}</h1>
              
  <test></test>

  <!-- <counter></counter> -->

  <posts-display-and-filtering>

  <modal></modal>


<?php get_template_part( 'partials/content', 'page' ); ?>

</main>

<?php

get_sidebar();
get_footer();
