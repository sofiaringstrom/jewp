<?php

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
add_theme_support('post-thumbnails');

/**
 * Add stylsheets and scripts
 *
 * @since 1.0.0
 */
function enqueue_theme_style() {

	wp_enqueue_style( 'foundation-min-style', get_template_directory_uri() . '/css/foundation.min.css' );

	wp_enqueue_style( 'theme-stylesheet', get_template_directory_uri() . '/style.css' );

	wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', false, NULL, true );
  wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'foundation-min-js', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), true );

}
/**
 * Enqueue scripts.
 *
 * See: http://codex.wordpress.org/Function_Reference/wp_enqueue_script
 */
add_action( 'wp_enqueue_scripts', 'enqueue_theme_style' );

/**
 * Register the menus used in the theme.
 *
 * @since 1.0.0
 */
function theme_setup() {
	register_nav_menus( array(
		'main_menu' => __('Main Menu', 'je_theme')
	) );
}
/**
 * Add theme menus
 *
 * See: http://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
 */
add_action( 'after_setup_theme', 'theme_setup' );

?>