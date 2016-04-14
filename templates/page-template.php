<?php
/**
 * Template Name: Sample template for pages
 *
 * @package rngstrm
 * @subpackage JE Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<h2>This is a sample template :)</h2>

<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_title();
			the_post();
		}
	}
?>

<?php get_footer(); ?>