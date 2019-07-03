<?php
/* ---------------------------------------------------------------------------
 * Hook of Top
 * --------------------------------------------------------------------------- */
function vigil_hook_top() {
	if( cs_get_option( 'enable-top-hook' ) ) :
		echo '<!-- vigil_hook_top -->';
			$hook = cs_get_option( 'top-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- vigil_hook_top -->';
	endif;	
}
add_action( 'vigil_hook_top', 'vigil_hook_top' );


/* ---------------------------------------------------------------------------
 * Hook of Content before
 * --------------------------------------------------------------------------- */
function vigil_hook_content_before() {
	if( cs_get_option( 'enable-content-before-hook' ) ) :
		echo '<!-- vigil_hook_content_before -->';
			$hook = cs_get_option( 'content-before-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- vigil_hook_content_before -->';
	endif;
}
add_action( 'vigil_hook_content_before', 'vigil_hook_content_before' );


/* ---------------------------------------------------------------------------
 * Hook of Content after
 * --------------------------------------------------------------------------- */
function vigil_hook_content_after() {
	if( cs_get_option( 'enable-content-after-hook' ) ) :
		echo '<!-- vigil_hook_content_after -->';
			$hook = cs_get_option( 'content-after-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- vigil_hook_content_after -->';
	endif;
}
add_action( 'vigil_hook_content_after', 'vigil_hook_content_after' );


/* ---------------------------------------------------------------------------
 * Hook of Bottom
 * --------------------------------------------------------------------------- */
function vigil_hook_bottom() {
	if( cs_get_option( 'enable-bottom-hook' ) ) :
		echo '<!-- vigil_hook_bottom -->';
			$hook = cs_get_option( 'bottom-hook' );
			$hook = do_shortcode( stripslashes($hook) );
			if (!empty($hook))
				echo ( $hook );
		echo '<!-- vigil_hook_bottom -->';
	endif;
}
add_action( 'vigil_hook_bottom', 'vigil_hook_bottom' );?>