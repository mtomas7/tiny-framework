<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to tinyframework_comment() which is
 * located in the inc/template-tags.php file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */

/* If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<?php tha_comments_before(); // custom action hook ?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here - including this comment!
	if ( have_comments() ) : ?>

		<h2 class="comments-title">
			<?php
				$comment_count = get_comments_number();
				if ( 1 === $comment_count ) {
					printf(
						/* translators: 1: title. */
						esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'tiny-framework' ),
						'<span>' . get_the_title() . '</span>'
					);
				} else {
					printf( // WPCS: XSS OK.
						/* translators: 1: comment count number, 2: title. */
						esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'tiny-framework' ) ),
						number_format_i18n( $comment_count ),
						'<span>' . get_the_title() . '</span>'
					);
				}
			?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php wp_list_comments( array(
				'callback' => 'tinyframework_comment', // Function located in: inc/template-tags.php
				'style'    => 'ol',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

		<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'tiny-framework' ); ?></p>

		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments .comments-area -->

<?php tha_comments_after(); // custom action hook ?>
