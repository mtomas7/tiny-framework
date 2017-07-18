<?php
/**
 * Custom Header functionality for Tiny Framework.
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */

/**
 * Set up the WordPress core custom header arguments and settings.
 *
 * @uses add_theme_support() to register support for 3.4 and up
 * @uses tinyframework_header_style() to style front-end
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_custom_header_setup() {
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color' => '515151',
		'default-image'      => '%2$s/images/headers/Tiny-Framework-header-01.jpg',

		// Set height and width, with a maximum value for the width.
		'height'             => 350,
		'width'              => 960,
		'max-width'          => 2000,

		// Support flexible height and width.
		'flex-height'        => true,
		'flex-width'         => true,

		// Random image rotation off by default.
		'random-default'     => false,

		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'   => 'tinyframework_header_style',
	);

	add_theme_support( 'custom-header', $args );

	/* Default custom headers packaged with the theme.
	 * %s is a placeholder for the theme template directory URI.
	 * %2$s is a placeholder for the (child) theme stylesheet directory URI.
	 * I'm using %2$s to make it easy for the user to replace default header images in a child theme.
	 * @link https://developer.wordpress.org/reference/functions/register_default_headers/
	 */
	register_default_headers( array(
		'First'  => array(
			'url'           => '%2$s/images/headers/Tiny-Framework-header-01.jpg',
			'thumbnail_url' => '%2$s/images/headers/Tiny-Framework-header-01-thumbnail.jpg',
			'description'   => esc_html_x( 'First', 'header image description', 'tiny-framework' )
		),
		'Second' => array(
			'url'           => '%2$s/images/headers/Tiny-Framework-header-02.jpg',
			'thumbnail_url' => '%2$s/images/headers/Tiny-Framework-header-02-thumbnail.jpg',
			'description'   => esc_html_x( 'Second', 'header image description', 'tiny-framework' )
		),
		'Third'  => array(
			'url'           => '%2$s/images/headers/Tiny-Framework-header-03.jpg',
			'thumbnail_url' => '%2$s/images/headers/Tiny-Framework-header-03-thumbnail.jpg',
			'description'   => esc_html_x( 'Third', 'header image description', 'tiny-framework' )
		),
	) );
}
add_action( 'after_setup_theme', 'tinyframework_custom_header_setup' );

if ( ! function_exists( 'tinyframework_header_style' ) ) :
/**
 * Style the header text displayed on the blog.
 *
 * get_header_textcolor() options: 515151 is default, hide text (returns 'blank'), or any hex value.
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="tinyframework-header-css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
	<?php
		// If the user has set a custom color for the text, use that.
		else :
	?>
		.site-header .site-title,
		.site-header .site-title a,
		.site-header .site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // tinyframework_custom_header_setup