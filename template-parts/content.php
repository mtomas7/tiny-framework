<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
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

		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php esc_html_e( 'Featured article', 'tiny-framework' ); ?></h2>
			</header><!-- .page-header -->

		<?php endif; ?>

		<header class="entry-header">

			<?php if ( is_singular() ) : ?>

				<?php the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>

				<link itemprop="mainEntityOfPage" href="<?php the_permalink(); ?>"/>

				<?php tinyframework_excerpt_top(); // Tip41 - Function located in: inc/template-tags.php ?>

				<?php // Tip26 - Print HTML bellow post title with meta information for the current post date/time and author ?>

				<div class="entry-meta">

					<?php
					// Functions located in: inc/template-tags.php
						tinyframework_entry_meta_top();
						tinyframework_edit_link();
					?>

				</div><!-- .entry-meta -->

			<?php else : ?>

				<?php tinyframework_post_thumbnail(); // Tip40 - Function located in: inc/template-tags.php ?>

				<h2 class="entry-title" itemprop="headline">

					<?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark" itemprop="url">', '</a>' ); ?>

					<?php if ( ! post_password_required() && get_comments_number() ) : ?>

						<span class="title-comment-meta">
							<?php
								/* translators: %s: comments number. */
								comments_popup_link( '<span class="leave-reply">' . esc_html__( 'Leave a comment', 'tiny-framework' ) . '</span>', esc_html_x( '1', 'comments number', 'tiny-framework' ), esc_html_x( '%', 'comments number', 'tiny-framework' ) );
							?>
						</span>

					<?php endif; // have comments ?>

				</h2>

				<?php tinyframework_excerpt_top(); // Tip41 - Function located in: inc/template-tags.php ?>

				<?php // Tip26b - Print HTML bellow post title with meta information (date/time and author) for the index/archive views. To show, uncomment CSS rules in style.css ?>

				<div class="entry-meta">

					<?php tinyframework_entry_meta_top(); // Function located in: inc/template-tags.php ?>

				</div><!-- .entry-meta -->

			<?php endif; // is_single() ?>

		</header><!-- .entry-header -->

		<?php if ( is_search() ) : ?>

			<?php tinyframework_excerpt(); // Function located in: inc/template-tags.php ?>

		<?php else : ?>

			<div class="entry-content" itemprop="articleBody">

				<?php
				// Functions located in: inc/template-tags.php
					tinyframework_post_content();
					tinyframework_post_pages_nav();
				?>

			</div><!-- .entry-content -->

		<?php endif; ?>

		<footer class="entry-meta">

			<?php
			// Functions located in: inc/template-tags.php
				tinyframework_entry_meta();
				tinyframework_edit_link();
			?>

			<?php
				// If a user has filled out their description, show a author bio on their entries.
				if ( is_single() && get_the_author_meta( 'description' ) ) :
					get_template_part( 'template-parts/author-bio' );
				endif;
			?>

		</footer><!-- .entry-meta -->

		<?php tha_entry_bottom(); // custom action hook ?>

	</article><!-- #post-<?php the_ID(); ?> -->

	<?php tha_entry_after(); // custom action hook ?>
