<?php
/**
 * Embed Form with Gutenberg
 */

namespace EFormV4\Blocks\Form;
use EFormV4\Blocks\Base;

class Embed extends Base {
	public function get_block_name() {
		return 'embed-form';
	}

	public function get_block_config() {
		return [
			'attributes' => [
				'formId' => [
					'type' => 'string',
					'default' => '',
				],
			],
			'render_callback' => [ $this, 'render' ],
		];
	}

	public function render( $attributes, $content ) {
		return \IPT_EForm_Core_Shortcodes::ipt_fsqm_form_cb([
			'id' => $attributes['formId'],
		]);
	}
}
