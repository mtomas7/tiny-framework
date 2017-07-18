<?php
/**
 * A non-disruptive admin notice to inform users about additional resources.
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.5.6
 */

// Don't nag users who can't switch themes.
if ( ! is_admin() || ! current_user_can( 'switch_themes' ) )
	return;

function tinyframework_admin_notice() {
	// By changing the handle: disable-theme-notice-forever below (in 2 places) to a different name, you can reactivate admin notice once again if needed.
	if ( ! PAnD::is_admin_notice_active( 'disable-theme-notice-forever' ) ) {
		return;
	}
	?>
	<div data-dismissible="disable-theme-notice-forever" class="tinyframework-notice updated notice notice-success is-dismissible">
		<p><?php
			/* translators: %s: Link to Tiny Framework comprehensive guide. */
			printf( __( 'Thank you for using Tiny Framework! Please check out a valuable user guide: <a target="_blank" href="%s">How to use Tiny Framework and its child themes: a comprehensive guide</a>. Happy coding!', 'tiny-framework' ), 'http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide' );
		?></p>
	</div>
	<?php
}
add_action( 'admin_init', array( 'PAnD', 'init' ) );
add_action( 'admin_notices', 'tinyframework_admin_notice' );
