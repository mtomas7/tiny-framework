<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Tiny_Framework
 * @since Tiny Framework 2.0.2
 */
?>

	<?php tha_entry_before(); // custom action hook ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?><?php tinyframework_semantics( 'post' ); // Function located in: inc/semantics.php ?>>

		<?php tha_entry_top(); // custom action hook ?>

		<header class="entry-header">

			<?php the_title( '<h2 class="entry-title" itemprop="headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" itemprop="url">', '</a></h2>' ); ?>

		</header><!-- .entry-header -->

		<?php tinyframework_excerpt(); // Function located in: inc/template-tags.php ?>

		<?php if ( 'post' === get_post_type() ) : ?>

			<footer class="entry-meta">

				<?php
				// Functions located in: inc/template-tags.php
					tinyframework_entry_meta();
					tinyframework_edit_link();
				?>

			</footer><!-- .entry-meta -->

		<?php else : ?>

			<footer class="entry-meta">

				<?php tinyframework_edit_link(); // Function located in: inc/template-tags.php ?>

			</footer><!-- .entry-meta -->

		<?php endif; ?>

		<?php tha_entry_bottom(); // custom action hook ?>

	</article><!-- #post -->

	<?php tha_entry_after(); // custom action hook ?>
