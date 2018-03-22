<?php
/**
 * Theme functionality file
 *
 * @package hikari
 */

if ( ! function_exists( 'hikari_enqueue_scripts_styles' ) ) {
	/**
	 * Enqueue scripts and styles
	 */
	function hikari_enqueue_scripts_styles() {
		// Enqueue the reset stylesheet.
		wp_enqueue_style( 'hikari-reset', get_template_directory_uri() . '/assets/css/reset.css' );

		// Enqueue main styles.css.
		wp_enqueue_style( 'hikari-styles', get_stylesheet_uri() );
	}
	add_action( 'wp_enqueue_scripts', 'hikari_enqueue_scripts_styles' );

	/**
	 * Register and enqueue fonts
	 */
	function hikari_enqueue_fonts() {
		// Enqueue google fonts.
		wp_enqueue_style( 'permanent-marker', 'https://fonts.googleapis.com/css?family=Permanent+Marker' );
		wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto' );
	}
	add_action( 'wp_enqueue_scripts', 'hikari_enqueue_fonts' );
}
