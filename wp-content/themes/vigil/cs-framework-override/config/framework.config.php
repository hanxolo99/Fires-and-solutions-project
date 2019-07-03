<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => constant('VIGIL_THEME_NAME').' '.esc_html__('Options', 'vigil'),
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => __('Designthemes Framework <small>by Designthemes</small>', 'vigil'),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
  'name'        => 'general',
  'title'       => esc_html__('General', 'vigil'),
  'icon'        => 'fa fa-gears',

  'fields'      => array(

	array(
	  'type'    => 'subheading',
	  'content' => esc_html__( 'General Options', 'vigil' ),
	),

	array(
	  'id'  	 => 'show-pagecomments',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Globally Show Page Comments', 'vigil'),
	  'info'	 => esc_html__('YES! to show comments on all the pages. This will globally override your "Allow comments" option under your page "Discussion" settings.', 'vigil'),
	  'default'  => true,
	),

	array(
	  'id'  	 => 'showall-pagination',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Show all pages in Pagination', 'vigil'),
	  'info'	 => esc_html__('YES! to show all the pages instead of dots near the current page.', 'vigil')
	),

	array(
	  'id'  	 => 'enable-stylepicker',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Style Picker', 'vigil'),
	  'info'	 => esc_html__('YES! to show the style picker.', 'vigil')
	),

	array(
	  'id'  	 => 'use-site-loader',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Site Loader', 'vigil'),
	  'info'	 => esc_html__('YES! to use site loader.', 'vigil')
	),

	array(
	  'id'      => 'google-map-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Google Map API Key', 'vigil'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid google account api key here', 'vigil').'</p>',
	),

	array(
	  'id'      => 'mailchimp-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Mailchimp API Key', 'vigil'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid mailchimp account api key here', 'vigil').'</p>',
	),

  ),
);

$options[]      = array(
  'name'        => 'layout_options',
  'title'       => esc_html__('Layout Options', 'vigil'),
  'icon'        => 'dashicons dashicons-exerpt-view',
  'sections' => array(

	// -----------------------------------------
	// Header Options
	// -----------------------------------------
	array(
	  'name'      => 'breadcrumb_options',
	  'title'     => esc_html__('Breadcrumb Options', 'vigil'),
	  'icon'      => 'fa fa-sitemap',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Breadcrumb Options", 'vigil' ),
		  ),

		  array(
			'id'  		 => 'show-breadcrumb',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Breadcrumb', 'vigil'),
			'info'		 => esc_html__('YES! to display breadcrumb for all pages.', 'vigil'),
			'default' 	 => true,
		  ),

		  array(
			'id'           => 'breadcrumb-delimiter',
			'type'         => 'select',
			'title'        => esc_html__('Breadcrumb Delimiter', 'vigil'),
			'options'      => array(
			  'fa default' 					=> esc_html__('Default', 'vigil'),
			  'fa fa-angle-double-right'    => esc_html__('Double Angle Right', 'vigil'),
			  'fa fa-sort'  				=> esc_html__('Sort', 'vigil'),
			  'fa fa-arrow-circle-right'    => esc_html__('Arrow Circle Right', 'vigil'),
			  'fa fa-angle-right'     		=> esc_html__('Angle Right', 'vigil'),
			  'fa fa-caret-right'  			=> esc_html__('Caret Right', 'vigil'),
			  'fa fa-arrow-right'  			=> esc_html__('Arrow Right', 'vigil'),
			  'fa fa-chevron-right'  		=> esc_html__('Chevron Right', 'vigil'),
			  'fa fa-hand-o-right'  		=> esc_html__('Hand Right', 'vigil'),
			  'fa fa-plus'  				=> esc_html__('Plus', 'vigil'),
			  'fa fa-remove'  				=> esc_html__('Remove', 'vigil'),
			  'fa fa-glass'  				=> esc_html__('Glass', 'vigil'),
			),
			'class'        => 'chosen',
			'default'      => 'fa default',
			'info'         => esc_html__('Choose delimiter style to display on breadcrumb section.', 'vigil'),
		  ),

		  array(
			'id'           => 'breadcrumb-style',
			'type'         => 'select',
			'title'        => esc_html__('Breadcrumb Style', 'vigil'),
			'options'      => array(
			  'default' 							=> esc_html__('Default', 'vigil'),
			  'aligncenter'    						=> esc_html__('Align Center', 'vigil'),
			  'alignright'  						=> esc_html__('Align Right', 'vigil'),
			  'breadcrumb-left'    					=> esc_html__('Left Side Breadcrumb', 'vigil'),
			  'breadcrumb-right'     				=> esc_html__('Right Side Breadcrumb', 'vigil'),
			  'breadcrumb-top-right-title-center'  	=> esc_html__('Top Right Title Center', 'vigil'),
			  'breadcrumb-top-left-title-center'  	=> esc_html__('Top Left Title Center', 'vigil'),
			),
			'class'        => 'chosen',
			'default'      => 'default',
			'info'         => esc_html__('Choose alignment style to display on breadcrumb section.', 'vigil'),
		  ),

		  array(
			'id'    => 'breadcrumb_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'vigil'),
			'desc'  => esc_html__('Choose background options for breadcrumb title section.', 'vigil')
		  ),

		),
	),

  ),
);

$options[]      = array(
  'name'        => 'allpage_options',
  'title'       => esc_html__('All Page Options', 'vigil'),
  'icon'        => 'fa fa-files-o',
  'sections' => array(

	// -----------------------------------------
	// Post Options
	// -----------------------------------------
	array(
	  'name'      => 'post_options',
	  'title'     => esc_html__('Post Options', 'vigil'),
	  'icon'      => 'fa fa-file',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post Options", 'vigil' ),
		  ),
		
		  array(
			'id'  		 => 'single-post-authorbox',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Author Box', 'vigil'),
			'info'		 => esc_html__('YES! to display author box in single blog posts.', 'vigil')
		  ),

		  array(
			'id'  		 => 'single-post-related',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Related Posts', 'vigil'),
			'info'		 => esc_html__('YES! to display related blog posts in single posts.', 'vigil')
		  ),

		  array(
			'id'  		 => 'single-post-navigation',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Post Navigation', 'vigil'),
			'info'		 => esc_html__('YES! to display post navigation in single posts.', 'vigil')
		  ),

		  array(
			'id'  		 => 'single-post-comments',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Posts Comments', 'vigil'),
			'info'		 => esc_html__('YES! to display single blog post comments.', 'vigil'),
			'default' 	 => true,
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Page Layout", 'vigil' ),
		  ),

		  array(
			'id'      	 => 'post-archives-page-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Page Layout', 'vigil'),
			'options'    => array(
			  'content-full-width'   => VIGIL_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => VIGIL_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => VIGIL_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => VIGIL_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'post-archives-page-layout',
			),
		  ),

		  array(
			'id'  		 => 'show-standard-left-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Left Sidebar', 'vigil'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 => 'show-standard-right-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Right Sidebar', 'vigil'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Post Layout", 'vigil' ),
		  ),

		  array(
			'id'      	   => 'post-archives-post-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Post Layout', 'vigil'),
			'options'      => array(
			  'one-column' 		  => VIGIL_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => VIGIL_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => VIGIL_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  '1-2-2'			  => VIGIL_THEME_URI . '/cs-framework-override/images/1-2-2.png',
			  '1-2-2-1-2-2' 	  => VIGIL_THEME_URI . '/cs-framework-override/images/1-2-2-1-2-2.png',
			  '1-3-3-3'			  => VIGIL_THEME_URI . '/cs-framework-override/images/1-3-3-3.png',
			  '1-3-3-3-1' 		  => VIGIL_THEME_URI . '/cs-framework-override/images/1-3-3-3-1.png',
			),
			'default'      => 'one-half-column',
		  ),

		  array(
			'id'           => 'post-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'vigil'),
			'options'      => array(
			  'blog-default-style' 		=> esc_html__('Default', 'vigil'),
			  'entry-date-left'      	=> esc_html__('Date Left', 'vigil'),
			  'entry-date-author-left'  => esc_html__('Date and Author Left', 'vigil'),
			  'blog-medium-style'       => esc_html__('Medium', 'vigil'),
			  'blog-medium-style dt-blog-medium-highlight'     					 => esc_html__('Medium Hightlight', 'vigil'),
			  'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight'  => esc_html__('Medium Skin Highlight', 'vigil'),
			),
			'class'        => 'chosen',
			'default'      => 'blog-default-style',
			'info'         => esc_html__('Choose post style to display post archives pages.', 'vigil'),
		  ),

		  array(
			'id'  		 => 'post-archives-enable-excerpt',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Allow Excerpt', 'vigil'),
			'info'		 => esc_html__('YES! to allow excerpt', 'vigil'),
			'default'    => true,
		  ),

		  array(
			'id'  		 => 'post-archives-excerpt',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'vigil'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'vigil').'</span>',
			'default' 	 => 40,
		  ),

		  array(
			'id'  		 => 'post-archives-enable-readmore',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Read More', 'vigil'),
			'info'		 => esc_html__('YES! to enable read more button', 'vigil'),
			'default'	 => true,
		  ),

		  array(
			'id'  		 => 'post-archives-readmore',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Read More Shortcode', 'vigil'),
			'info'		 => esc_html__('Paste any button shortcode here', 'vigil'),
			'default'	 => '[dt_sc_button title="Read More" style="filled" icon_type="fontawesome" iconalign="icon-right with-icon" iconclass="fa fa-long-arrow-right" class="type1"]',
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post & Post Archive options", 'vigil' ),
		  ),

		  array(
			'id'      => 'post-format-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Post Format Meta', 'vigil' ),
			'info'	  => esc_html__('YES! to show post format meta information', 'vigil'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-author-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Author Meta', 'vigil' ),
			'info'	  => esc_html__('YES! to show post author meta information', 'vigil'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-date-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Date Meta', 'vigil' ),
			'info'	  => esc_html__('YES! to show post date meta information', 'vigil'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-comment-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Comment Meta', 'vigil' ),
			'info'	  => esc_html__('YES! to show post comment meta information', 'vigil'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-category-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Category Meta', 'vigil' ),
			'info'	  => esc_html__('YES! to show post category information', 'vigil'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-tag-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Tag Meta', 'vigil' ),
			'info'	  => esc_html__('YES! to show post tag information', 'vigil'),
			'default' => true
		  ),

		),
	),

	// -----------------------------------------
	// 404 Options
	// -----------------------------------------
	array(
	  'name'      => '404_options',
	  'title'     => esc_html__('404 Options', 'vigil'),
	  'icon'      => 'fa fa-warning',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "404 Message", 'vigil' ),
		  ),
		  
		  array(
			'id'      => 'enable-404message',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Message', 'vigil' ),
			'info'	  => esc_html__('YES! to enable not-found page message.', 'vigil'),
			'default' => true
		  ),

		  array(
			'id'           => 'notfound-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'vigil'),
			'options'      => array(
			  'type1' 	   => esc_html__('Modern', 'vigil'),
			  'type2'      => esc_html__('Classic', 'vigil'),
			  'type4'  	   => esc_html__('Diamond', 'vigil'),
			  'type5'      => esc_html__('Shadow', 'vigil'),
			  'type6'      => esc_html__('Diamond Alt', 'vigil'),
			  'type7'  	   => esc_html__('Stack', 'vigil'),
			  'type8'  	   => esc_html__('Minimal', 'vigil'),
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of not-found template page.', 'vigil')
		  ),

		  array(
			'id'      => 'notfound-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('404 Dark BG', 'vigil' ),
			'info'	  => esc_html__('YES! to use dark bg notfound page for this site.', 'vigil')
		  ),

		  array(
			'id'           => 'notfound-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'vigil'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'vigil'),
			'info'       	 => esc_html__('Choose the page for not-found content.', 'vigil')
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Background Options", 'vigil' ),
		  ),

		  array(
			'id'    => 'notfound_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'vigil')
		  ),

		  array(
			'id'  		 => 'notfound-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'vigil'),
			'info'		 => esc_html__('Paste custom CSS styles for not found page.', 'vigil')
		  ),

		),
	),

	// -----------------------------------------
	// Underconstruction Options
	// -----------------------------------------
	array(
	  'name'      => 'comingsoon_options',
	  'title'     => esc_html__('Under Construction Options', 'vigil'),
	  'icon'      => 'fa fa-thumbs-down',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Under Construction", 'vigil' ),
		  ),
	
		  array(
			'id'      => 'enable-comingsoon',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Coming Soon', 'vigil' ),
			'info'	  => esc_html__('YES! to check under construction page of your website.', 'vigil')
		  ),
	
		  array(
			'id'           => 'comingsoon-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'vigil'),
			'options'      => array(
			  'type1' 	   => esc_html__('Diamond', 'vigil'),
			  'type2'      => esc_html__('Teaser', 'vigil'),
			  'type3'  	   => esc_html__('Minimal', 'vigil'),
			  'type4'      => esc_html__('Counter Only', 'vigil'),
			  'type5'      => esc_html__('Belt', 'vigil'),
			  'type6'  	   => esc_html__('Classic', 'vigil'),
			  'type7'  	   => esc_html__('Boxed', 'vigil')
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of coming soon template.', 'vigil'),
		  ),

		  array(
			'id'      => 'uc-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('Coming Soon Dark BG', 'vigil' ),
			'info'	  => esc_html__('YES! to use dark bg coming soon page for this site.', 'vigil')
		  ),

		  array(
			'id'           => 'comingsoon-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'vigil'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'vigil'),
			'info'       	 => esc_html__('Choose the page for comingsoon content.', 'vigil')
		  ),

		  array(
			'id'      => 'show-launchdate',
			'type'    => 'switcher',
			'title'   => esc_html__('Show Launch Date', 'vigil' ),
			'info'	  => esc_html__('YES! to show launch date text.', 'vigil'),
		  ),

		  array(
			'id'      => 'comingsoon-launchdate',
			'type'    => 'text',
			'title'   => esc_html__('Launch Date', 'vigil'),
			'attributes' => array( 
			  'placeholder' => '10/30/2016 12:00:00'
			),
			'after' 	=> '<p class="cs-text-info">'.esc_html__('Put Format: 12/30/2016 12:00:00 month/day/year hour:minute:second', 'vigil').'</p>',
		  ),

		  array(
			'id'           => 'comingsoon-timezone',
			'type'         => 'select',
			'title'        => esc_html__('UTC Timezone', 'vigil'),
			'options'      => array(
			  '-12' => '-12', '-11' => '-11', '-10' => '-10', '-9' => '-9', '-8' => '-8', '-7' => '-7', '-6' => '-6', '-5' => '-5', 
			  '-4' => '-4', '-3' => '-3', '-2' => '-2', '-1' => '-1', '0' => '0', '+1' => '+1', '+2' => '+2', '+3' => '+3', '+4' => '+4',
			  '+5' => '+5', '+6' => '+6', '+7' => '+7', '+8' => '+8', '+9' => '+9', '+10' => '+10', '+11' => '+11', '+12' => '+12'
			),
			'class'        => 'chosen',
			'default'      => '0',
			'info'         => esc_html__('Choose utc timezone, by default UTC:00:00', 'vigil'),
		  ),

		  array(
			'id'    => 'comingsoon_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'vigil')
		  ),

		  array(
			'id'  		 => 'comingsoon-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'vigil'),
			'info'		 => esc_html__('Paste custom CSS styles for under construction page.', 'vigil'),
		  ),

		),
	),

  ),
);

// -----------------------------------------
// Widget area Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'widgetarea_options',
  'title'       => esc_html__('Widget Area', 'vigil'),
  'icon'        => 'fa fa-trello',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Widget Area for Sidebar", 'vigil' ),
	  ),

	  array(
		'id'           => 'wtitle-style',
		'type'         => 'select',
		'title'        => esc_html__('Sidebar widget Title Style', 'vigil'),
		'options'      => array(
		  'type1' 	   => esc_html__('Double Border', 'vigil'),
		  'type2'      => esc_html__('Tooltip', 'vigil'),
		  'type3'  	   => esc_html__('Title Top Border', 'vigil'),
		  'type4'      => esc_html__('Left Border & Pattren', 'vigil'),
		  'type5'      => esc_html__('Bottom Border', 'vigil'),
		  'type6'  	   => esc_html__('Tooltip Border', 'vigil'),
		  'type7'  	   => esc_html__('Boxed Modern', 'vigil'),
		  'type8'  	   => esc_html__('Elegant Border', 'vigil'),
		  'type9' 	   => esc_html__('Needle', 'vigil'),
		  'type10' 	   => esc_html__('Ribbon', 'vigil'),
		  'type11' 	   => esc_html__('Content Background', 'vigil'),
		  'type12' 	   => esc_html__('Classic BG', 'vigil'),
		  'type13' 	   => esc_html__('Tiny Boders', 'vigil'),
		  'type14' 	   => esc_html__('BG & Border', 'vigil'),
		  'type15' 	   => esc_html__('Classic BG Alt', 'vigil'),
		  'type16' 	   => esc_html__('Left Border & BG', 'vigil'),
		  'type17' 	   => esc_html__('Basic', 'vigil'),
		  'type18' 	   => esc_html__('BG & Pattern', 'vigil'),
		),
		'class'          => 'chosen',
		'default_option' => esc_html__('Choose any type', 'vigil'),
		'info'           => esc_html__('Choose the style of sidebar widget title.', 'vigil')
	  ),

	  array(
		'id'              => 'widgetarea-custom',
		'type'            => 'group',
		'title'           => esc_html__('Custom Widget Area', 'vigil'),
		'button_title'    => esc_html__('Add New', 'vigil'),
		'accordion_title' => esc_html__('Add New Widget Area', 'vigil'),
		'fields'          => array(

		  array(
			'id'          => 'widgetarea-custom-name',
			'type'        => 'text',
			'title'       => esc_html__('Name', 'vigil'),
		  ),

		)
	  ),

	),
);

// -----------------------------------------
// Woocommerce Options
// -----------------------------------------
if( function_exists( 'is_woocommerce' ) ){

	$options[]      = array(
	  'name'        => 'woocommerce_options',
	  'title'       => esc_html__('Woocommerce', 'vigil'),
	  'icon'        => 'fa fa-shopping-cart',

	  'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Woocommerce Shop Page Options", 'vigil' ),
		  ),

		  array(
			'id'  		 => 'shop-product-per-page',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Products Per Page', 'vigil'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in catalog / shop page', 'vigil').'</span>',
			'default' 	 => 12,
		  ),

		  array(
			'id'           => 'product-style',
			'type'         => 'select',
			'title'        => esc_html__('Product Style', 'vigil'),
			'options'      => array(
			  'type1' 	   => esc_html__('Thick Border', 'vigil'),
			  'type2'      => esc_html__('Pattern Overlay', 'vigil'),
			  'type3'  	   => esc_html__('Thin Border', 'vigil'),
			  'type4'      => esc_html__('Diamond Icons', 'vigil'),
			  'type5'      => esc_html__('Girly', 'vigil'),
			  'type6'  	   => esc_html__('Push Animation', 'vigil'),
			  'type7' 	   => esc_html__('Dual Color BG', 'vigil'),
			  'type8' 	   => esc_html__('Modern', 'vigil'),
			  'type9' 	   => esc_html__('Diamond & Border', 'vigil'),
			  'type10' 	   => esc_html__('Easing', 'vigil'),
			  'type11' 	   => esc_html__('Boxed', 'vigil'),
			  'type12' 	   => esc_html__('Easing Alt', 'vigil'),
			  'type13' 	   => esc_html__('Parallel', 'vigil'),
			  'type14' 	   => esc_html__('Pointer', 'vigil'),
			  'type15' 	   => esc_html__('Diamond Flip', 'vigil'),
			  'type16' 	   => esc_html__('Stack', 'vigil'),
			  'type17' 	   => esc_html__('Bouncy', 'vigil'),
			  'type18' 	   => esc_html__('Hexagon', 'vigil'),
			  'type19' 	   => esc_html__('Masked Diamond', 'vigil'),
			  'type20' 	   => esc_html__('Masked Circle', 'vigil'),
			  'type21' 	   => esc_html__('Classic', 'vigil'),
			),
			'class'        => 'chosen',
			'default' 	   => 'type1',
			'info'         => esc_html__('Choose products style to display shop & archive pages.', 'vigil')
		  ),

		  array(
			'id'      	 => 'shop-page-product-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Product Layout', 'vigil'),
			'options'    => array(
			  'one-half-column'     => VIGIL_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'    => VIGIL_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  'one-fourth-column'   => VIGIL_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
			),
			'default'      => 'one-third-column',
			'attributes'   => array(
			  'data-depend-id' => 'shop-page-product-layout',
			),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Detail Page Options", 'vigil' ),
		  ),

		  array(
			'id'      	   => 'product-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'vigil'),
			'options'      => array(
			  'content-full-width'   => VIGIL_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => VIGIL_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => VIGIL_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => VIGIL_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'vigil'),
			'dependency'   	 => array( 'product-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'vigil'),
			'dependency' 	 => array( 'product-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 	 => 'enable-related',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Related Products', 'vigil'),
			'info'	  		 => esc_html__("YES! to display related products on single product's page.", 'vigil')
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Category Page Options", 'vigil' ),
		  ),

		  array(
			'id'      	   => 'product-category-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'vigil'),
			'options'      => array(
			  'content-full-width'   => VIGIL_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => VIGIL_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => VIGIL_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => VIGIL_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-category-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'vigil'),
			'dependency'   	 => array( 'product-category-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'vigil'),
			'dependency' 	 => array( 'product-category-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Tag Page Options", 'vigil' ),
		  ),

		  array(
			'id'      	   => 'product-tag-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'vigil'),
			'options'      => array(
			  'content-full-width'   => VIGIL_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => VIGIL_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => VIGIL_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => VIGIL_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-tag-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'vigil'),
			'dependency'   	 => array( 'product-tag-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'vigil'),
			'dependency' 	 => array( 'product-tag-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

	  ),
	);
}

// -----------------------------------------
// Sociable Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'sociable_options',
  'title'       => esc_html__('Sociable', 'vigil'),
  'icon'        => 'fa fa-share-alt',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Sociable", 'vigil' ),
	  ),

	  array(
		'id'              => 'sociable_fields',
		'type'            => 'group',
		'title'           => esc_html__('Sociable', 'vigil'),
		'info'            => esc_html__('Click button to add type of social & url.', 'vigil'),
		'button_title'    => esc_html__('Add New Social', 'vigil'),
		'accordion_title' => esc_html__('Adding New Social Field', 'vigil'),
		'fields'          => array(
		  array(
			'id'          => 'sociable_fields_type',
			'type'        => 'select',
			'title'       => esc_html__('Select Social', 'vigil'),
			'options'      => array(
			  'delicious' 	 => esc_html__('Delicious', 'vigil'),
			  'deviantart' 	 => esc_html__('Deviantart', 'vigil'),
			  'digg' 	  	 => esc_html__('Digg', 'vigil'),
			  'dribbble' 	 => esc_html__('Dribbble', 'vigil'),
			  'envelope' 	 => esc_html__('Envelope', 'vigil'),
			  'facebook' 	 => esc_html__('Facebook', 'vigil'),
			  'flickr' 		 => esc_html__('Flickr', 'vigil'),
			  'google-plus'  => esc_html__('Google Plus', 'vigil'),
			  'gtalk'  		 => esc_html__('GTalk', 'vigil'),
			  'instagram'	 => esc_html__('Instagram', 'vigil'),
			  'lastfm'	 	 => esc_html__('Lastfm', 'vigil'),
			  'linkedin'	 => esc_html__('Linkedin', 'vigil'),
			  'myspace'		 => esc_html__('Myspace', 'vigil'),
			  'picasa'		 => esc_html__('Picasa', 'vigil'),
			  'pinterest'	 => esc_html__('Pinterest', 'vigil'),
			  'reddit'		 => esc_html__('Reddit', 'vigil'),
			  'rss'		 	 => esc_html__('RSS', 'vigil'),
			  'skype'		 => esc_html__('Skype', 'vigil'),
			  'stumbleupon'	 => esc_html__('Stumbleupon', 'vigil'),
			  'technorati'	 => esc_html__('Technorati', 'vigil'),
			  'tumblr'		 => esc_html__('Tumblr', 'vigil'),
			  'twitter'		 => esc_html__('Twitter', 'vigil'),
			  'viadeo'		 => esc_html__('Viadeo', 'vigil'),
			  'vimeo'		 => esc_html__('Vimeo', 'vigil'),
			  'yahoo'		 => esc_html__('Yahoo', 'vigil'),
			  'youtube'		 => esc_html__('Youtube', 'vigil'),
			),
			'class'        => 'chosen',
			'default'      => 'delicious',
		  ),

		  array(
			'id'          => 'sociable_fields_url',
			'type'        => 'text',
			'title'       => esc_html__('Enter URL', 'vigil')
		  ),
		)
	  ),

   ),
);

// -----------------------------------------
// Hook Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'hook_options',
  'title'       => esc_html__('Hooks', 'vigil'),
  'icon'        => 'fa fa-paperclip',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Top Hook", 'vigil' ),
	  ),

	  array(
		'id'  	=> 'enable-top-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Top Hook', 'vigil'),
		'info'	=> esc_html__("YES! to enable top hook.", 'vigil')
	  ),

	  array(
		'id'  		 => 'top-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Top Hook', 'vigil'),
		'info'		 => esc_html__('Paste your top hook, Executes after the opening &lt;body&gt; tag.', 'vigil')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content Before Hook", 'vigil' ),
	  ),

	  array(
		'id'  	=> 'enable-content-before-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content Before Hook', 'vigil'),
		'info'	=> esc_html__("YES! to enable content before hook.", 'vigil')
	  ),

	  array(
		'id'  		 => 'content-before-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content Before Hook', 'vigil'),
		'info'		 => esc_html__('Paste your content before hook, Executes before the opening &lt;#primary&gt; tag.', 'vigil')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content After Hook", 'vigil' ),
	  ),

	  array(
		'id'  	=> 'enable-content-after-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content After Hook', 'vigil'),
		'info'	=> esc_html__("YES! to enable content after hook.", 'vigil')
	  ),

	  array(
		'id'  		 => 'content-after-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content After Hook', 'vigil'),
		'info'		 => esc_html__('Paste your content after hook, Executes after the closing &lt;/#main&gt; tag.', 'vigil')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Bottom Hook", 'vigil' ),
	  ),

	  array(
		'id'  	=> 'enable-bottom-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Bottom Hook', 'vigil'),
		'info'	=> esc_html__("YES! to enable bottom hook.", 'vigil')
	  ),

	  array(
		'id'  		 => 'bottom-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Bottom Hook', 'vigil'),
		'info'		 => esc_html__('Paste your bottom hook, Executes after the closing &lt;/body&gt; tag.', 'vigil')
	  ),
	  
	  array(
		'id'  	=> 'enable-analytics-code',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Tracking Code', 'vigil'),
		'info'	=> esc_html__("YES! to enable site tracking code.", 'vigil')
	  ),

	  array(
		'id'  		 => 'analytics-code',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Google Analytics Tracking Code', 'vigil'),
		'info'		 => esc_html__('Either enter your Google tracking id (UA-XXXXX-X) or your full Google Analytics tracking Code here. If you want to offer your visitors the option to stop being tracked you can place the shortcode [dt_sc_privacy_google_tracking] somewhere on your site', 'vigil')
	  ),

   ),
);

// -----------------------------------------
// Privacy & Cookie Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'privacy_options',
  'title'       => esc_html__('Privacy and Cookies', 'vigil'),
  'icon'        => 'fa fa-low-vision',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Privacy Policy", 'vigil' ),
	  ),

	  array(
		'type'    => 'notice',
		'class'   => 'warning',
		'content' => esc_html__('In case you deal with any EU customers/visitors these options allow you to make your site GDPR compliant.', 'vigil')
	  ),

	  array(
		'id'      => 'privacy-commentform',
		'type'    => 'checkbox',
		'title'   => esc_html__('Append a privacy policy message to your comment form?', 'vigil'),
		'label'   => esc_html__('Check to append a message to the comment form for unregistered users. Commenting without consent is no longer possible', 'vigil')
	  ),

	  array(
		'id'  	  => 'privacy-commentform-msg',
		'type'    => 'textarea',
		'title'   => esc_html__('Message below comment form', 'vigil'),
		'info'	  => esc_html__('A short message that can be displayed below forms, along with a checkbox, that lets the user know that he has to agree to your privacy policy in order to send the form.', 'vigil'),
		'default' => esc_html__('I agree to the terms and conditions laid out in the [dt_sc_privacy_link]Privacy Policy[/dt_sc_privacy_link]', 'vigil'),
		'dependency' => array( 'privacy-commentform', '==', 'true' )
	  ),

	  array(
		'id'      => 'privacy-subscribeform',
		'type'    => 'checkbox',
		'title'   => esc_html__('Append a privacy policy message to mailchimp contact forms?', 'vigil'),
		'label'   => esc_html__('Check to append a message to all of your mailchimp forms.', 'vigil')
	  ),

	  array(
		'id'  	  => 'privacy-subscribeform-msg',
		'type'    => 'textarea',
		'title'   => esc_html__('Message below mailchimp subscription forms', 'vigil'),
		'info'	  => esc_html__('A short message that can be displayed below forms, along with a checkbox, that lets the user know that he has to agree to your privacy policy in order to send the form.', 'vigil'),
		'default' => esc_html__('I agree to the terms and conditions laid out in the [dt_sc_privacy_link]Privacy Policy[/dt_sc_privacy_link]', 'vigil'),
		'dependency' => array( 'privacy-subscribeform', '==', 'true' )
	  ),

	  array(
		'id'      => 'privacy-loginform',
		'type'    => 'checkbox',
		'title'   => esc_html__('Append a privacy policy message to your login forms?', 'vigil'),
		'label'   => esc_html__('Check to append a message to the default login and registrations forms.', 'vigil')
	  ),

	  array(
		'id'  	  => 'privacy-loginform-msg',
		'type'    => 'textarea',
		'title'   => esc_html__('Message below login forms', 'vigil'),
		'info'	  => esc_html__('A short message that can be displayed below forms, along with a checkbox, that lets the user know that he has to agree to your privacy policy in order to send the form.', 'vigil'),
		'default' => esc_html__('I agree to the terms and conditions laid out in the [dt_sc_privacy_link]Privacy Policy[/dt_sc_privacy_link]', 'vigil'),
		'dependency' => array( 'privacy-loginform', '==', 'true' )
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Cookie Consent Message", 'vigil' ),
	  ),

	  array(
		'type'    => 'notice',
		'class'   => 'warning',
		'content' => __("Make your site comply with the <a target='_blank' href='http://ec.europa.eu/ipg/basics/legal/cookies/index_en.htm'>EU cookie law</a> by informing users that your site uses cookies. <br><br> You can also use the field to display a one time message not related to cookies if you are using a plugin for this purpose or do not need to inform your customers about the use of cookies.",'vigil'),
	  ),

	  array(
		'id'      => 'enable-cookie-consent',
		'type'    => 'checkbox',
		'title'   => esc_html__('Cookie Message Bar', 'vigil'),
		'label'   => esc_html__('Enable cookie consent message bar', 'vigil'),
	  ),

	  array(
		'id'  	  => 'cookie-consent-msg',
		'type'    => 'textarea',
		'title'   => esc_html__('Message', 'vigil'),
		'info'	  => esc_html__('Provide a message which indicates that your site uses cookies.', 'vigil'),
		'default' => esc_html__('This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.', 'vigil'),
		'dependency' => array( 'enable-cookie-consent', '==', 'true' )
	  ),

	  array(
		'id'           => 'cookie-bar-position',
		'type'         => 'select',
		'title'        => esc_html__('Message Bar Position', 'vigil'),
		'options'      => array(
		  'top' 	     => esc_html__('Top', 'vigil'),
		  'bottom'       => esc_html__('Bottom', 'vigil'),
		  'top-left' 	 => esc_html__('Top Left Corner', 'vigil'),
		  'top-right' 	 => esc_html__('Top Right Corner', 'vigil'),
		  'bottom-left'	 => esc_html__('Bottom Left Corner', 'vigil'),
		  'bottom-right' => esc_html__('Bottom Right Corner', 'vigil'),
		),
		'class'        => 'chosen',
		'default' 	   => 'bottom',
		'dependency'   => array( 'enable-cookie-consent', '==', 'true' ),
		'info'         => esc_html__('Where on the page should the message bar appear?', 'vigil')
	  ),

	  array(
		'type'         => 'subheading',
		'content'      => esc_html__( "Buttons", 'vigil' ),
		'dependency'   => array( 'enable-cookie-consent', '==', 'true' ),
	  ),

	  array(
		'id'              => 'cookie-bar-buttons',
		'type'            => 'group',
		'title'           => esc_html__('Buttons', 'vigil'),
		'desc'            => esc_html__('You can create any number of buttons/links for your message bar here:', 'vigil'),
		'button_title'    => esc_html__('Add New Button', 'vigil'),
		'accordion_title' => esc_html__('Adding New Button', 'vigil'),
		'dependency'      => array( 'enable-cookie-consent', '==', 'true' ),
		'fields'          => array(
		  array(
			'id'          => 'cookie-bar-button-label',
			'type'        => 'text',
			'title'       => esc_html__('Button Label', 'vigil')
		  ),
		  array(
			'id'           => 'cookie-button-action',
			'type'         => 'select',
			'title'        => esc_html__('Button Action', 'vigil'),
			'options'      => array(
			  '' 	       => esc_html__('Dismiss the notification', 'vigil'),
			  'link'       => esc_html__('Link to another page', 'vigil'),
			  'info_modal' => esc_html__('Open info modal on privacy and cookies', 'vigil')
			),
			'class'        => 'chosen',
			'default' 	   => ''
		  ),
		  array(
			'id'         => 'cookie-bar-button-link',
			'type'       => 'text',
			'title'      => esc_html__('Button Link', 'vigil'),
			'dependency' => array( 'cookie-button-action', '==', 'link' )
		  ),
		)
	  ),

	  array(
		'type'       => 'subheading',
		'content'    => esc_html__( "Modal Window with privacy and cookie info", 'vigil' ),
		'dependency' => array( 'enable-cookie-consent', '==', 'true' ),
	  ),

	  array(
		'id'         => 'enable-custom-model-content',
		'type'       => 'checkbox',
		'title'		 => esc_html__('Model Window Custom Content', 'vigil'),
		'label'      => esc_html__('Instead of displaying the default content set custom content yourself', 'vigil'),
		'dependency' => array( 'enable-cookie-consent', '==', 'true' )
	  ),

	  array(
		'id'         => 'custom-model-heading',
		'type'       => 'text',
		'title'      => esc_html__('Main Heading', 'vigil'),
		'default'    => esc_html__('Cookie and Privacy Settings', 'vigil'),
		'dependency' => array( 'enable-custom-model-content', '==', 'true' )
	  ),

	  array(
		'id'              => 'custom-model-tabs',
		'type'            => 'group',
		'title'           => esc_html__('Model Window Tabs', 'vigil'),
		'desc'            => esc_html__('You can create any number of tabs for your model window here:', 'vigil'),
		'button_title'    => esc_html__('Add New Tab', 'vigil'),
		'accordion_title' => esc_html__('Adding New Tab', 'vigil'),
		'dependency'      => array( 'enable-custom-model-content', '==', 'true' ),
		'fields'          => array(
		  array(
			'id'          => 'label',
			'type'        => 'text',
			'title'       => esc_html__('Tab Label', 'vigil')
		  ),
		  array(
			'id'  	 	  => 'content',
			'type'    	  => 'textarea',
			'title'  	  => esc_html__('Tab Content', 'vigil'),
		  ),
		)
	  ),

   ),
);

// ------------------------------
// backup                       
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => esc_html__('Backup', 'vigil'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'vigil')
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// license
// ------------------------------
$options[]   = array(
  'name'     => 'theme_version',
  'title'    => constant('VIGIL_THEME_NAME').esc_html__(' Log', 'vigil'),
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => constant('VIGIL_THEME_NAME').esc_html__(' Theme Change Log', 'vigil')
    ),
    array(
      'type'    => 'content',
      'content' => '<pre>
2017.11.14 - version 1.0
 * First release!

2017.11.16 - version 1.1
 * Updated Dummy data 

2017.11.23 - version 1.2
 * Fixed E-form installation issue
 * Fixed visual composer frontend editor issue  

2018.04.18 - version 1.3
 * Compatible with wordpress 4.9.5
 * Updated bulk plugin install issue
 * Portfolio Archives page issue resolved
 * Packed with - DesignThemes Core Shortcode Plugins 1.1
 * Packed with - Layer Slider 6.7.1
 * Packed with - Revolution Slider 5.4.7.2
 * Packed with - WPBakery Page Builder 5.4.7
 * Packed with - Ultimate Addons for Visual Composer 3.16.22
 * Packed with - eForm - WordPress Form Builder 4.2.1

2018.07.03 - version 1.4
 * Codestar Framework updated to latest version 1.0.2
 * Packed with - Layer Slider 6.7.6
 * Packed with - Revolution Slider 5.4.7.4
 * Packed with - WPBakery Page Builder 5.5.2
 * Packed with - Ultimate Addons for Visual Composer 3.16.24
 * Packed with - Envato Market 2.0.0 
 
 2018.07.16 - version 1.5
 * GDPR Compliant update in comment form, mailchimp form etc.
 
 2018.07.30 - version 1.6
 * Some design fixes.
 * GDPR update for video section.
 * Packed with - Revolution Slider 5.4.8
 
 2018.10.30 - version 1.7
 * Gutenberg plugin compatible
 * Updated latest version of all third party plugins
 * Updated documentation
 * Updated woocommerce outdated files.
</pre>',
    ),

  )
);

// ------------------------------
// Seperator
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => esc_html__('Plugin Options', 'vigil'),
  'icon'   => 'fa fa-plug'
);


CSFramework::instance( $settings, $options );