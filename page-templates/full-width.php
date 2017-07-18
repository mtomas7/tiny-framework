<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 * Template Post Type: page, post
 *
 * Description: Tiny Framework loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
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
			// Start the Loop
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template( '', true );
				endif;

			// End the loop.
			endwhile;
			?>

			<?php tha_content_bottom(); // custom action hook ?>

		</main><!-- #main -->

		<?php tha_content_after(); // custom action hook ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
