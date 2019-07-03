<?php
/**
* Add support for Gutenberg.
*
* @link https://wordpress.org/gutenberg/handbook/reference/theme-support/
*/

if(!function_exists('dttheme_gutenberg_supported_features')){

	function dttheme_gutenberg_supported_features() {
		// Theme supports wide images, galleries and videos.
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );	
	}
}
add_action( 'after_setup_theme', 'dttheme_gutenberg_supported_features' );

/**
 * Enqueue editor styles for Gutenberg
 */

if(!function_exists('dttheme_backend_editor_styles')){

	function dttheme_backend_editor_styles() {
		wp_enqueue_style( 'dttheme-googleapis', '//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i', array(), null );
		wp_enqueue_style( 'dttheme-editor-style', get_template_directory_uri() . '/gutenberg/backend.css' );
	}
}
add_action( 'enqueue_block_editor_assets', 'dttheme_backend_editor_styles' );

if(!function_exists('dttheme_frontend_enqueue_styles')){

	function dttheme_frontend_enqueue_styles() {
		wp_enqueue_style( 'dttheme-frontend-styles', get_template_directory_uri() . '/gutenberg/frontend.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'dttheme_frontend_enqueue_styles' );