<?php
/**
 * Template Name: Start Page
 *
 * @package rngstrm
 * @subpackage JE Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<h2>This is the start template</h2>

<div class="row">
	<div class="small-12 column flex-video">
		<video autoplay muted controls>
			<source src="<?php echo get_template_directory_uri(); ?>/media/showreel_2015-HD.mp4" type="video/mp4">
		</video>
	</div>
</div>

<?php
	/*if ( have_posts() ) {
		while ( have_posts() ) {
			the_title();
			the_post();
		}
	}*/
?>

<?php get_footer(); ?>