<?php
/**
 * Template part used for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */
?>

	<?php tha_entry_before(); // custom action hook ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?><?php tinyframework_semantics( 'post' ); // Function located in: inc/semantics.php ?>>

		<?php tha_entry_top(); // custom action hook ?>

		<header class="entry-header">

			<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>

			<link itemprop="mainEntityOfPage" href="<?php the_permalink(); ?>"/>

		</header>

		<div class="entry-content" itemprop="articleBody">

			<?php the_content(); ?>

			<?php tinyframework_post_pages_nav(); // Function located in: inc/template-tags.php ?>

		</div><!-- .entry-content -->

		<footer class="entry-meta">

			<?php tinyframework_edit_link(); // Function located in: inc/template-tags.php ?>

		</footer><!-- .entry-meta -->

		<?php tha_entry_bottom(); // custom action hook ?>

	</article><!-- #post-<?php the_ID(); ?> -->

	<?php tha_entry_after(); // custom action hook ?>
