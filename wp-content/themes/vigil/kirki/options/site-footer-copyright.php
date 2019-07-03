<?php
$config = vigil_kirki_config();

# Footer Copyright
	VIGIL_Kirki::add_section( 'dt_footer_copyright', array(
		'title'	=> __( 'Copyright', 'vigil' ),
		'description' => __('Footer Copyright Settings','vigil'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 1
	) );

		# show-copyright-text
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-copyright-text',
			'label'    => __( 'Show Copyright Text ?', 'vigil' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  vigil_defaults('show-copyright-text'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			)
		) );

		# copyright-text
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'copyright-text',
			'label'    => __( 'Add Content', 'vigil' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  vigil_defaults('copyright-text'),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)
		) );

		# enable-copyright-darkbg
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-copyright-darkbg',
			'label'    => __( 'Enable Copyright Dark BG ?', 'vigil' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  vigil_defaults('enable-copyright-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			)
		) );		

		# copyright-next
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'copyright-next',
			'label'    => __( 'Show Sociable / menu ?', 'vigil' ),
			'description'    => __( 'Add description here.', 'vigil' ),
			'section'  => 'dt_footer_copyright',
			'default'  => vigil_defaults('copyright-next'),
			'choices'  => array(
				'hidden'  => esc_attr__( 'Hide', 'vigil' ),
				'disable'  => esc_attr__( 'Disable', 'vigil' ),
				'sociable' => esc_attr__( 'Show sociable', 'vigil' ),
				'footer-menu' => esc_attr__( 'Show menu', 'vigil' ),
			)
		) );

# Footer Social
	VIGIL_Kirki::add_section( 'dt_footer_social', array(
		'title'	=> __( 'Social', 'vigil' ),
		'description' => __('Footer Social Icons Settings','vigil'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 2
	) );

		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'sortable',
			'settings' => 'footer-sociables',
			'label'    => __( 'Social Icons Order', 'vigil' ),
			'section'  => 'dt_footer_social',
			'default'  => vigil_defaults('footer-sociables'),
			'choices'  => array(
				"delicious"		=>	esc_attr__( 'Delicious', 'vigil' ),
				"deviantart"	=>	esc_attr__( 'Deviantart', 'vigil' ),
				"digg"			=>	esc_attr__( 'Digg', 'vigil' ),
				"dribbble"		=>	esc_attr__( 'Dribbble', 'vigil' ),
				"envelope-open"	=>	esc_attr__( 'Envelope', 'vigil' ),
				"facebook"		=>	esc_attr__( 'Facebook', 'vigil' ),
				"flickr"		=>	esc_attr__( 'Flickr', 'vigil' ),
				"google-plus"	=>	esc_attr__( 'Google Plus', 'vigil' ),
				"comment"		=>	esc_attr__( 'GTalk', 'vigil' ),
				"instagram"		=>	esc_attr__( 'Instagram', 'vigil' ),
				"lastfm"		=>	esc_attr__( 'Lastfm', 'vigil' ),
				"linkedin"		=>	esc_attr__( 'Linkedin', 'vigil' ),
				"picasa"		=>  esc_attr__( 'Picasa', 'vigil' ),
				"myspace"		=>	esc_attr__( 'Myspace', 'vigil' ),
				"pinterest"		=>	esc_attr__( 'Pinterest', 'vigil' ),
				"reddit"		=>	esc_attr__( 'Reddit', 'vigil' ),
				"rss"			=>	esc_attr__( 'RSS', 'vigil' ),
				"skype"			=>	esc_attr__( 'Skype', 'vigil' ),
				"stumbleupon"	=>	esc_attr__( 'Stumbleupon', 'vigil' ),
				"technorati"	=>	esc_attr__( 'Technorati', 'vigil' ),
				"tumblr"		=>	esc_attr__( 'Tumblr', 'vigil' ),
				"twitter"		=>	esc_attr__( 'Twitter', 'vigil' ),
				"viadeo"		=>	esc_attr__( 'Viadeo', 'vigil' ),
				"vimeo"			=>	esc_attr__( 'Vimeo', 'vigil' ),
				"yahoo"			=>	esc_attr__( 'Yahoo', 'vigil' ),
				"youtube"		=>	esc_attr__( 'Youtube', 'vigil' ),
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'sociable' ),
			)
		) );

# Footer Copyright Background		
	VIGIL_Kirki::add_section( 'dt_footer_copyright_bg', array(
		'title'	=> __( 'Background', 'vigil' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 3,
	) );

		# customize-footer-copyright-bg
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-bg',
			'label'    => __( 'Customize Background ?', 'vigil' ),
			'section'  => 'dt_footer_copyright_bg',
			'default'  => vigil_defaults('customize-footer-copyright-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )
				)
			)
		));

		# footer-copyright-bg-color
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-copyright-bg-color',
			'label'    => __( 'Background Color', 'vigil' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )				
				)
			)
		));

		# footer-copyright-bg-image
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-copyright-bg-image',
			'label'    => __( 'Background Image', 'vigil' ),
			'description'    => __( 'Add Background Image for footer', 'vigil' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				)
			)
		));

		# footer-copyright-bg-position
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-position',
			'label'    => __( 'Background Image Position', 'vigil' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'center',
			'multiple' => 1,
			'choices' => vigil_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )				
			)			
		));

		# footer-copyright-bg-repeat
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-repeat',
			'label'    => __( 'Background Image Repeat', 'vigil' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => vigil_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )
			)			
		));

# Footer Copyright Typography
	VIGIL_Kirki::add_section( 'dt_footer_copyright_typo', array(
		'title'	=> __( 'Typography', 'vigil' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 4,
	) );

		# customize-footer-copyright-text-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-text-typo',
			'label'    => __( 'Customize Copyright Text ?', 'vigil' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => vigil_defaults('customize-footer-copyright-text-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-copyright-text-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-copyright-text-typo',
			'label'    => __( 'Text Typography', 'vigil' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '.footer-copyright' )
			),
			'default' => vigil_defaults( 'footer-copyright-text-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-copyright-text-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		VIGIL_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-copyright-text-typo-divider',
			'section'  => 'dt_footer_copyright_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));		

		# customize-footer-menu-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-menu-typo',
			'label'    => __( 'Customize Footer Menu ?', 'vigil' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => vigil_defaults('customize-footer-menu-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'vigil' ),
				'off' => esc_attr__( 'No', 'vigil' )
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));

		# footer-menu-typo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-menu-typo',
			'label'    => __( 'Menu Typography', 'vigil' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => vigil_defaults( 'footer-menu-typo' ),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' ),
				array( 'setting' => 'customize-footer-menu-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		