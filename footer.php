<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #content and #page div elements.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */
?>
	</div><!-- #content .site-content -->

	<?php tha_footer_before(); // custom action hook ?>

	<?php // Accessibility. Aria labelledby adds relationship between the footer and its heading. ?>

	<footer id="colophon" class="site-footer" aria-labelledby="footer-header" itemscope="itemscope" itemtype="https://schema.org/WPFooter">

		<?php tha_footer_top(); // custom action hook ?>

		<h2 class="screen-reader-text" id="footer-header"><?php esc_html_e( 'Footer Content', 'tiny-framework' ); ?></h2>

		<div id="footer-widgets" class="widget-area three" itemscope="itemscope" itemtype="https://schema.org/WPSideBar">

			<?php
			// Three footer widget areas
			if ( ! is_404() ) : ?>

				<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
					<div id="footer-widget-left">
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
					<div id="footer-widget-middle">
						<?php dynamic_sidebar( 'sidebar-5' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
					<div id="footer-widget-right">
						<?php dynamic_sidebar( 'sidebar-6' ); ?>
					</div>
				<?php endif; ?>

			<?php endif; // is_404() ?>

		</div><!-- #footer-widgets -->

		<div class="site-info">

			<?php // Footer copyright widget area - use standard WordPress text widget with something like this: &copy; 2016 Your Name. All rights reserved ?>

			<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>

				<div id="copyright-widget">
					<?php dynamic_sidebar( 'sidebar-7' ); ?>
				</div>
				<span class="meta-separator" aria-hidden="true">&bull;</span>

			<?php endif; ?>

			<?php do_action( 'tinyframework_credits' ); // Tip87 - custom action hook, see functions.php ?>

			<?php // Tip61 - Discreet link to WordPress Admin panel in the footer ?>

			<span id="site-admin-link"><?php wp_register('', ''); ?> <?php wp_loginout(); ?></span>

		</div><!-- .site-info -->

		<div class="site-info-2">

			<?php // Tip85 - Add Social Media Menu. Read more: http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2 ?>

			<?php get_template_part( 'inc/menu', 'social' ); ?>

		</div><!-- .site-info-2 -->

		<?php tha_footer_bottom(); // custom action hook ?>

	</footer><!-- .site-footer -->

	<?php tha_footer_after(); // custom action hook ?>

</div><!-- #page .site -->

<?php tha_body_bottom(); // custom action hook ?>
<?php wp_footer(); ?>

<!-- Happy coding! "Ut In Omnibus Glorificetur Deus" ~Saint Benedict -->
</body>
</html>
