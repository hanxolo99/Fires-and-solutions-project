<?php
$config = vigil_kirki_config();

VIGIL_Kirki::add_section( 'dt_custom_js_section', array(
	'title' => __( 'Additional JS', 'vigil' ),
	'priority' => 210
) );

	# custom-js
	VIGIL_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'enable-custom-js',
		'section'  => 'dt_custom_js_section',
		'label'    => __( 'Enable Custom JS?', 'vigil' ),
		'default'  => vigil_defaults('enable-custom-js'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'vigil' ),
			'off' => esc_attr__( 'No', 'vigil' )
		)		
	));

	# custom-js
	VIGIL_Kirki::add_field( $config, array(
		'type'     => 'code',
		'settings' => 'custom-js',
		'section'  => 'dt_custom_js_section',
		'transport' => 'postMessage',
		'label'    => __( 'Add Custom JS', 'vigil' ),
		'choices'     => array(
			'language' => 'javascript',
			'theme'    => 'dark',
		),
		'active_callback' => array(
			array( 'setting' => 'enable-custom-js' , 'operator' => '==', 'value' =>'1')
		)
	));