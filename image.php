<?php
/**
 * The template for displaying image attachments
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area" itemscope="itemscope" itemtype="https://schema.org/ImageObject">

		<?php tha_content_before(); // custom action hook ?>

		<main id="main" class="site-main" itemscope="itemscope" itemprop="mainContentOfPage">

			<?php tha_content_top(); // custom action hook ?>

		<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
		?>

			<?php tha_entry_before(); // custom action hook ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'image-attachment' ); ?><?php tinyframework_semantics( 'post' ); // Function located in: inc/semantics.php ?>>

				<?php tha_entry_top(); // custom action hook ?>

				<header class="entry-header">

					<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>

					<link itemprop="mainEntityOfPage" href="<?php the_permalink(); ?>"/>

				</header><!-- .entry-header -->

				<div class="entry-content">

					<div class="entry-attachment">

						<?php
							/* Filter the default Tiny Framework image attachment size.
							 *
							 * @since Tiny Framework 2.0.2
							 *
							 * @param string $image_size Image size. To retrieve 'full' image size, use:
							 *
							 * $image_size = apply_filters( 'tinyframework_attachment_size', 'full' );
							 */

							$image_size = apply_filters( 'tinyframework_attachment_size', array( 960, 960 ) );

							echo wp_get_attachment_image( get_the_ID(), $image_size );
						?>

					<?php tinyframework_excerpt( 'entry-caption' ); // Function located in: inc/template-tags.php ?>

					</div><!-- .entry-attachment -->

					<div class="entry-description">

						<?php
						// Tip34  - Uncomment next line if you want to display image Description field content.
							// the_content();
						?>

					</div><!-- .entry-description -->

					<?php tinyframework_post_pages_nav(); // Function located in: inc/template-tags.php ?>

				</div><!-- .entry-content -->

				<footer class="entry-meta">

					<?php
					// Functions located in: inc/template-tags.php
						tinyframework_entry_meta();
						tinyframework_edit_link();
					?>

				</footer><!-- .entry-meta -->

				<?php tha_entry_bottom(); // custom action hook ?>

			</article><!-- #post -->

			<?php tha_entry_after(); // custom action hook ?>

			<nav id="image-navigation" class="navigation image-navigation">
				<div class="nav-links">
					<div class="nav-previous"><?php previous_image_link( false, esc_html__( 'Previous image', 'tiny-framework' ) ); ?></div><div class="nav-next"><?php next_image_link( false, esc_html__( 'Next image', 'tiny-framework' ) ); ?></div>
				</div><!-- .nav-links -->
			</nav><!-- .image-navigation -->

			<?php comments_template(); ?>

		<?php endwhile; // end of the loop. ?>

		<?php tha_content_bottom(); // custom action hook ?>

		</main><!-- .site-main -->

		<?php tha_content_after(); // custom action hook ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
