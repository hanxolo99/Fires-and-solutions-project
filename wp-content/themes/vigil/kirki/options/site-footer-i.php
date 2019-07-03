<?php
$config = vigil_kirki_config();

# Footer I Layout
	VIGIL_Kirki::add_section( 'dt_footer_layout', array(
		'title'	=> __( 'Layout', 'vigil' ),
		'description' => __('Footer Column Layout Settings','vigil'),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 1	
	) );
	
		# show-footer
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-footer',
			'label'    => __( 'Show Footer Columns ?', 'vigil' ),
			'section'  => 'dt_footer_layout',
			'default'  => vigil_defaults('show-footer'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			)
		));

		# footer-columns
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'footer-columns',
			'label'    => __( 'Footer Columns Layout ?', 'vigil' ),
			'section'  => 'dt_footer_layout',
			'transport' => 'refresh',
			'default'  => vigil_defaults('footer-columns'),
			'choices' => array(
				'1' => VIGIL_THEME_URI.'/kirki/assets/images/columns/one-column.png',
				'2' => VIGIL_THEME_URI.'/kirki/assets/images/columns/one-half-column.png',
				'3' => VIGIL_THEME_URI.'/kirki/assets/images/columns/one-third-column.png',
				'4' => VIGIL_THEME_URI.'/kirki/assets/images/columns/one-fourth-column.png',
				'5' => VIGIL_THEME_URI.'/kirki/assets/images/columns/one-fifth-column.png',
				'6' => VIGIL_THEME_URI.'/kirki/assets/images/columns/one-sixth-column.png',

				'12' => VIGIL_THEME_URI.'/kirki/assets/images/columns/onefourth-onefourth-onehalf-column.png',
				'13' => VIGIL_THEME_URI.'/kirki/assets/images/columns/onehalf-onefourth-onefourth-column.png',
				'11' => VIGIL_THEME_URI.'/kirki/assets/images/columns/onefourth-onehalf-onefourth-column.png',

				'7' => VIGIL_THEME_URI.'/kirki/assets/images/columns/onefourth-threefourth-column.png',
				'8' => VIGIL_THEME_URI.'/kirki/assets/images/columns/threefourth-onefourth-column.png',

				'9' => VIGIL_THEME_URI.'/kirki/assets/images/columns/onethird-twothird-column.png',
				'10' => VIGIL_THEME_URI.'/kirki/assets/images/columns/twothird-onethird-column.png',
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-darkbg
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-footer-darkbg',
			'label'    => __( 'Enable Footer Dark BG', 'vigil' ),
			'section'  => 'dt_footer_layout',
			'default'  => vigil_defaults('enable-footer-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			)
		));		


# Footer 1 Background		
	VIGIL_Kirki::add_section( 'dt_footer_bg', array(
		'title'	=> __( 'Background', 'vigil' ),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 2,
	) );

		# customize-footer-bg
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-bg',
			'label'    => __( 'Customize Background ?', 'vigil' ),
			'section'  => 'dt_footer_bg',
			'default'  => vigil_defaults('customize-footer-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-bg-color
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-bg-color',
			'label'    => __( 'Background Color', 'vigil' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-bg-image
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-bg-image',
			'label'    => __( 'Background Image', 'vigil' ),
			'description'    => __( 'Add Background Image for footer', 'vigil' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-bg-position
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-bg-position',
			'label'    => __( 'Background Image Position', 'vigil' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-position' )
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => vigil_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# footer-bg-repeat
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'vigil' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => vigil_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Footer I Typography
	VIGIL_Kirki::add_section( 'dt_footer_typo', array(
		'title'	=> __( 'Typography', 'vigil' ),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 3,
	) );

		# customize-footer-title-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-title-typo',
			'label'    => __( 'Customize Title ?', 'vigil' ),
			'section'  => 'dt_footer_typo',
			'default'  => vigil_defaults('customize-footer-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-title-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-title-typo',
			'label'    => __( 'Title Typography', 'vigil' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets h3.widgettitle' )
			),
			'default' => vigil_defaults( 'footer-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		VIGIL_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-title-typo-divider',
			'section'  => 'dt_footer_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-content-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-content-typo',
			'label'    => __( 'Customize Content ?', 'vigil' ),
			'section'  => 'dt_footer_typo',
			'default'  => vigil_defaults('customize-footer-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-content-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-content-typo',
			'label'    => __( 'Content Typography', 'vigil' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets .widget' )
			),
			'default' => vigil_defaults( 'footer-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-color		
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-color',
			'label'    => __( 'Anchor Color', 'vigil' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),
			'output' => array(
				array( 'element' => '.footer-widgets a, #footer a' )
			),
			'default' => vigil_defaults( 'footer-content-a-color' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-hover-color
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-hover-color',
			'label'    => __( 'Anchor Hover Color', 'vigil' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),			
			'output' => array(
				array( 'element' => '.footer-widgets a:hover, #footer a:hover' )
			),
			'default' => vigil_defaults( 'footer-content-a-hover-color' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));