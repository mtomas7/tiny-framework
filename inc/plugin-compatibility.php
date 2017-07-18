<?php
/**
 * Compatibility settings and functions for Jetpack and other plugins.
 *
 * @package Tiny_Framework
 * @since Tiny Framework 2.0
 */

/**
 * Tip35 - Add support for Infinite Scroll.
 * See https://jetpack.com/support/infinite-scroll/
 */
function tinyframework_infinite_scroll_init() {
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'render'         => 'tinyframework_infinite_scroll_render',
		'footer_widgets' => array(
			'sidebar-4',
			'sidebar-5',
			'sidebar-6',
			'sidebar-7',
		),
		'footer'         => 'page',
	) );
}
add_action( 'after_setup_theme', 'tinyframework_infinite_scroll_init' );

function tinyframework_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'template-parts/content', 'search' );
		else :
			get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}

/**
 * Check whether or not footer widgets are present. If they are present, then a button to
 * 'Load more posts' will be displayed and Infinite Scroll will not be triggered unless a user manually clicks on that button.
 *
 * @param bool $has_widgets
 * @uses Jetpack_User_Agent_Info::is_ipad, jetpack_is_mobile, is_active_sidebar
 * @filter infinite_scroll_has_footer_widgets
 * @return bool
 */
function tinyframework_has_footer_widgets( $has_widgets ) {
	if ( ( Jetpack_User_Agent_Info::is_ipad() || ( function_exists( 'jetpack_is_mobile' ) && jetpack_is_mobile() ) ) && is_active_sidebar( 'sidebar-1' ) ) {
		$has_widgets = true;
	}

	return $has_widgets;
}
add_filter( 'infinite_scroll_has_footer_widgets', 'tinyframework_has_footer_widgets' );


/**
 * Add support for the Featured Content Plugin
 *
 * @since Tiny Framework 2.0
 */

/*
function tinyframework_featured_content_init() {
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'tinyframework_get_featured_posts',
		'description'             => __( 'The featured content section displays on the front page above the first post in the content area.', 'tiny-framework' ),
		'max_posts'               => 5,
	) );
}
add_action( 'after_setup_theme', 'tinyframework_featured_content_init' );
*/


/**
 * Featured Posts
 *
 * @since @since Tiny Framework 2.0
 */

/*
function tinyframework_has_multiple_featured_posts() {
	$featured_posts = apply_filters( 'tinyframework_get_featured_posts', array() );
	return ( is_array( $featured_posts ) && 1 < count( $featured_posts ) );
}

function tinyframework_get_featured_posts() {
	return apply_filters( 'tinyframework_get_featured_posts', false );
}
*/

/**
 * Add theme support for Responsive Videos
 *
 * @since @since Tiny Framework 2.0
 */

/*
function tinyframework_responsive_videos_setup() {
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'tinyframework_responsive_videos_setup' );
*/
