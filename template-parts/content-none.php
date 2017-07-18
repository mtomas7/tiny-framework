<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * Learn more: @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */
?>

	<?php tha_entry_before(); // custom action hook ?>

	<section class="no-results not-found">

		<?php tha_entry_top(); // custom action hook ?>

		<header class="page-header">
			<h1 class="page-title" itemprop="headline"><?php esc_html_e( 'Nothing Found', 'tiny-framework' ); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">

			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php
					printf(
						wp_kses(
							/* translators: 1: link to WP admin new post page. */
							__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'tiny-framework' ),
							array(
								'a' => array(
									'href' => array(),
								)
							)
						),
						esc_url( admin_url( 'post-new.php' ) )
					);
				?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php esc_html_e( 'Apologies, but no results were found. Please try again with some different keywords.', 'tiny-framework' ); ?></p>

				<?php get_search_form(); ?>

			<?php else : ?>

				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'tiny-framework' ); ?></p>

				<?php get_search_form(); ?>

			<?php endif; ?>

		</div><!-- .page-content -->

		<?php tha_entry_bottom(); // custom action hook ?>

	</section><!-- .no-results -->

	<?php tha_entry_after(); // custom action hook ?>
