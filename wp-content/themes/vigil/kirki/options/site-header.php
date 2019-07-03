<?php
$config = vigil_kirki_config();

# Header Settings
	VIGIL_Kirki::add_section( 'dt_site_header_section', array(
		'title' => __( 'Header Style', 'vigil' ),
		'panel' => 'dt_site_header_panel',
		'priority' => 1
	) );

		# header-type
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'header-type',
			'label'    => __( 'Site Header', 'vigil' ),
			'section'  => 'dt_site_header_section',
			'default'  => vigil_defaults('header-type'),
			'choices' => array(
				'fullwidth-header' 				=> VIGIL_THEME_URI.'/kirki/assets/images/site-headers/fullwidth-header.jpg',
				'boxed-header' 					=> VIGIL_THEME_URI.'/kirki/assets/images/site-headers/boxed-header.jpg',
				'split-header boxed-header' 	=> VIGIL_THEME_URI.'/kirki/assets/images/site-headers/splitted-boxed-header.jpg',
				'split-header fullwidth-header' => VIGIL_THEME_URI.'/kirki/assets/images/site-headers/splitted-fullwidth-header.jpg',
				'fullwidth-header header-align-center fullwidth-menu-header' 	=> VIGIL_THEME_URI.'/kirki/assets/images/site-headers/fullwidth-menu-center.jpg',
				'two-color-header' 			=> VIGIL_THEME_URI.'/kirki/assets/images/site-headers/two-color-header.jpg',			
				'fullwidth-header header-align-left fullwidth-menu-header' 		=> VIGIL_THEME_URI.'/kirki/assets/images/site-headers/fullwidth-menu-left.jpg',
				'left-header' 				=> VIGIL_THEME_URI.'/kirki/assets/images/site-headers/left-header.jpg',
				'left-header-boxed' 		=> VIGIL_THEME_URI.'/kirki/assets/images/site-headers/left-header-boxed.jpg',			
				'creative-header' 			=> VIGIL_THEME_URI.'/kirki/assets/images/site-headers/creative-header.jpg',
				'overlay-header' 			=> VIGIL_THEME_URI.'/kirki/assets/images/site-headers/overlay-header.jpg',
			)
		));

		# enable-sticy-nav
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-sticy-nav',
			'label'    => __( 'Sticky Navigation ?', 'vigil' ),
			'section'  => 'dt_site_header_section',
			'default'  => vigil_defaults('enable-sticy-nav'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
					'fullwidth-header',
					'boxed-header',
					'split-header boxed-header',
					'split-header fullwidth-header',
					'fullwidth-header header-align-center fullwidth-menu-header',
					'two-color-header',
					'fullwidth-header header-align-left fullwidth-menu-header'
				) ),
			)			
		));	

		# header-position
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'header-position',
			'label'    => __( 'Header Position', 'vigil' ),
			'section'  => 'dt_site_header_section',
			'default'  => vigil_defaults('header-position'),		
			'choices'  => array(
				'above slider' => esc_attr__( 'Above slider','vigil'),
				'on slider' => esc_attr__( 'On slider','vigil'),
				'below slider' => esc_attr__( 'Below slider','vigil')				
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
					'fullwidth-header', 'boxed-header', 'split-header boxed-header',
					'split-header fullwidth-header',
					'fullwidth-header header-align-center fullwidth-menu-header',
					'two-color-header',
					'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)		
		));

		# header-transparency
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'header-transparency',
			'label'    => __( 'Header Transparency', 'vigil' ),
			'section'  => 'dt_site_header_section',
			'default'  => vigil_defaults('header-transparency'),		
			'choices'  => array(
				'default' => esc_attr__( 'Default','vigil'),
				'semi-transparent-header' => esc_attr__( 'Semi Transparent','vigil'),
				'transparent-header' => esc_attr__( 'Transparent','vigil')				
			),	
		));		

		# enable-header-darkbg
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-darkbg',
			'label'    => __( 'Enable Dark BG', 'vigil' ),
			'section'  => 'dt_site_header_section',
			'default'  => vigil_defaults('enable-header-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			)		
		));			

		# menu-search-icon
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'menu-search-icon',
			'label'    => __( 'Search Icon ?', 'vigil' ),
			'section'  => 'dt_site_header_section',
			'default'  => '',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header', 'boxed-header', 'two-color-header' ) ),
			)		
		));

		# search-box-type
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'search-box-type',
			'label'    => __( 'Search Box Style', 'vigil' ),
			'section'  => 'dt_site_header_section',
			'default'  => vigil_defaults('search-box-type'),
			'choices'  => array(
				'type1'   => esc_attr__( 'Default','vigil'),
				'type2'   => esc_attr__( 'Full Screen','vigil')
			),
			'active_callback' => array(
				array( 'setting' => 'menu-search-icon', 'operator' => '==', 'value' => '1' ),
			)
		));

		if( function_exists( 'is_woocommerce' ) ):
			# menu-cart-icon
			VIGIL_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'menu-cart-icon',
				'label'    => __( 'Cart Icon ?', 'vigil' ),
				'section'  => 'dt_site_header_section',
				'default'  => '',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'vigil' ),
					'off' => esc_attr__( 'No', 'vigil' )
				),
				'active_callback' => array(
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header',
						'boxed-header',
						'two-color-header') ),
				)
			));
		endif;	

		# Top bar Color

			# enable-top-bar-content
			VIGIL_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'enable-top-bar-content',
				'label'    => __( 'Show Top Bar', 'vigil' ),
				'section'  => 'dt_site_header_section',
				'default'  => vigil_defaults('enable-top-bar-content'),
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'vigil' ),
					'off' => esc_attr__( 'No', 'vigil' )
				),
				/*'active_callback' => array(
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',					
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),
				)*/
			));

			# top-bar-content
			VIGIL_Kirki::add_field( $config, array(
				'type'     => 'textarea',
				'settings' => 'top-bar-content',
				'label'    => __( 'Content', 'vigil' ),
				'section'  => 'dt_site_header_section',
				'default'  => vigil_defaults('top-bar-content'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ),
					/*array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),	*/		
				)
			) );

			# customize-top-bar		
			VIGIL_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'customize-top-bar',
				'label'    => __( 'Customize Top Bar', 'vigil' ),
				'section'  => 'dt_site_header_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'vigil' ),
					'off' => esc_attr__( 'No', 'vigil' )
				),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',					
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),
				)
			));

			# top-bar-bg-color 			
			VIGIL_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-bg-color',
				'label'    => __( 'Top Bar BG Color', 'vigil' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar' , 'property' => 'background-color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => vigil_defaults('top-bar-bg-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

			# top-bar-text-color 			
			VIGIL_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-text-color',
				'label'    => __( 'Top Bar Text Color', 'vigil' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => vigil_defaults('top-bar-text-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

			# top-bar-a-color 			
			VIGIL_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-a-color',
				'label'    => __( 'Top Bar Anchor Color', 'vigil' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar a' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => vigil_defaults('top-bar-a-color'),				
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)
			));

			# top-bar-a-hover-color 			
			VIGIL_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-a-hover-color',
				'label'    => __( 'Top Bar Anchor Hover Color', 'vigil' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar a:hover' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => vigil_defaults('top-bar-a-hover-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

		# enable-header-left-content	
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-left-content',
			'label'    => __( 'Show Header Left', 'vigil' ),
			'section'  => 'dt_site_header_section',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'left-header', 'left-header-boxed', 'creative-header' ) ),
			)				
		));

		# header-left-content
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'header-left-content',
			'label'    => __( 'Left Content', 'vigil' ),
			'section'  => 'dt_site_header_section',
			'active_callback' => array(
				array( 'setting' => 'enable-header-left-content', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'left-header', 'left-header-boxed', 'creative-header' ) ),
			)
		) );

		# enable-header-right-content	
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-right-content',
			'label'    => __( 'Show Header Right', 'vigil' ),
			'section'  => 'dt_site_header_section',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
					'fullwidth-header header-align-center fullwidth-menu-header',
					'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)				
		));

		# header-right-content
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'header-right-content',
			'label'    => __( 'Right Content', 'vigil' ),
			'section'  => 'dt_site_header_section',
			'active_callback' => array(
				array( 'setting' => 'enable-header-right-content', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'fullwidth-header header-align-left fullwidth-menu-header') ),
			)
		) );

# Header Background Settings
	VIGIL_Kirki::add_section( 'dt_site_header_bg_section', array(
		'title' => __( 'Header Background', 'vigil' ),
		'panel' => 'dt_site_header_panel',
		'priority' => 2
	) );

		# customize-header-bg
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-header-bg',
			'label'    => __( 'Customize Background ?', 'vigil' ),
			'section'  => 'dt_site_header_bg_section',
			'default'  => vigil_defaults('customize-header-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			)						
		));

		# header-bg-color
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'header-bg-color',
			'label'    => __( 'Background Color', 'vigil' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '.main-header-wrapper, .is-sticky .main-header-wrapper, .fullwidth-header .main-header-wrapper, .boxed-header .main-header, .boxed-header .is-sticky .main-header-wrapper, .header-align-left.fullwidth-menu-header .is-sticky .menu-wrapper, .header-align-center.fullwidth-menu-header .is-sticky .menu-wrapper, .standard-header .is-sticky .main-header-wrapper, .two-color-header .main-header-wrapper:before, .header-on-slider .is-sticky .main-header-wrapper, .left-header .main-header-wrapper, .left-header .main-header, .overlay-header .overlay, .dt-menu-toggle' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# header-bg-image
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'header-bg-image',
			'label'    => __( 'Background Image', 'vigil' ),
			'description'    => __( 'Add Background Image for breadcrumb', 'vigil' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# header-bg-position
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'header-bg-position',
			'label'    => __( 'Background Image Position', 'vigil' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-position' )				
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => vigil_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# header-bg-repeat
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'header-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'vigil' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => vigil_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));		