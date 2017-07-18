<?php
/**
 * Template Name: Front Page Template
 * Template Post Type: page
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Tiny Framework consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php tha_content_before(); // custom action hook ?>

		<main id="main" class="site-main" itemscope="itemscope" itemprop="mainContentOfPage">

			<?php tha_content_top(); // custom action hook ?>

			<?php while ( have_posts() ) : the_post(); // Start the Loop ?>

				<?php if ( has_post_thumbnail() ) : ?>

					<div class="entry-page-image">

						<?php the_post_thumbnail(); ?>

					</div><!-- .entry-page-image -->

				<?php endif; ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			<?php tha_content_bottom(); // custom action hook ?>

		</main><!-- #main -->

		<?php tha_content_after(); // custom action hook ?>

	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>
