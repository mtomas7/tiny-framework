<?php
/**
 * Template part for displaying posts in the Status post format
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */
?>

	<?php tha_entry_before(); // custom action hook ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?><?php tinyframework_semantics( 'post' ); // Function located in: inc/semantics.php ?>>

		<?php tha_entry_top(); // custom action hook ?>

		<div class="entry-header">

			<header>
				<?php
					if ( is_single() ) :
						the_title( '<h1 class="entry-title screen-reader-text" itemprop="headline">', '</h1><link itemprop="mainEntityOfPage" href="' . esc_url( get_permalink() ) . '">' );
					else :
						the_title( '<h2 class="entry-title screen-reader-text" itemprop="headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" itemprop="url">', '</a></h2>' );
					endif;
				?>
				<h2><?php the_author(); ?></h2>
				<div><a href="<?php the_permalink(); ?>" title="<?php
					/* translators: %s: Post publishing date linked to post. */
					echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'tiny-framework' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark" itemprop="url"><?php echo esc_html( get_the_date() ); ?></a></div>
			</header>

			<?php
			/* Filter the status avatar size.
			 *
			 * @since Tiny Framework 1.0
			 *
			 * @param int $size The height and width of the avatar in pixels.
			 */
			$status_avatar = apply_filters( 'tinyframework_status_avatar', 56 );
			echo get_avatar( get_the_author_meta( 'user_email' ), $status_avatar );
			?>

		</div><!-- .entry-header -->

		<div class="entry-content" itemprop="articleBody">

			<?php tinyframework_post_content(); // Function located in: inc/template-tags.php ?>

		</div><!-- .entry-content -->

		<footer class="entry-meta">

			<?php
			// Functions located in: inc/template-tags.php
				tinyframework_entry_meta();
				tinyframework_edit_link();
			?>

		</footer><!-- .entry-meta -->

		<?php tha_entry_bottom(); // custom action hook ?>

	</article><!-- #post-<?php the_ID(); ?> -->

	<?php tha_entry_after(); // custom action hook ?>
