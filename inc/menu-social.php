<?php
/**
 * Tiny Framework Social Media Menu
 *
 * @package Tiny_Framework
 * @since Tiny Framework 2.0
 */
?>

<?php // Tip85 - Add Social Media Menu. Read more: http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2
	if ( has_nav_menu( 'social' ) ) : // Check if there's a menu assigned to the 'social' location.
?>

<nav id="social-navigation" class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'tiny-framework' ); ?>">

	<h3 class="screen-reader-text"><?php esc_html_e( 'Social Links Menu', 'tiny-framework' ); ?></h3>

	<?php wp_nav_menu( array(
		'theme_location'  => 'social',
		'container'       => 'div',
		'container_id'    => 'menu-social',
		'container_class' => 'menu',
		'menu_id'         => 'menu-social-items',
		'menu_class'      => 'menu-items',
		'depth'           => 1,
		'link_before'     => '<span class="screen-reader-text">',
		'link_after'      => '</span>',
		'fallback_cb'     => false,
		) );
	?>

</nav><!-- #social-navigation -->

<?php endif; // End check for menu. ?>