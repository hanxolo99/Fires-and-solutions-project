<?php

require_once get_template_directory() . '/kirki/kirki-utils.php';
require_once get_template_directory() . '/kirki/include-kirki.php';
require_once get_template_directory() . '/kirki/kirki.php';

$config = vigil_kirki_config();

add_action('customize_register', 'vigil_customize_register');
function vigil_customize_register( $wp_customize ) {

	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );

	$wp_customize->remove_section('themes');
	$wp_customize->get_section('title_tagline')->priority = 10;
}

add_action( 'customize_controls_print_styles', 'vigil_enqueue_customizer_stylesheet' );
function vigil_enqueue_customizer_stylesheet() {
	wp_register_style( 'vigil-customizer-css', VIGIL_THEME_URI.'/kirki/assets/css/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'vigil-customizer-css' );	
}

add_action( 'customize_controls_print_footer_scripts', 'vigil_enqueue_customizer_script' );
function vigil_enqueue_customizer_script() {
	wp_register_script( 'vigil-customizer-js', VIGIL_THEME_URI.'/kirki/assets/js/customizer.js', array('jquery', 'customize-controls' ), false, true );
	wp_enqueue_script( 'vigil-customizer-js' );
}

# Theme Customizer Begins
VIGIL_Kirki::add_config( $config , array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

	# Site Identity	
		# use-custom-logo
		VIGIL_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'use-custom-logo',
			'label'    => __( 'Logo ?', 'vigil' ),
			'section'  => 'title_tagline',
			'priority' => 1,
			'default'  => vigil_defaults('use-custom-logo'),
			'description' => __('Switch to Site title or Logo','vigil'),
			'choices'  => array(
				'on'  => esc_attr__( 'Logo', 'vigil' ),
				'off' => esc_attr__( 'Site Title', 'vigil' )
			)			
		) );

		# custom-logo
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-logo',
			'label'    => __( 'Logo', 'vigil' ),
			'section'  => 'title_tagline',
			'priority' => 2,
			'default' => vigil_defaults( 'custom-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));

		# custom-dark-logo
		VIGIL_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-dark-logo',
			'label'    => __( 'Dark Logo', 'vigil' ),
			'section'  => 'title_tagline',
			'priority' => 3,
			'default' => vigil_defaults( 'custom-dark-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));		

	# Site Layout
	require_once get_template_directory() . '/kirki/options/site-layout.php';

	# Site Skin
	require_once get_template_directory() . '/kirki/options/site-skin.php';

	# Site Breadcrumb
	VIGIL_Kirki::add_panel( 'dt_site_breadcrumb_panel', array(
		'title' => __( 'Site Breadcrumb', 'vigil' ),
		'description' => __('Site Breadcrumb','vigil'),
		'priority' => 25
	) );
	require_once get_template_directory() . '/kirki/options/site-breadcrumb.php';
	
	# Site Header
	VIGIL_Kirki::add_panel( 'dt_site_header_panel', array(
		'title' => __( 'Site Header', 'vigil' ),
		'description' => __('Site Header','vigil'),
		'priority' => 30
	) );
	require_once get_template_directory() . '/kirki/options/site-header.php';

	# Site Menu
	VIGIL_Kirki::add_panel( 'dt_site_menu_panel', array(
		'title' => __( 'Site Menu', 'vigil' ),
		'description' => __('Site Menu','vigil'),
		'priority' => 35
	) );
	require_once get_template_directory() . '/kirki/options/site-menu/navigation.php';		

	# Site Footer I
		VIGIL_Kirki::add_panel( 'dt_site_footer_i_panel', array(
			'title' => __( 'Site Footer I', 'vigil' ),
			'priority' => 40
		) );
		require_once get_template_directory() . '/kirki/options/site-footer-i.php';

	# Site Footer II
	VIGIL_Kirki::add_panel( 'dt_site_footer_ii_panel', array(
		'title' => __( 'Site Footer II', 'vigil' ),
		'priority' => 45
	) );
	#require_once get_template_directory() . '/kirki/options/site-footer-ii.php';

	# Site Footer Copyright
	VIGIL_Kirki::add_panel( 'dt_footer_copyright_panel', array(
		'title' => __( 'Site Copyright', 'vigil' ),
		'priority' => 50
	) );
	require_once get_template_directory() . '/kirki/options/site-footer-copyright.php';

	# Additional JS
	require_once get_template_directory() . '/kirki/options/custom-js.php';

	# Typography
	VIGIL_Kirki::add_panel( 'dt_site_typography_panel', array(
		'title' => __( 'Typography', 'vigil' ),
		'description' => __('Typography Settings','vigil'),
		'priority' => 220
	) );	
	require_once get_template_directory() . '/kirki/options/site-typography.php';	
# Theme Customizer Ends