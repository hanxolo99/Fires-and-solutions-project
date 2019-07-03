<?php
class vigil_likes_Love {
	
	function __construct() {
		add_action( 'wp_ajax_vigil_like_love', array( &$this, 'vigil_likes_ajax' ) );
		add_action( 'wp_ajax_nopriv_vigil_like_love', array( &$this, 'vigil_likes_ajax' ) );
	}

	function vigil_likes_ajax( $post_id ) {

		if ( isset( $_POST['post_id'] ) ) {
			echo ($this->vigil_likes_love( intval($_POST['post_id']), 'update' ));
		} else {
			echo ($this->vigil_likes_love( intval($_POST['post_id']), 'get' ));
		}
		exit;
	}
	
	function vigil_likes_love( $post_id, $action = 'get' ) {
		if ( ! is_numeric( $post_id ) ) return;

		switch ( $action ) {

			case 'get':
				$love_count = get_post_meta( $post_id, 'dt-themes-post-love', true );
				if ( !$love_count ) {
					$love_count = 0;
					add_post_meta( $post_id, 'dt-themes-post-love', $love_count, true );
				}
	
				return $love_count;
			break;

			case 'update':
				$love_count = get_post_meta( $post_id, 'dt-themes-post-love', true );
				if ( isset( $_COOKIE['dt-themes-post-love-'. $post_id] ) ) return $love_count;

				$love_count++;
				update_post_meta( $post_id, 'dt-themes-post-love', $love_count );
				setcookie( 'dt-themes-post-love-'. $post_id, $post_id, time()*20, '/' );

				return $love_count;
			break;

		}
	}

	function vigil_likes_get() {
		global $post;

		$output = $this->vigil_likes_love( $post->ID );
		$class = '';
		if ( isset( $_COOKIE['dt-themes-post-love-'. $post->ID] ) ) {
			$class = 'liked';
		}

		return '<a href="#" class="dt-like-this fa fa-heart-o '. $class .'" data-id="'. $post->ID .'"><span>'. $output .'</span></a>';
		
	}
}

$vigil_like_love = vigil_global_variables('vigil_like_love');
$vigil_like_love = new vigil_likes_Love();

function vigil_like_love( $return = '' ) {	
	
	global $vigil_like_love;
	return $vigil_like_love->vigil_likes_get();
}?>