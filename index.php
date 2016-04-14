<?php
/**
*	The template for index
*
* @package rngstrm
* @subpackage JE Theme
* @since 1.0.0
*/
?>

<?php get_header(); ?>

<h1><?php echo bloginfo( 'name' ); ?></h1>
<h2>index.php</h2>
<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_title();
			the_post();
		}
	}
?>

<?php get_footer(); ?>