<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

		<?php tha_sidebars_before(); // custom action hook ?>

		<?php // Accessibility. Aria labelledby adds relationship between the sidebar and its heading. ?>

		<aside id="secondary" class="sidebar widget-area" aria-labelledby="sidebar-header" itemscope="itemscope" itemtype="https://schema.org/WPSideBar">

		<h2 class="screen-reader-text" id="sidebar-header"><?php esc_html_e( 'Main Sidebar', 'tiny-framework' ); ?></h2>

			<?php tha_sidebar_top(); // custom action hook ?>

			<?php dynamic_sidebar( 'sidebar-1' ); ?>

			<?php tha_sidebar_bottom(); // custom action hook ?>

		</aside><!-- #secondary -->

		<?php tha_sidebars_after(); // custom action hook ?>

	<?php endif; ?>