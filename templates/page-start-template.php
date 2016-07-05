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
<article id="work-template">

	<section>
		<div class="row video-promoted">
			<div class="small-12 column flex-video">
				<video autoplay muted>
					<source src="<?php echo get_template_directory_uri(); ?>/media/showreel_2015-HD.mp4" type="video/mp4">
				</video>
			</div>
		</div>
	</section>

	<section id="video-feed">
		<!-- <div class="row">
			<div class="small-12 columns">
				<img class="video-feed" src="http://placehold.it/350x180">
				<img class="video-feed" src="http://placehold.it/350x180">
				<img class="video-feed" src="http://placehold.it/350x180">
			</div>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<img class="video-feed" src="http://placehold.it/350x180">
				<img class="video-feed" src="http://placehold.it/350x180">
				<img class="video-feed" src="http://placehold.it/350x180">
			</div>
		</div> -->
	</section>

	<?php
		/*if ( have_posts() ) {
			while ( have_posts() ) {
				the_title();
				the_post();
			}
		}*/
	?>

</article>

<?php get_footer(); ?>