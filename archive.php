<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Tiny Framework
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives. You can find these examples in inc/examples.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">

		<?php tha_content_before(); // custom action hook ?>

		<main id="main" class="site-main" itemscope="itemscope" itemprop="mainContentOfPage">

			<?php tha_content_top(); // custom action hook ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title" itemprop="headline">', '</h1>' );
					the_archive_description( '<div class="archive-description" itemprop="description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			// Start the Loop
			while ( have_posts() ) : the_post();

				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;
			?>

			<?php tinyframework_archive_page_nav(); // Function located in: inc/template-tags.php ?>

		<?php else : // If no content, include the "No posts found" template. ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // end have_posts() check ?>

			<?php tha_content_bottom(); // custom action hook ?>

		</main><!-- .site-main -->

		<?php tha_content_after(); // custom action hook ?>

	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
