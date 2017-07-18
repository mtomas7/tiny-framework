<?php
/**
 * Template part for displaying Author bios
 *
 * @package Tiny_Framework
 * @since Tiny Framework 2.0.3
 */
?>
			<div class="author-info" itemscope="itemscope" itemtype="https://schema.org/Person">

				<div class="author-avatar">

					<?php
					/* Filter the author bio avatar size.
					 *
					 * @since Tiny Framework 1.0
					 *
					 * @param int $size The avatar height and width size in pixels.
					 */
					$author_bio_avatar_size = apply_filters( 'tinyframework_author_bio_avatar_size', 85 );
					echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
					?>

				</div><!-- .author-avatar -->

				<div class="author-description">

					<h2 class="author-title"><?php
						/* translators: %s: Post Author's name. */
						printf( __( 'About <span itemprop="name">%s</span>', 'tiny-framework' ), get_the_author() );
					?></h2>

					<p class="author-bio" itemprop="description">

						<?php the_author_meta( 'description' ); ?>

						<?php
						// Display link to author archive only in posts.
						if ( is_single() ) : ?>

							<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php
									/* translators: %s: Post Author's name. */
									printf( esc_html__( 'View all posts by %s', 'tiny-framework' ), get_the_author() );
								?>
							</a>

						<?php endif; ?>

					</p><!-- .author-bio -->

				</div><!-- .author-description -->

			</div><!-- .author-info -->