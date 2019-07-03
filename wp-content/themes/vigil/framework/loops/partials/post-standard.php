<?php
	global $post;

	$show_author_meta = cs_get_option( 'post-author-meta' );
	$show_author_meta = !empty( $show_author_meta ) ? "" : "hidden";

	$show_date_meta = cs_get_option( 'post-date-meta' );
	$show_date_meta = !empty( $show_date_meta ) ? "" : "hidden";	

	$show_comment_meta = cs_get_option( 'post-comment-meta' );
	$show_comment_meta = !empty( $show_comment_meta ) ? "" : "hidden";

	$show_category_meta = cs_get_option( 'post-category-meta' );
	$show_category_meta = !empty( $show_category_meta ) ? "" : "hidden";

	$show_tag_meta = cs_get_option( 'post-tag-meta' );
	$show_tag_meta = !empty( $show_tag_meta ) ? "" : "hidden"; ?>

	<!-- Featured Image -->
	<div class="entry-thumb"><?php get_template_part( 'framework/loops/partials/entry', 'thumb' ); ?></div>
	<!-- Featured Image -->

	<!-- .entry-details -->
	<div class="entry-details">
	  <!-- .entry-meta -->
	  <div class="entry-meta"><?php
		  $categories = get_the_category();
		  if ( ! empty( $categories ) ):?>
			  <p class="<?php echo esc_attr( $show_category_meta );?> category"><i class="zmdi zmdi-device-hub zmdi-hc-fw"> </i> <?php the_category(' '); ?></p><?php
		  endif;?>

		  <div class="entry-info">
			  <div class="author <?php echo esc_attr( $show_author_meta );?>"><i class="zmdi zmdi-account-box zmdi-hc-fw"> </i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" title="<?php esc_attr_e('View all posts by ', 'vigil'); echo get_the_author();?>"><?php echo get_the_author();?></a></div>

			  <div class="date <?php echo esc_attr($show_date_meta);?>"><i class="zmdi zmdi-calendar zmdi-hc-fw"> </i><?php echo get_the_date('F');?> <?php echo get_the_date('d,');?> <?php echo get_the_date('Y');?></div>

			  <div class="comments <?php echo esc_attr($show_comment_meta);?>"><?php
				  comments_popup_link('<i class="zmdi zmdi-comment-list zmdi-hc-fw"> </i> 0'.esc_html__('comments', 'vigil'), '<i class="zmdi zmdi-comment-list zmdi-hc-fw"> </i> 1'.esc_html__('comment', 'vigil'), '<i class="zmdi zmdi-comment-list zmdi-hc-fw"> </i> %'.esc_html__('comments', 'vigil'), '', '<i class="zmdi zmdi-comment-list zmdi-hc-fw"> </i>'.esc_html('comments off', 'vigil'));?></div>

			  <?php if( vigil_is_plugin_active('designthemes-core-features/designthemes-core-features.php') && class_exists( 'DTCorePlugin' ) ){ ?>
              			<div class="views"><i class="zmdi zmdi-eye zmdi-hc-fw"> </i> <?php echo do_shortcode('[dt_sc_post_view_count post_id="'.$post->ID.'" /]'); ?> </div>
              <?php } ?>
              
              <?php if( vigil_is_plugin_active('designthemes-core-features/designthemes-core-features.php') && class_exists( 'DTCorePlugin' ) ){ ?>
                      <div class="likes dt_like_btn">
                          <i class="zmdi zmdi-favorite-outline zmdi-hc-fw"> </i>
                          <a href="#" data-postid="<?php the_ID(); ?>" data-action="like">
                            <i><?php echo do_shortcode('[dt_sc_post_like_count post_id="'.$post->ID.'" /]'); ?></i>
                          </a>
                      </div>
              <?php } ?>
		  </div>
	  </div><!-- .entry-meta -->

	  <div class="entry-body">
		 <?php the_content();?>
		 <?php wp_link_pages( array( 'before'=>'<div class="page-link">', 'after'=>'</div>', 'link_before'=>'<span>', 'link_after'=>'</span>', 'next_or_number'=>'number',
						  'pagelink' => '%', 'echo' => 1 ) );?>
	  </div>

	  <!-- Category & Tag -->
	  <div class="entry-meta-data">
		 <?php the_tags("<p class='tags {$show_tag_meta}'><span>".esc_html__('Tag List', 'vigil')."</span> ",' ',"</p>"); ?>
	  </div><!-- Category & Tag -->

      <!-- Share -->
      <?php if( vigil_is_plugin_active('designthemes-core-features/designthemes-core-features.php') && class_exists( 'DTCorePlugin' )  ){ 
      			echo do_shortcode('[dt_sc_post_social_share post_id="'.$post->ID.'" /]');
	  		} ?><!-- Share -->

	  <?php edit_post_link( esc_html__( ' Edit ','vigil' ) ); ?>
	</div><!-- .entry-details -->