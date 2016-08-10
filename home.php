<?php
/**
 * The template for blog
 *
 * @package rngstrm
 * @subpackage JE Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>
<article id="blog-template">

	<section>
		<div class="row">
			<div class="column small-12">
				<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							//the_title();
							//the_content();
							the_post_thumbnail();
						}
					}
				?>
			</div>
		</div>

	</section>

</article>

<?php get_footer(); ?>