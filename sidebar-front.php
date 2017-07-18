<?php
/**
 * The sidebar containing the front page widget areas
 *
 * If no active widgets are in either sidebar, hide them completely.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */

/* The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>

<aside id="secondary" class="sidebar widget-area" aria-labelledby="sidebar-header" itemscope="itemscope" itemtype="https://schema.org/WPSideBar">

<h2 class="screen-reader-text" id="sidebar-header"><?php esc_html_e( 'Main Sidebar', 'tiny-framework' ); ?></h2>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

		<div class="first front-widgets">

			<?php dynamic_sidebar( 'sidebar-2' ); ?>

		</div><!-- .first -->

	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>

		<div class="second front-widgets">

			<?php dynamic_sidebar( 'sidebar-3' ); ?>

		</div><!-- .second -->

	<?php endif; ?>

</aside><!-- #secondary -->