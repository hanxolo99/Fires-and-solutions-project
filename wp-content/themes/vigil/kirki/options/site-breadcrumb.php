<?php
$config = vigil_kirki_config();

# Breadcrumb Settings
VIGIL_Kirki::add_section( 'dt_site_breadcrumb_section', array(
	'title' => __( 'Breadcrumb', 'vigil' ),
	'priority' => 24,	
) );

# Breadcrumb Typography

	# customize-breadcrumb-title-typo
	VIGIL_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-breadcrumb-title-typo',
		'label'    => __( 'Customize Title ?', 'vigil' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => vigil_defaults('customize-breadcrumb-title-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'vigil' ),
			'off' => esc_attr__( 'No', 'vigil' )
		)			
	));
	
	# breadcrumb-title-typo
	VIGIL_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'breadcrumb-title-typo',
		'label'    => __( 'Title Typography', 'vigil' ),
		'section'  => 'dt_site_breadcrumb_section',
		'output' => array(
			array( 'element' => '.main-title-section h1, h1.simple-title' )
		),
		'default' => vigil_defaults( 'breadcrumb-title-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),		
		'active_callback' => array(
			array( 'setting' => 'customize-breadcrumb-title-typo', 'operator' => '==', 'value' => '1' )
		)		
	));		
	
	# customize-breadcrumb-typo
	VIGIL_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-breadcrumb-typo',
		'label'    => __( 'Customize Link ?', 'vigil' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => vigil_defaults('customize-breadcrumb-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'vigil' ),
			'off' => esc_attr__( 'No', 'vigil' )
		)			
	));
	
	# breadcrumb-typo
	VIGIL_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'breadcrumb-typo',
		'label'    => __( 'Link Typography', 'vigil' ),
		'section'  => 'dt_site_breadcrumb_section',
		'output' => array(
			array( 'element' => 'div.breadcrumb a' )
		),
		'default' => vigil_defaults( 'breadcrumb-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),
		'active_callback' => array(
			array( 'setting' => 'customize-breadcrumb-typo', 'operator' => '==', 'value' => '1' )
		)		
	));