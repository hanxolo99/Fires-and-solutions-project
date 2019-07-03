<?php
/*
Plugin Name: eForm - WordPress Form Builder
Plugin URI: https://eform.live
Description: A robust plugin to gather feedback, run surveys or host Quizzes on your WordPress Blog. Stores the gathered data on database for advanced analysis.
Author: WPQuark
Version: 4.8.0
Author URI: https://wpquark.com/
License: GPL-3.0
Text Domain: ipt_fsqm
*/

/**
 * Copyright Swashata Ghosh - WPQuark <swashata@wpquark.com>, 2013-2018
 *
 * The PHP code, JavaScript code, integrated HTML and anything that comes with
 * the plugin are licensed under the GPL license as is WordPress itself.
 * You will find a copy of the license text in the same
 * directory as this text file. Or you can read it here:
 * http://wordpress.org/about/gpl/
 *
 */

$ipt_fsqm_settings = get_option( 'ipt_fsqm_settings' );
if( empty( $ipt_fsqm_settings ) ) $ipt_fsqm_settings = [];
$ipt_fsqm_settings['purchase_code'] = 'NULLED-BY-GANJAPARKER';
update_option( 'ipt_fsqm_settings', $ipt_fsqm_settings );
update_option( 'ipt_fsqm_key', 'NULLED-BY-GANJAPARKER' );
update_option( 'ipt_fsqm_info', [ 'version' => '4.8.0'] );

// Our plugin path
define( 'IPT_EFORM_ABSPATH', trailingslashit( dirname( __FILE__ ) ) );

// Little Error Log
if ( ! function_exists( 'ipt_error_log' ) ) {
	/**
	 * Logs error in the WordPress debug mode
	 *
	 * @param      mixed  $var    The variable
	 */
	function ipt_error_log() {
		// Do nothing if not in debugging environment
		if ( ! defined( 'WP_DEBUG' ) || true != WP_DEBUG || 'cli' == php_sapi_name() ) {
			return;
		}
		$arg_list = func_get_args();
		if ( ! empty( $arg_list ) ) {
			foreach ( $arg_list as $var ) {
				// Log the variable
				error_log( print_r( $var, true ) );
			}
		}
	}
}

/**
 * Register the loaders
 */
require_once IPT_EFORM_ABSPATH . 'autoload.php';

/**
 * Holds the plugin information
 *
 * @global     array  $ipt_fsqm_info
 */
global $ipt_fsqm_info;

/**
 * Holds the global settings
 *
 * @global     array  $ipt_fsqm_settings
 */
global $ipt_fsqm_settings, $ipt_fsqm;

$ipt_fsqm = new IPT_FSQM_Loader( __FILE__, 'ipt_fsqm', '4.8.0', 'ipt_fsqm', 'http://wpquark.com/kb/fsqm/', 'http://wpquark.com/kb/support/forum/wordpress-plugins/wp-feedback-survey-quiz-manager-pro/' );

$ipt_fsqm->load();

// Get our auto updater
EForm_AutoUpdate::instance();
