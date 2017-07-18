<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php tha_content_before(); // custom action hook ?>

		<main id="main" class="site-main" itemscope="itemscope" itemprop="mainContentOfPage">

			<?php tha_content_top(); // custom action hook ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );
			?>

				<?php
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text'      => '<span class="screen-reader-text">' . esc_html__( 'Next article:', 'tiny-framework' ) . '</span>' .
						'<span class="post-title">%title</span>',
					'prev_text'      => '<span class="screen-reader-text">' . esc_html__( 'Previous article:', 'tiny-framework' ) . '</span>' .
						'<span class="post-title">%title</span>',
					// Tip91 - Set Next and Previous post links to be from the same category as current post.
					'in_same_term'   => false,      // Whether link should be in a same taxonomy term. Default false. To activate, set to true.
					'excluded_terms' => '',         // Array or comma-separated list of excluded term IDs. Default empty.
					'taxonomy'       => 'category', // Taxonomy, if `$in_same_term` is true. Default 'category'.
				) );
				?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template( '', true );
				endif;
				?>

			<?php
			// End the loop.
			endwhile;
			?>

			<?php tha_content_bottom(); // custom action hook ?>

		</main><!-- .site-main -->

		<?php tha_content_after(); // custom action hook ?>

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
