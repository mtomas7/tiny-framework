<?php
/**
 * Tiny Framework back compat functionality
 *
 * Prevents Tiny Framework from running on WordPress versions prior to 4.4,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.4.
 *
 * @package Tiny_Framework
 * @since Tiny Framework 2.0.1
 */

/**
 * Prevent switching to Tiny Framework on old versions of WordPress.
 *
 * This function deactivates our newly activated theme if WP isn't newer than 4.4.
 * It then re/activates the default theme.
 *
 * @since Tiny Framework 2.0.1
 */
function tinyframework_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'tinyframework_upgrade_notice' );
}
add_action( 'after_switch_theme', 'tinyframework_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Tiny Framework on WordPress versions prior to 4.4.
 *
 * @since Tiny Framework 2.0.1
 *
 * @global string $wp_version WordPress version.
 */
function tinyframework_upgrade_notice() {
	/* translators: %s: WordPress version number. */
	$message = sprintf( __( 'Tiny Framework requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'tiny-framework' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.4.
 *
 * @since Tiny Framework 2.0.1
 *
 * @global string $wp_version WordPress version.
 */
function tinyframework_customize() {
	wp_die( sprintf( __( 'Tiny Framework requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'tiny-framework' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'tinyframework_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 *
 * @since Tiny Framework 2.0.1
 */
function tinyframework_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Tiny Framework requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'tiny-framework' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'tinyframework_preview' );
