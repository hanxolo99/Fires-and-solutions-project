<?php
/**
 * Gutenberg block system basic architecture
 *
 * @package EForm
 * @subpackage Blocks
 */
namespace EFormV4\Blocks;

abstract class Base {
	/**
	 * Get block name
	 *
	 * @return string
	 */
	abstract public function get_block_name();

	/**
	 * Get block config.
	 *
	 * This is passed directly to register_block_type
	 *
	 * @return array Associative array of block config.
	 */
	abstract public function get_block_config();

	/**
	 * Register block scripts with WordPress core API.
	 *
	 * @return void
	 */
	public function register_block_scripts() {
		\wp_register_script(
			'eform-gutenberg-blocks',
			plugins_url( 'gutenberg/dist/eform-gutenberg.js', \IPT_FSQM_Loader::$abs_file ),
			[ 'wp-blocks', 'wp-element', 'wp-component', 'wp-i18n', 'wp-editor' ],
			\IPT_FSQM_Loader::$version
		);
	}

	/**
	 * Register the block to WordPress Backend
	 *
	 * @return void
	 */
	public function register() {
		// $this->register_block_scripts();
		$block_config = array_merge( $this->get_block_config(), [
			'editor_script' => 'eform-gutenberg-blocks'
		] );
		\register_block_type( 'eformv4/' . $this->get_block_name(), $block_config );
	}
}

// // Register multiple blocks
// // With same registered script
// function pfx_register_blocks() {
// 	wp_register_script(
// 		'pfx-gutenberg-blocks',
// 		plugins_url( /**/ ),
// 		[ 'wp-blocks', 'wp-element', 'wp-component', 'wp-i18n' ],
// 		'1.0.0.alpha.1'
// 	);
// 	register_block_type( 'pfx/block-01', [
// 		'render_callback' => 'some_callable',
// 		'editor_script' => 'pfx-gutenberg-blocks',
// 	] );
// 	register_block_type( 'pfx/block-02', [
// 		'render_callback' => 'some_callable_02',
// 		'editor_script' => 'pfx-gutenberg-blocks',
// 	] );
// }
// add_action( 'init', 'pfx_register_blocks' );

// // Enqueue script once
// function pfx_enqueue_block_asset() {
// 	wp_enqueue_script(
// 		'pfx-gutenberg-blocks',
// 		plugins_url( /**/ ),
// 		[ 'wp-blocks', 'wp-element', 'wp-component', 'wp-i18n' ],
// 		'1.0.0.alpha.1'
// 	);
// }
// add_action( 'enqueue_block_editor_assets', 'pfx_enqueue_block_asset' );
// // Call register_block_type
// function pfx_register_blocks() {
// 	register_block_type( 'pfx/block-01', [
// 		'render_callback' => 'some_callable',
// 	] );
// 	register_block_type( 'pfx/block-02', [
// 		'render_callback' => 'some_callable_02',
// 	] );
// }
// add_action( 'init', 'pfx_register_blocks' );
