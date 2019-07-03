<?php
if ( post_password_required() ) {
	return;
}?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>

	    <h3><?php comments_number(esc_html__('No Comments','vigil'), esc_html__('Comment ( 1 )','vigil'), esc_html__('Comments ( % )','vigil') );?></h3>

		<?php the_comments_navigation(); ?>

        <ul class="commentlist">
     		<?php wp_list_comments( array( 'callback' => 'vigil_comment_style' ) ); ?>
        </ul>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="nocomments"><?php esc_html_e( 'Comments are closed.','vigil'); ?></p>
    <?php endif;?>    
	
    <?php
	$comment = "<div class='column dt-sc-one-half first'><textarea id='comment' name='comment' cols='5' rows='3' placeholder='".esc_html__("Comment",'vigil')."' ></textarea></div>";
	$author = "<div class='column dt-sc-one-half'><p><input id='author' name='author' type='text' placeholder='".esc_html__("Name",'vigil')."' required /></p>";
	$email = "<p> <input id='email' name='email' type='text' placeholder='".esc_html__("Email",'vigil')."' required /> </p></div>";

	comment_form();?>

</div><!-- .comments-area -->