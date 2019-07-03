<?php
/**
 * EForm Gutenberg Block bootstrapping
 *
 * @package EForm
 * @subpackage Gutenberg
 */
namespace EFormV4\Core;

class Bootstrap {
	public static function get_blocks() {
		return [
			// Forms
			"\\EFormV4\\Blocks\\Form\\Embed",
			"\\EFormV4\\Blocks\\Form\\Popup",
			// Reports
			"\\EFormV4\\Blocks\\Report\\Trends",

		];
	}

	public static function enqueue_block_assets() {
		// prepare all forms
		$all_forms = \IPT_FSQM_Form_Elements_Static::get_forms_for_select_with_count();

		\wp_enqueue_script(
			'eform-gutenberg-blocks',
			plugins_url( 'gutenberg/dist/eform-gutenberg.js', \IPT_FSQM_Loader::$abs_file ),
			[ 'wp-blocks', 'wp-element', 'wp-components', 'wp-i18n', 'wp-editor' ],
			\IPT_FSQM_Loader::$version
		);
		// Also gutenberg localization
		if ( \function_exists( 'gutenberg_get_jed_locale_data' ) ) {
			$locale = \gutenberg_get_jed_locale_data( 'ipt_fsqm' );
			$content = 'wp.i18n.setLocaleData( ' . \json_encode( $locale ) . ', "ipt_fsqm" );';
			\wp_script_add_data( 'eform-gutenberg-blocks', 'data', $content );
		}
		// Pass in some data
		\wp_localize_script( 'eform-gutenberg-blocks', 'eFormGTB', [
			'forms' => $all_forms,
			'i18n' => [
				'embedEForm' => __( 'Embed eForm', 'ipt_fsqm' ),
				'selectForm' => __( 'Select Form', 'ipt_fsqm' ),
				'selectFormOption' => __( '--please select a form--', 'ipt_fsqm' ),
			],
		] );

		// Enqueue style
		\wp_enqueue_style(
			'eform-gutenberg-blocks',
			plugins_url( 'gutenberg/dist/eform-gutenberg-style.css', \IPT_FSQM_Loader::$abs_file ),
			[],
			\IPT_FSQM_Loader::$version
		);
	}

	public static function register() {
		$eform_blocks = self::get_blocks();
		foreach ( $eform_blocks as $block ) {
			( new $block() )->register();
		}
	}

	public static function extend_gutenberg_categories( $categories, $post ) {
		$categories = array_merge(
			$categories,
			[
				[
					'slug' => 'eform-v4',
					'title' => __( 'eForm', 'ipt_fsqm' ),
				],
			]
		);
		return $categories;
	}

	public static function init() {
		add_action( 'init', [ __CLASS__, 'register' ] );
		add_action( 'enqueue_block_editor_assets', [ __CLASS__, 'enqueue_block_assets' ] );
		add_filter( 'block_categories', [ __CLASS__, 'extend_gutenberg_categories' ], 10, 2 );
	}
}
