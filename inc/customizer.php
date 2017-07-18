<?php
/**
 * Tiny Framework Theme Customizer.
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.2
 */

/**
 * Register postMessage support.
 *
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @since Tiny Framework 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function tinyframework_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Use selective refresh to preview changes to site title and tagline.
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'            => '.site-title > a',
			'container_inclusive' => false,
			'render_callback'     => 'tinyframework_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'            => '.site-description',
			'container_inclusive' => false,
			'render_callback'     => 'tinyframework_customize_partial_blogdescription',
		) );
	}

	// Rename the label to "Site Title Color" because this only affects the site title in this theme.
	$wp_customize->get_control( 'header_textcolor' )->label = esc_html__( 'Site Title Color', 'tiny-framework' );

	// Rename the label to "Display Site Title & Tagline" in order to make this option extra clear.
	$wp_customize->get_control( 'display_header_text' )->label = esc_html__( 'Display Site Title &amp; Tagline', 'tiny-framework' );
}
add_action( 'customize_register', 'tinyframework_customize_register' );


/**
 * Render the site title for the selective refresh partial.
 *
 * @since Tiny Framework 2.2.0
 * @see tinyframework_customize_register()
 *
 * @return void
 */
function tinyframework_customize_partial_blogname() {
	bloginfo( 'name' );
}


/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Tiny Framework 2.2.0
 * @see tinyframework_customize_register()
 *
 * @return void
 */
function tinyframework_customize_partial_blogdescription() {
		bloginfo( 'description' );
}


/**
 * Enqueue Javascript postMessage handlers for the Customizer.
 *
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_customize_preview_js() {
	wp_enqueue_script( 'tinyframework_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '2.2.0', true );
}
add_action( 'customize_preview_init', 'tinyframework_customize_preview_js' );
