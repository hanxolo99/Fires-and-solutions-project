<?php
/**
 * Theme Functions
 *
 * @package DTtheme
 * @author DesignThemes
 * @link http://wedesignthemes.com
 */
define( 'VIGIL_THEME_DIR', get_template_directory() );
define( 'VIGIL_THEME_URI', get_template_directory_uri() );
define( 'VIGIL_CORE_PLUGIN', WP_PLUGIN_DIR.'/designthemes-core-features' );

if (function_exists ('wp_get_theme')) :
	$themeData = wp_get_theme();
	define( 'VIGIL_THEME_NAME', $themeData->get('Name'));
	define( 'VIGIL_THEME_VERSION', $themeData->get('Version'));
endif;

/* ---------------------------------------------------------------------------
 * Loads Kirki
 * ---------------------------------------------------------------------------*/
require_once( VIGIL_THEME_DIR .'/kirki/index.php' );

/* ---------------------------------------------------------------------------
 * Loads Codestar
 * ---------------------------------------------------------------------------*/
require_once VIGIL_THEME_DIR .'/cs-framework/cs-framework.php';

if( !defined( 'CS_ACTIVE_TAXONOMY' ) ) { define( 'CS_ACTIVE_TAXONOMY',   false ); }
define( 'CS_ACTIVE_SHORTCODE',  false );
define( 'CS_ACTIVE_CUSTOMIZE',  false );

/* ---------------------------------------------------------------------------
 * Create function to get theme options
 * --------------------------------------------------------------------------- */
function vigil_cs_get_option($key, $value = '') {

	$v = cs_get_option( $key );

	if ( !empty( $v ) ) {
		return $v;
	} else {
		return $value;
	}
}

/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * ---------------------------------------------------------------------------*/ 
define( 'VIGIL_LANG_DIR', VIGIL_THEME_DIR. '/languages' );
load_theme_textdomain( 'vigil', VIGIL_LANG_DIR );

/* ---------------------------------------------------------------------------
 * Loads the Admin Panel Style
 * ---------------------------------------------------------------------------*/
function vigil_admin_scripts() {
	wp_enqueue_style('vigil-admin', VIGIL_THEME_URI .'/cs-framework-override/style.css');
}
add_action( 'admin_enqueue_scripts', 'vigil_admin_scripts' );

/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * ---------------------------------------------------------------------------*/

// Functions --------------------------------------------------------------------
require_once( VIGIL_THEME_DIR .'/framework/register-functions.php' );
require_once( VIGIL_THEME_DIR .'/framework/utils.php' );

// Header -----------------------------------------------------------------------
require_once( VIGIL_THEME_DIR .'/framework/register-head.php' );

// Menu -------------------------------------------------------------------------
require_once( VIGIL_THEME_DIR .'/framework/register-menu.php' );
require_once( VIGIL_THEME_DIR .'/framework/register-mega-menu.php' );

// Hooks ------------------------------------------------------------------------
require_once( VIGIL_THEME_DIR .'/framework/register-hooks.php' );

// Likes ------------------------------------------------------------------------
require_once( VIGIL_THEME_DIR .'/framework/register-likes.php' );

// Post Functions ---------------------------------------------------------------
require_once( VIGIL_THEME_DIR .'/framework/register-post-functions.php' );
new vigil_post_functions;

// Widgets ----------------------------------------------------------------------
add_action( 'widgets_init', 'vigil_widgets_init' );
function vigil_widgets_init() {
	require_once( VIGIL_THEME_DIR .'/framework/register-widgets.php' );

	if(class_exists('DTCorePlugin')) {
		register_widget('VIGIL_Twitter');
	}

	register_widget('VIGIL_Flickr');
	register_widget('VIGIL_Recent_Posts');
	register_widget('VIGIL_Portfolio_Widget');
}
if(class_exists('DTCorePlugin')) {
	require_once( VIGIL_THEME_DIR .'/framework/widgets/widget-twitter.php' );
}
require_once( VIGIL_THEME_DIR .'/framework/widgets/widget-flickr.php' );
require_once( VIGIL_THEME_DIR .'/framework/widgets/widget-recent-posts.php' );
require_once( VIGIL_THEME_DIR .'/framework/widgets/widget-recent-portfolios.php' );

// Plugins ---------------------------------------------------------------------- 
require_once( VIGIL_THEME_DIR .'/framework/register-plugins.php' );

// WooCommerce ------------------------------------------------------------------
if( function_exists( 'is_woocommerce' ) ){
	require_once( VIGIL_THEME_DIR .'/framework/register-woocommerce.php' );
}

// WP Store Locator -------------------------------------------------------------
if( vigil_is_plugin_active( 'wp-store-locator/wp-store-locator.php' ) ){
	require_once( VIGIL_THEME_DIR .'/framework/register-storelocator.php' );
} 

// Privacy & Cookies ------------------------------------------------------------
require_once( VIGIL_THEME_DIR .'/framework/register-privacy.php' );

// Gutenberg ---------------------------------------------------------------------- 
if ( function_exists( 'gutenberg_init' ) ) {
	require_once( VIGIL_THEME_DIR .'/gutenberg/gutenberg.php' );
}?>