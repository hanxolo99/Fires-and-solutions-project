<?php
$config = vigil_kirki_config();

VIGIL_Kirki::add_section( 'dt_site_layout_section', array(
	'title' => __( 'Site Layout', 'vigil' ),
	'priority' => 20
) );

	# site-layout
	VIGIL_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'site-layout',
		'label'    => __( 'Site Layout', 'vigil' ),
		'section'  => 'dt_site_layout_section',
		'default'  => vigil_defaults('site-layout'),
		'choices' => array(
			'boxed' =>  VIGIL_THEME_URI.'/kirki/assets/images/site-layout/boxed.png',
			'wide' => VIGIL_THEME_URI.'/kirki/assets/images/site-layout/wide.png',
		)
	));

	# site-boxed-layout
	VIGIL_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-boxed-layout',
		'label'    => __( 'Customize Boxed Layout?', 'vigil' ),
		'section'  => 'dt_site_layout_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'vigil' ),
			'off' => esc_attr__( 'No', 'vigil' )
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
		)			
	));

	# body-bg-type
	VIGIL_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-type',
		'label'    => __( 'Background Type', 'vigil' ),
		'section'  => 'dt_site_layout_section',
		'multiple' => 1,
		'default'  => 'none',
		'choices'  => array(
			'pattern' => esc_attr__( 'Predefined Patterns', 'vigil' ),
			'upload' => esc_attr__( 'Set Pattern', 'vigil' ),
			'none' => esc_attr__( 'None', 'vigil' ),
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-pattern
	VIGIL_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'body-bg-pattern',
		'label'    => __( 'Predefined Patterns', 'vigil' ),
		'description'    => __( 'Add Background for body', 'vigil' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'choices' => array(
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg',
			VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg'=> VIGIL_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg',
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'pattern' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)						
	));

	# body-bg-image
	VIGIL_Kirki::add_field( $config, array(
		'type' => 'image',
		'settings' => 'body-bg-image',
		'label'    => __( 'Background Image', 'vigil' ),
		'description'    => __( 'Add Background Image for body', 'vigil' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'upload' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-position
	VIGIL_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-position',
		'label'    => __( 'Background Position', 'vigil' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-position' )
		),
		'default' => 'center',
		'multiple' => 1,
		'choices' => vigil_image_positions(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload') ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-repeat
	VIGIL_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-repeat',
		'label'    => __( 'Background Repeat', 'vigil' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-repeat' )
		),
		'default' => 'repeat',
		'multiple' => 1,
		'choices' => vigil_image_repeats(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload' ) ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));	