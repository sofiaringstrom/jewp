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
			</div>
		</div>
	</section>

	<section id="video-feed">
	</section>

	<div id="vimeo-overlay" class="hidden"></div>

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