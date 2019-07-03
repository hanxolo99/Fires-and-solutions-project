<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

// -----------------------------------------
// Custom Widgets                    -
// -----------------------------------------
function vigil_custom_widgets() {
  $custom_widgets = array();
  $widgets = is_array( cs_get_option( 'widgetarea-custom' ) ) ? cs_get_option( 'widgetarea-custom' ) : array();
  $widgets = array_filter($widgets);

  if( isset( $widgets ) ):
    foreach ( $widgets as $widget ) :
      $id = mb_convert_case($widget['widgetarea-custom-name'], MB_CASE_LOWER, "UTF-8");
      $id = str_replace(" ", "-", $id);
      $custom_widgets[$id] = $widget['widgetarea-custom-name'];
    endforeach;
  endif;

  return $custom_widgets;
}

// -----------------------------------------
// Layer Sliders
// -----------------------------------------
function vigil_layersliders() {
  $layerslider = array(  esc_html__('Select a slider','vigil') );

  if( vigil_is_plugin_active('LayerSlider/layerslider.php') && class_exists( 'LS_Sliders' )  ) {

    $sliders = LS_Sliders::find(array('limit' => 50));

    if(!empty($sliders)) {
      foreach($sliders as $key => $item){
        $layerslider[ $item['id'] ] = $item['name'];
      }
    }
  }

  return $layerslider;
}

// -----------------------------------------
// Revolution Sliders
// -----------------------------------------
function vigil_revolutionsliders() {
  $revolutionslider = array( '' => esc_html__('Select a slider','vigil') );

  if(vigil_is_plugin_active('revslider/revslider.php') && class_exists( 'RevSlider' )  ) {
    $sld = new RevSlider();
    $sliders = $sld->getArrSliders();
    if(!empty($sliders)){
      foreach($sliders as $key => $item) {
        $revolutionslider[$item->getAlias()] = $item->getTitle();
      }
    }    
  }

  return $revolutionslider;  
}

// -----------------------------------------
// Meta Layout Section
// -----------------------------------------
$meta_layout_section =array(
  'name'  => 'layout_section',
  'title' => esc_html__('Layout', 'vigil'),
  'icon'  => 'fa fa-columns',
  'fields' =>  array(
    array(
      'id'  => 'layout',
      'type' => 'image_select',
      'title' => esc_html__('Page Layout', 'vigil' ),
      'options'      => array(
          'content-full-width'   => VIGIL_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
          'with-left-sidebar'    => VIGIL_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
          'with-right-sidebar'   => VIGIL_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
          'with-both-sidebar'    => VIGIL_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
          'fullwidth'            => VIGIL_THEME_URI . '/cs-framework-override/images/fullwidth.png',
      ),
      'default'      => 'content-full-width',
	  'info'		 => esc_html__('Layout "fullwidth" only apply for portfolio template.', 'vigil'),
      'attributes'   => array( 'data-depend-id' => 'page-layout' )
    ),
    array(
      'id'        => 'show-standard-sidebar-left',
      'type'      => 'switcher',
      'title'     => esc_html__('Show Standard Left Sidebar', 'vigil' ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-left',
      'type'      => 'select',
      'title'     => esc_html__('Choose Left Widget Areas', 'vigil' ),
      'class'     => 'chosen',
      'options'   => vigil_custom_widgets(),
      'attributes'  => array( 
        'multiple'  => 'multiple',
        'data-placeholder' => esc_html__('Select Left Widget Areas','vigil'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'          => 'show-standard-sidebar-right',
      'type'        => 'switcher',
      'title'       => esc_html__('Show Standard Right Sidebar', 'vigil' ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-right',
      'type'      => 'select',
      'title'     => esc_html__('Choose Right Widget Areas', 'vigil' ),
      'class'     => 'chosen',
      'options'   => vigil_custom_widgets(),
      'attributes'    => array( 
        'multiple' => 'multiple',
        'data-placeholder' => esc_html__('Select Right Widget Areas','vigil'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    )
  )
);

// -----------------------------------------
// Meta Breadcrumb Section
// -----------------------------------------
$meta_breadcrumb_section = array(
  'name'  => 'breadcrumb_section',
  'title' => esc_html__('Breadcrumb', 'vigil'),
  'icon'  => 'fa fa-arrows-h',
  'fields' =>  array(
    array(
      'id'      => 'enable-sub-title',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Breadcrumb', 'vigil' ),
      'default' => true
    ),
    array(
      'id'    => 'breadcrumb_background',
      'type'  => 'background',
      'title' => esc_html__('Background', 'vigil' ),
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),
  )
);

// -----------------------------------------
// Meta Slider Section
// -----------------------------------------
$meta_slider_section = array(
  'name'  => 'slider_section',
  'title' => esc_html__('Slider', 'vigil'),
  'icon'  => 'fa fa-slideshare',
  'fields' =>  array(
    array(
      'id'           => 'slider-notice',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => __('Slider tab works only if breadcrumb disabled.','vigil'),
      'class'        => 'margin-30 cs-danger',
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),

    array(
      'id'           => 'show_slider',
      'type'         => 'switcher',
      'title'        => esc_html__('Show Slider', 'vigil' ),
      'dependency'   => array( 'enable-sub-title', '==', 'false' ),
    ),

    array(
      'id'                 => 'slider_type',
      'type'               => 'select',
      'title'              => esc_html__('Slider', 'vigil' ),
      'options'            => array(
        ''                 => esc_html__('Select a slider','vigil'),
        'layerslider'      => esc_html__('Layer slider','vigil'),
        'revolutionslider' => esc_html__('Revolution slider','vigil'),
        'customslider'     => esc_html__('Custom Slider Shortcode','vigil'),
      ),
      'validate' => 'required',
      'dependency'         => array( 'enable-sub-title|show_slider', '==|==', 'false|true' ),
    ),

    array(
      'id'          => 'layerslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Layer Slider', 'vigil' ),
      'options'     => vigil_layersliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|layerslider' )
    ),

    array(
      'id'          => 'revolutionslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Revolution Slider', 'vigil' ),
      'options'     => vigil_revolutionsliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|revolutionslider' )
    ),

    array(
      'id'          => 'customslider_sc',
      'type'        => 'textarea',
      'title'       => esc_html__('Custom Slider Code', 'vigil' ),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|customslider' )
    ),
  )  
);

// -----------------------------------------
// Blog Template Section
// -----------------------------------------
$blog_template_section = array(
  'name'  => 'blog_template_section',
  'title' => esc_html__('Blog Template', 'vigil'),
  'icon'  => 'fa fa-files-o',
  'fields' =>  array(
    array(
      'id'           => 'blog-tpl-notice',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => __('Blog Tab Works only if page template set to Blog Template in Page Attributes','vigil'),
      'class'        => 'margin-30 cs-success',      
    ),
    array(
      'id'                     => 'blog-post-layout',
      'type'                   => 'image_select',
      'title'                  => esc_html__('Post Layout', 'vigil' ),
      'options'                => array(
          'one-column'         => VIGIL_THEME_URI . '/cs-framework-override/images/one-column.png',
          'one-half-column'    => VIGIL_THEME_URI . '/cs-framework-override/images/one-half-column.png',
          'one-third-column'   => VIGIL_THEME_URI . '/cs-framework-override/images/one-third-column.png',
		  '1-2-2'			   => VIGIL_THEME_URI . '/cs-framework-override/images/1-2-2.png',
		  '1-2-2-1-2-2' 	   => VIGIL_THEME_URI . '/cs-framework-override/images/1-2-2-1-2-2.png',
		  '1-3-3-3'			   => VIGIL_THEME_URI . '/cs-framework-override/images/1-3-3-3.png',
		  '1-3-3-3-1' 		   => VIGIL_THEME_URI . '/cs-framework-override/images/1-3-3-3-1.png',
      ),
      'default'                => 'one-half-column'
    ),
    array(
      'id'                     => 'blog-post-style',
      'type'                   => 'select',
      'title'                  => esc_html__('Post Style', 'vigil' ),
      'options'                => array(
        'blog-default-style' => esc_html__('Default','vigil'),
        'entry-date-left'    => esc_html__('Date Left','vigil'),
        'entry-date-author-left' => esc_html__('Date and Author Left','vigil'),
        'blog-medium-style'  => esc_html__('Medium','vigil'),
        'blog-medium-style dt-blog-medium-highlight' => esc_html__('Medium Highlight','vigil'),
        'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight' => esc_html__('Medium Skin Highlight','vigil')
      ),
    ),
    array(
      'id'      => 'enable-blog-readmore',
      'type'    => 'switcher',
      'title'   => esc_html__('Read More', 'vigil' ),
      'default' => true
    ),
    array(
      'id'           => 'blog-readmore',
      'type'         => 'textarea',
      'title'        => esc_html__('Read More Shortcode', 'vigil' ),
      'default'      => '[dt_sc_button title="Read More" style="filled" icon_type="fontawesome" iconalign="icon-right with-icon" iconclass="fa fa-long-arrow-right" class="type1" /]',
      'dependency'   => array( 'enable-blog-readmore', '==', 'true' ),
    ),
    array(
      'id'      => 'blog-post-excerpt',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Excerpt', 'vigil' ),
      'default' => true
    ),
    array(
      'id'           => 'blog-post-excerpt-length',
      'type'         => 'number',
      'title'        => esc_html__('Excerpt Length', 'vigil' ),
      'default'      => '45',
      'dependency'   => array( 'blog-post-excerpt', '==', 'true' ),
    ),
    array(
      'id'           => 'blog-post-per-page',
      'type'         => 'number',
      'title'        => esc_html__('Post Per Page', 'vigil' ),
      'default'      => '-1',      
    ),
    array(
      'id'             => 'blog-post-cats',
      'type'           => 'select',
      'title'          => esc_html__('Categories','vigil'),
      'options'        => 'categories',
      'default_option' => esc_html__('Select a categories','vigil'),
      'class'              => 'chosen',
      'attributes'         => array(
        'multiple'         => 'only-key',
        'style'            => 'width: 200px;'
      ),
      'info'           => esc_html__('Select categories to exclude from your blog page.','vigil'),
    ),
    array(
      'id'      => 'show-postformat-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Format Info', 'vigil' ),
      'default' => true
    ),
    array(
      'id'      => 'show-author-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Author Info', 'vigil' ),
      'default' => true,
    ),
    array(
      'id'      => 'show-date-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Date Info', 'vigil' ),
      'default' => true
    ),
    array(
      'id'      => 'show-comment-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Comment Info', 'vigil' ),
      'default' => true
    ),
    array(
      'id'      => 'show-category-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Category Info', 'vigil' ),
      'default' => true
    ),
    array(
      'id'      => 'show-tag-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Tag Info', 'vigil' ),
      'default' => true
    )    
  )
);

// -----------------------------------------
// One Page Template Section
// -----------------------------------------
$one_page_template_section = array(
  'name'  => 'one_page_template_section',
  'title' => esc_html__('One Page Template', 'vigil'),
  'icon'  => 'fa fa-file-o',
  'fields' =>  array(
    array(
      'id'           => 'one-page-tpl-notice',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => __('One Page Tab Works only if page template set to One Page Template in Page Attributes','vigil'),
      'class'        => 'margin-30 cs-success',      
    ),
    array(
      'id'            => 'onepage_menu',
      'type'          => 'select',
      'title'         => esc_html__('Menu', 'vigil' ),
      'options'       => 'categories',
      'query_args'  => array(
        'post_type' => 'nav_menu_item',
        'taxonomy'  => 'nav_menu',
      ),
      'default_option' => esc_html__('Select a Menu','vigil'),
    ),
  )
);

// -----------------------------------------
// Portfolio Template Section
// -----------------------------------------
$portfolio_template_section = array(
  'name'  => 'portfolio_template_section',
  'title' => esc_html__('Portfolio Template', 'vigil'),
  'icon'  => 'fa fa-picture-o',
  'fields' =>  array(

    array(
      'id'           => 'portfolio-tpl-notice',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => __('Portfolio Tab Works only if page template set to Portfolio Template in Page Attributes','vigil'),
      'class'        => 'margin-30 cs-success',      
    ),

    array(
      'id'                     => 'portfolio-post-layout',
      'type'                   => 'image_select',
      'title'                  => esc_html__('Post Layout', 'vigil' ),
      'options'                => array(
          'one-half-column'    => VIGIL_THEME_URI . '/cs-framework-override/images/one-half-column.png',
          'one-third-column'   => VIGIL_THEME_URI . '/cs-framework-override/images/one-third-column.png',
          'one-fourth-column'  => VIGIL_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
      ),
      'default'                => 'one-half-column'
    ),

    array(
      'id'      => 'portfolio-post-style',
      'type'    => 'select',
      'title'   => esc_html__('Post Style', 'vigil' ),
      'options' => array(
        'type1' => esc_html__('Modern Title','vigil'),
        'type2' => esc_html__('Title & Icons Overlay','vigil'),
        'type3' => esc_html__('Title Overlay','vigil'),
        'type4' => esc_html__('Icons Only','vigil'),
        'type5' => esc_html__('Classic','vigil'),
        'type6' => esc_html__('Minimal Icons','vigil'),
        'type7' => esc_html__('Presentation','vigil'),
        'type8' => esc_html__('Girly','vigil'),
        'type9' => esc_html__('Art','vigil'),
      ),
    ),

    array(
      'id'      => 'portfolio-grid-space',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Grid Space', 'vigil' ),
      'default' => true,
      'info'    => esc_html__('YES! to allow grid space in between portfolio item','vigil')
    ),

    array(
      'id'      => 'filter',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Filters', 'vigil' ),
      'default' => true,
      'info'    => esc_html__('YES! to allow filter options for portfolio items','vigil')
    ),

    array(
      'id'           => 'portfolio-post-per-page',
      'type'         => 'number',
      'title'        => esc_html__('Post Per Page', 'vigil' ),
      'default'      => '-1',      
    ),

    array(
      'id'             => 'portfolio-categories',
      'type'           => 'select',
      'title'          => esc_html__('Categories','vigil'),
      'options'        => 'categories',
      'class'          => 'chosen',
      'query_args'     => array(
        'type'         => 'dt_portfolios',
        'taxonomy'     => 'portfolio_entries',
        'orderby'      => 'post_date',
        'order'        => 'DESC',
      ),
      'attributes'         => array(
        'data-placeholder' => esc_html__('Select a categories','vigil'),
        'multiple'         => 'only-key',
        'style'            => 'width: 200px;'
      ),
      'info'           => esc_html__('Select categories to show in portfolio items.','vigil'),
    ),   
  )
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
array_push( $meta_layout_section['fields'], array(
  'id'        => 'enable-sticky-sidebar',
  'type'      => 'switcher',
  'title'     => esc_html__('Enable Sticky Sidebar', 'vigil' ),
  'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar,with-both-sidebar' )
) );

$options[] = array(
	'id'        => '_tpl_default_settings',
    'title'     => esc_html__('Page Settings','vigil'),
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
		$meta_layout_section,
		$meta_breadcrumb_section,
		$meta_slider_section,

		$blog_template_section,
		//$one_page_template_section,
		$portfolio_template_section,
		array(
		  'name'  => 'sidenav_template_section',
		  'title' => esc_html__('Side Navigation Template', 'vigil'),
		  'icon'  => 'fa fa-th-list',
		  'fields' =>  array(

			array(
			  'id'           => 'sidenav-tpl-notice',
			  'type'         => 'notice',
			  'class'        => 'success',
			  'content'      => esc_html__('Side Navigation Tab Works only if page template set to Side Navigation Template in Page Attributes','vigil'),
			  'class'        => 'margin-30 cs-success',      
			),

			array(
			  'id'    		 => 'sidenav-align',
			  'type'    	 => 'switcher',
			  'title'   	 => esc_html__('Align Right', 'vigil' ),
			  'info'    	 => esc_html__('YES! to align right of side navigation.','vigil')
			),

			array(
			  'id'    		 => 'sidenav-sticky',
			  'type'    	 => 'switcher',
			  'title'   	 => esc_html__('Sticky Side Navigation', 'vigil' ),
			  'info'    	 => esc_html__('YES! to sticky side navigation content.','vigil')
			),

			array(
			  'id'    		 => 'enable-sidenav-content',
			  'type'    	 => 'switcher',
			  'title'   	 => esc_html__('Show Content', 'vigil' ),
			  'info'    	 => esc_html__('YES! to show content in below side navigation.','vigil')
			),

			array(
			  'id'	    	 => 'sidenav-content',
			  'type'	     => 'textarea',
			  'title'  		 => esc_html__('Side Navigation Content', 'vigil' ),
			  'info'    	 => esc_html__('Paste any shortcode content here','vigil'),
			  'attributes' 	 => array(
				  'rows'     => 6,
			  ),
			),

		  )
		),
    )
);

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$post_meta_layout_section = $meta_layout_section;
$fields = $post_meta_layout_section['fields'];

	$fields[0]['title'] =  esc_html__('Post Layout', 'vigil' );
	unset( $fields[0]['options']['with-both-sidebar'] );
	unset( $fields[0]['info'] );
	unset( $fields[0]['options']['fullwidth'] );
	unset( $fields[5] );
	unset( $post_meta_layout_section['fields'] );
	$post_meta_layout_section['fields']  = $fields;  

	$post_format_section = array(
		'name'  => 'post_format_data_section',
		'title' => esc_html__('Post Format', 'vigil'),
		'icon'  => 'fa fa-cog',
		'fields' =>  array(

			array(
				'id'      => 'show-featured-image',
				'type'    => 'switcher',
				'title'   => esc_html__('Show Featured Image', 'vigil' ),
				'default' => true,
				'info'    => esc_html__('YES! to show featured image','vigil')
			),

			array(
				'id'           => 'single-post-style',
				'type'         => 'select',
				'title'        => esc_html__('Post Style', 'vigil'),
				'options'      => array(
				  'standard'      		=> esc_html__('Standard', 'vigil'),
				  'info-within-image'   => esc_html__('Info WithIn Image', 'vigil'),
				  'info-bottom-image'   => esc_html__('Info Over Image Bottom Left', 'vigil'),
				  'info-vertical-image' => esc_html__('Info Over Image Vertically Center', 'vigil'),
				  'info-above-image'    => esc_html__('Info Above Image', 'vigil'),
				),
				'class'        => 'chosen',
				'default'      => 'standard',
				'info'         => esc_html__('Choose post style to display single post.', 'vigil')
			),

			array(
			    'id'           => 'view_count',
			    'type'         => 'text',
			    'title'        => esc_html__('Views', 'vigil' ),
				'info'         => esc_html__('No.of views of this post.', 'vigil')
			),

			array(
			    'id'           => 'like_count',
			    'type'         => 'text',
			    'title'        => esc_html__('Likes', 'vigil' ),
				'info'         => esc_html__('No.of likes of this post.', 'vigil')
			),

			array(
				'id' => 'post-format-type',
				'title'   => esc_html__('Type', 'vigil' ),
				'type' => 'select',
				'default' => 'standard',
				'options' => array(
					'standard'  => esc_html__('Standard', 'vigil'),
					'status'	=> esc_html__('Status','vigil'),
					'quote'		=> esc_html__('Quote','vigil'),
					'gallery'	=> esc_html__('Gallery','vigil'),
					'image'		=> esc_html__('Image','vigil'),
					'video'		=> esc_html__('Video','vigil'),
					'audio'		=> esc_html__('Audio','vigil'),
					'link'		=> esc_html__('Link','vigil'),
					'aside'		=> esc_html__('Aside','vigil'),
					'chat'		=> esc_html__('Chat','vigil')
				)
			),

			array(
				'id' 	  => 'post-gallery-items',
				'type'	  => 'gallery',
				'title'   => esc_html__('Add Images', 'vigil' ),
				'add_title'   => esc_html__('Add Images', 'vigil' ),
				'edit_title'  => esc_html__('Edit Images', 'vigil' ),
				'clear_title' => esc_html__('Remove Images', 'vigil' ),
				'dependency' => array( 'post-format-type', '==', 'gallery' ),
			),

			array(
				'id' 	  => 'media-type',
				'type'	  => 'select',
				'title'   => esc_html__('Select Type', 'vigil' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
		      	'options'	=> array(
					'oembed' => esc_html__('Oembed','vigil'),
					'self' => esc_html__('Self Hosted','vigil'),
				)
			),

			array(
				'id' 	  => 'media-url',
				'type'	  => 'textarea',
				'title'   => esc_html__('Media URL', 'vigil' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
			),
		)
	);

	$options[] = array(
		'id'        => '_dt_post_settings',
		'title'     => esc_html__('Post Settings','vigil'),
		'post_type' => 'post',
		'context'   => 'normal',
		'priority'  => 'high',
		'sections'  => array(
			$post_meta_layout_section,
			$meta_breadcrumb_section,
			$post_format_section			
		)
	);

// -----------------------------------------
// Tribe Events Post Metabox Options
// -----------------------------------------
  array_push( $post_meta_layout_section['fields'], array(
    'id' => 'event-post-style',
    'title'   => esc_html__('Post Style', 'vigil' ),
    'type' => 'select',
    'default' => 'type1',
    'options' => array(
      'type1'  => esc_html__('Classic', 'vigil'),
      'type2'  => esc_html__('Full Width','vigil'),
      'type3'  => esc_html__('Minimal Tab','vigil'),
      'type4'  => esc_html__('Clean','vigil'),
      'type5'  => esc_html__('Modern','vigil'),
    ),
	'class'    => 'chosen',
	'info'     => esc_html__('Your event post page show at most selected style.', 'vigil')
  ) );

  $options[] = array(
    'id'        => '_custom_settings',
    'title'     => esc_html__('Settings','vigil'),
    'post_type' => 'tribe_events',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
      $post_meta_layout_section,
      $meta_breadcrumb_section
    )
  );

	
CSFramework_Metabox::instance( $options );