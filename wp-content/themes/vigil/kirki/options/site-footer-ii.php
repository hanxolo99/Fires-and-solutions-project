<?php
$config = vigil_kirki_config();

# Footer II Layout
	VIGIL_Kirki::add_section( 'dt_footer_ii_layout', array(
		'title'	=> __( 'Layout', 'vigil' ),
		'description' => __('Footer Column Layout Settings','vigil'),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 1	
	) );
		# show-footer-ii
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-footer-ii',
			'label'    => __( 'Show Footer Columns ?', 'vigil' ),
			'section'  => 'dt_footer_ii_layout',
			'default'  => vigil_defaults('show-footer-ii'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			)
		));

		# footer-ii-columns
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'footer-ii-columns',
			'label'    => __( 'Footer Columns Layout ?', 'vigil' ),
			'section'  => 'dt_footer_ii_layout',
			'default'  => vigil_defaults('footer-ii-columns'),
			'choices' => array(
				'1' => VIGIL_THEME_URI.'/kirki/assets/images/columns/one-column.png',
				'2' => VIGIL_THEME_URI.'/kirki/assets/images/columns/one-half-column.png',
				'3' => VIGIL_THEME_URI.'/kirki/assets/images/columns/one-third-column.png',
				'4' => VIGIL_THEME_URI.'/kirki/assets/images/columns/one-fourth-column.png',
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)
		));

# Footer II Background		
	VIGIL_Kirki::add_section( 'dt_footer_ii_bg', array(
		'title'	=> __( 'Background', 'vigil' ),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 2,
	) );

		# customize-footer-ii-bg
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-bg',
			'label'    => __( 'Customize Background ?', 'vigil' ),
			'section'  => 'dt_footer_ii_bg',
			'default'  => vigil_defaults('customize-footer-ii-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-bg-color
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-ii-bg-color',
			'label'    => __( 'Background Color', 'vigil' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(
				array( 'element' => 'ul.menu' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-ii-bg-image
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-ii-bg-image',
			'label'    => __( 'Background Image', 'vigil' ),
			'description'    => __( 'Add Background Image for footer', 'vigil' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(
				array( 'element' => 'ul.menu' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-ii-bg-position
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-ii-bg-position',
			'label'    => __( 'Background Image Position', 'vigil' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(),
			'default' => 'center',
			'multiple' => 1,
			'choices' => vigil_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-ii-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# footer-ii-bg-repeat
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-ii-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'vigil' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => vigil_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-ii-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Footer II Typography
	VIGIL_Kirki::add_section( 'dt_footer_ii_typo', array(
		'title'	=> __( 'Typography', 'vigil' ),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 3,
	) );

		# customize-footer-ii-title-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-title-typo',
			'label'    => __( 'Customize Title ?', 'vigil' ),
			'section'  => 'dt_footer_ii_typo',
			'default'  => vigil_defaults('customize-footer-ii-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-title-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-ii-title-typo',
			'label'    => __( 'Title Typography', 'vigil' ),
			'section'  => 'dt_footer_ii_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => vigil_defaults( 'footer-ii-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		VIGIL_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-ii-title-typo-divider',
			'section'  => 'dt_footer_ii_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-ii-content-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-content-typo',
			'label'    => __( 'Customize Content ?', 'vigil' ),
			'section'  => 'dt_footer_ii_typo',
			'default'  => vigil_defaults('customize-footer-ii-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-content-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-ii-content-typo',
			'label'    => __( 'Content Typography', 'vigil' ),
			'section'  => 'dt_footer_ii_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => vigil_defaults( 'footer-ii-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		