<?php
/**
 * This template is used for displaying comments in posts
 *
 * @package Layers
 * @since Layers 1.0.0
 */

if ( post_password_required() ) {
	return;
}

do_action('layers_before_comments'); ?>
<div id="comments" <?php echo layers_wrapper_class( 'comment_container', 'push-top-large' ); ?>>
	<?php if ( have_comments() ) { ?>
		<?php comment_form();  ?>
		<div <?php layers_wrapper_class( 'comment_list', 'comment-list clearfix' ); ?>>
			<?php wp_list_comments( array( 'callback' => 'layers_comment', 'style' => 'div' ) ); ?>
		</div><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) { // are there comments to navigate through ?>
			<nav id="comment-nav-below" class="pagination" role="navigation">
				<div class="previous"><?php previous_comments_link( __( '&larr;' , 'layerswp' ) ); ?></div>
				<div class="next"><?php next_comments_link( __( '&rarr;' , 'layerswp' ) ); ?></div>
			</nav>
		<?php } // check for comment navigation ?>
	<?php }
	/* If there are no comments and comments are closed, let's leave a note.
	 * But we only want the note on posts and pages that had comments in the first place.
	 */
	if ( !is_page() && ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Komentar dimatikan.' , 'layerswp' ); ?></p>
	<?php endif; ?>

</div><!-- #comments .comments-area -->
<?php do_action('layers_after_comments');
