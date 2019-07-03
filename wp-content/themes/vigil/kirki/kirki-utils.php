<?php
function vigil_kirki_config() {
	return 'vigil_kirki_config';
}

function vigil_defaults( $key = '' ) {
	$defaults = array();

	# site identify
	$defaults['use-custom-logo'] = '1';
	$defaults['custom-logo'] = VIGIL_THEME_URI.'/images/logo.png';
	$defaults['custom-dark-logo'] = VIGIL_THEME_URI.'/images/light-logo.png';
	$defaults['site_icon'] = VIGIL_THEME_URI.'/images/favicon.ico';

	# site layout
	$defaults['site-layout'] = 'wide';

	# site skin
	$defaults['use-predefined-skin'] = '1';
	$defaults['predefined-skin'] = 'blue';

	# site breadcrumb
	$defaults['customize-breadcrumb-title-typo'] = '1';
	$defaults['breadcrumb-title-typo'] = array( 'font-family' => 'Poppins',
		'variant' => 'regular',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '20px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none' );
	$defaults['customize-breadcrumb-typo'] = '0';
	$defaults['breadcrumb-typo'] = array( 'font-family' => 'Open Sans',
		'variant' => 'regular',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '13px',
		'line-height' => '',
		'letter-spacing' => '0',
		'color' => '#333333',
		'text-align' => 'unset',
		'text-transform' => 'none' );

	# site header
	$defaults['header-type'] = 'fullwidth-header';
	$defaults['enable-sticy-nav'] = '1';
	$defaults['header-position'] = 'above slider';
	$defaults['header-transparency'] = 'semi-transparent-header';
	$defaults['enable-header-darkbg'] = '0';
	$defaults['menu-search-icon'] = '1';
	$defaults['search-box-type'] = 'type2';
	$defaults['menu-cart-icon'] = '0';
	$defaults['enable-top-bar-content'] = '1';
	$defaults['top-bar-content'] = '<div class="column dt-sc-one-half first">
    <p>If you can envision it, than we can build it!</p>
</div>';

	# site menu
	$defaults['menu-active-style'] =  'menu-default';
	$defaults['menu-hover-style'] =  '';

	# site footer
	$defaults['show-footer'] = '1';
	$defaults['footer-columns'] = '4';
	$defaults['customize-footer-title-typo'] = '1';
	$defaults['footer-title-typo'] = array( 'font-family' => 'Poppins',
		'variant' => '700',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '20px',
		'line-height' => '36px',
		'letter-spacing' => '0',
		'color' => '#2B2B2B',
		'text-align' => 'left',
		'text-transform' => 'none' );
	$defaults['customize-footer-content-typo'] = '1';
	$defaults['footer-content-typo'] = array( 'font-family' => 'Poppins',
		'variant' => 'regular',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '14px',
		'line-height' => '24px',
		'letter-spacing' => '0',
		'color' => '#333333',
		'text-align' => 'left',
		'text-transform' => 'none' );

	# site copyright
	$defaults['show-copyright-text'] = '1';
	$defaults['copyright-text'] = '<p>Copyright &copy; 2017. All rights reserved by, <a title="" href="http://themeforest.net/user/designthemes">DesignThemes</a></p>';
	$defaults['enable-copyright-darkbg'] = '0';
	$defaults['copyright-next'] = 'sociable';
	//$defaults['footer-sociables'] = 'facebook';
	$defaults['customize-footer-copyright-bg'] = '0';
	$defaults['customize-footer-copyright-text-typo'] = '0';
	$defaults['customize-footer-menu-typo'] = '0';

	# site social
	$defaults['facebook'] = '#';
	$defaults['twitter'] = '#';
	$defaults['google-plus'] = '#';
	$defaults['instagram'] = '#';

	# site typography
	$defaults['customize-body-h1-typo'] = '1';
	$defaults['h1'] = array(
		'font-family' => 'Poppins',
		'variant' => '400',
		'font-size' => '42px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h2-typo'] = '1';
	$defaults['h2'] = array(
		'font-family' => 'Poppins',
		'variant' => '400',
		'font-size' => '36px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h3-typo'] = '1';
	$defaults['h3'] = array(
		'font-family' => 'Poppins',
		'variant' => '400',
		'font-size' => '30px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h4-typo'] = '1';
	$defaults['h4'] = array(
		'font-family' => 'Poppins',
		'variant' => '400',
		'font-size' => '24px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h5-typo'] = '1';
	$defaults['h5'] = array(
		'font-family' => 'Poppins',
		'variant' => '400',
		'font-size' => '18px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h6-typo'] = '1';
	$defaults['h6'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '14px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-menu-typo'] = '1';
	$defaults['menu-typo'] = array(
		'font-family' => 'Poppins',
		'variant' => '400',
		'font-size' => '14px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-content-typo'] = '1';
	$defaults['body-content-typo'] = array(
		'font-family' => 'Open Sans',
		'variant' => 'normal',
		'font-size' => '14px',
		'line-height' => '24px',
		'letter-spacing' => '',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);

	if( !empty( $key ) && array_key_exists( $key, $defaults) ) {
		return $defaults[$key];
	}

	return '';
}

function vigil_image_positions() {

	$positions = array( "top left" => esc_attr__('Top Left','vigil'),
		"top center"    => esc_attr__('Top Center','vigil'),
		"top right"     => esc_attr__('Top Right','vigil'),
		"center left"   => esc_attr__('Center Left','vigil'),
		"center center" => esc_attr__('Center Center','vigil'),
		"center right"  => esc_attr__('Center Right','vigil'),
		"bottom left"   => esc_attr__('Bottom Left','vigil'),
		"bottom center" => esc_attr__('Bottom Center','vigil'),
		"bottom right"  => esc_attr__('Bottom Right','vigil'),
	);

	return $positions;
}

function vigil_image_repeats() {

	$image_repeats = array( "repeat" => esc_attr__('Repeat','vigil'),
		"repeat-x"  => esc_attr__('Repeat in X-axis','vigil'),
		"repeat-y"  => esc_attr__('Repeat in Y-axis','vigil'),
		"no-repeat" => esc_attr__('No Repeat','vigil')
	);

	return $image_repeats;
}

function vigil_border_styles() {

	$image_repeats = array(
		"none"	 => esc_attr__('None','vigil'),
		"dotted" => esc_attr__('Dotted','vigil'),
		"dashed" => esc_attr__('Dashed','vigil'),
		"solid"	 => esc_attr__('Solid','vigil'),
		"double" => esc_attr__('Double','vigil'),
		"groove" => esc_attr__('Groove','vigil'),
		"ridge"	 => esc_attr__('Ridge','vigil'),
	);

	return $image_repeats;
}

function vigil_animations() {

	$animations = array(
		'' 					 => esc_html__('Default','vigil'),	
		"bigEntrance"        =>  esc_attr__("bigEntrance",'vigil'),
        "bounce"             =>  esc_attr__("bounce",'vigil'),
        "bounceIn"           =>  esc_attr__("bounceIn",'vigil'),
        "bounceInDown"       =>  esc_attr__("bounceInDown",'vigil'),
        "bounceInLeft"       =>  esc_attr__("bounceInLeft",'vigil'),
        "bounceInRight"      =>  esc_attr__("bounceInRight",'vigil'),
        "bounceInUp"         =>  esc_attr__("bounceInUp",'vigil'),
        "bounceOut"          =>  esc_attr__("bounceOut",'vigil'),
        "bounceOutDown"      =>  esc_attr__("bounceOutDown",'vigil'),
        "bounceOutLeft"      =>  esc_attr__("bounceOutLeft",'vigil'),
        "bounceOutRight"     =>  esc_attr__("bounceOutRight",'vigil'),
        "bounceOutUp"        =>  esc_attr__("bounceOutUp",'vigil'),
        "expandOpen"         =>  esc_attr__("expandOpen",'vigil'),
        "expandUp"           =>  esc_attr__("expandUp",'vigil'),
        "fadeIn"             =>  esc_attr__("fadeIn",'vigil'),
        "fadeInDown"         =>  esc_attr__("fadeInDown",'vigil'),
        "fadeInDownBig"      =>  esc_attr__("fadeInDownBig",'vigil'),
        "fadeInLeft"         =>  esc_attr__("fadeInLeft",'vigil'),
        "fadeInLeftBig"      =>  esc_attr__("fadeInLeftBig",'vigil'),
        "fadeInRight"        =>  esc_attr__("fadeInRight",'vigil'),
        "fadeInRightBig"     =>  esc_attr__("fadeInRightBig",'vigil'),
        "fadeInUp"           =>  esc_attr__("fadeInUp",'vigil'),
        "fadeInUpBig"        =>  esc_attr__("fadeInUpBig",'vigil'),
        "fadeOut"            =>  esc_attr__("fadeOut",'vigil'),
        "fadeOutDownBig"     =>  esc_attr__("fadeOutDownBig",'vigil'),
        "fadeOutLeft"        =>  esc_attr__("fadeOutLeft",'vigil'),
        "fadeOutLeftBig"     =>  esc_attr__("fadeOutLeftBig",'vigil'),
        "fadeOutRight"       =>  esc_attr__("fadeOutRight",'vigil'),
        "fadeOutUp"          =>  esc_attr__("fadeOutUp",'vigil'),
        "fadeOutUpBig"       =>  esc_attr__("fadeOutUpBig",'vigil'),
        "flash"              =>  esc_attr__("flash",'vigil'),
        "flip"               =>  esc_attr__("flip",'vigil'),
        "flipInX"            =>  esc_attr__("flipInX",'vigil'),
        "flipInY"            =>  esc_attr__("flipInY",'vigil'),
        "flipOutX"           =>  esc_attr__("flipOutX",'vigil'),
        "flipOutY"           =>  esc_attr__("flipOutY",'vigil'),
        "floating"           =>  esc_attr__("floating",'vigil'),
        "hatch"              =>  esc_attr__("hatch",'vigil'),
        "hinge"              =>  esc_attr__("hinge",'vigil'),
        "lightSpeedIn"       =>  esc_attr__("lightSpeedIn",'vigil'),
        "lightSpeedOut"      =>  esc_attr__("lightSpeedOut",'vigil'),
        "pullDown"           =>  esc_attr__("pullDown",'vigil'),
        "pullUp"             =>  esc_attr__("pullUp",'vigil'),
        "pulse"              =>  esc_attr__("pulse",'vigil'),
        "rollIn"             =>  esc_attr__("rollIn",'vigil'),
        "rollOut"            =>  esc_attr__("rollOut",'vigil'),
        "rotateIn"           =>  esc_attr__("rotateIn",'vigil'),
        "rotateInDownLeft"   =>  esc_attr__("rotateInDownLeft",'vigil'),
        "rotateInDownRight"  =>  esc_attr__("rotateInDownRight",'vigil'),
        "rotateInUpLeft"     =>  esc_attr__("rotateInUpLeft",'vigil'),
        "rotateInUpRight"    =>  esc_attr__("rotateInUpRight",'vigil'),
        "rotateOut"          =>  esc_attr__("rotateOut",'vigil'),
        "rotateOutDownRight" =>  esc_attr__("rotateOutDownRight",'vigil'),
        "rotateOutUpLeft"    =>  esc_attr__("rotateOutUpLeft",'vigil'),
        "rotateOutUpRight"   =>  esc_attr__("rotateOutUpRight",'vigil'),
        "shake"              =>  esc_attr__("shake",'vigil'),
        "slideDown"          =>  esc_attr__("slideDown",'vigil'),
        "slideExpandUp"      =>  esc_attr__("slideExpandUp",'vigil'),
        "slideLeft"          =>  esc_attr__("slideLeft",'vigil'),
        "slideRight"         =>  esc_attr__("slideRight",'vigil'),
        "slideUp"            =>  esc_attr__("slideUp",'vigil'),
        "stretchLeft"        =>  esc_attr__("stretchLeft",'vigil'),
        "stretchRight"       =>  esc_attr__("stretchRight",'vigil'),
        "swing"              =>  esc_attr__("swing",'vigil'),
        "tada"               =>  esc_attr__("tada",'vigil'),
        "tossing"            =>  esc_attr__("tossing",'vigil'),
        "wobble"             =>  esc_attr__("wobble",'vigil'),
        "fadeOutDown"        =>  esc_attr__("fadeOutDown",'vigil'),
        "fadeOutRightBig"    =>  esc_attr__("fadeOutRightBig",'vigil'),
        "rotateOutDownLeft"  =>  esc_attr__("rotateOutDownLeft",'vigil')
    );

	return $animations;
}