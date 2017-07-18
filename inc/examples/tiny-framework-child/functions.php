<?php
/**
 * Tiny Framework Child Example functions and definitions.
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link https://codex.wordpress.org/Plugin_API
 *
 * Learn how to set up a solid functions.php file
 * @link http://justintadlock.com/archives/2010/12/30/wordpress-theme-function-files
 */

/**
 * Table of Contents:
 *
 *  1.0 - Parent theme's functions you can override.
 *    1.1 - Tip29 - Style navigation for post listing (next/previous page navigation) - disabled by default.
 *    1.2 - Tip13 - Remove Open Sans (and other Google Fonts) as default font - disabled by default.
 *    1.3 - Allow HTML in post title. Original parent theme's function changes title for protected and private posts - disabled by default.
 *    1.4 - Change/Remove Footer credits - Tip87 - Action Hook implementation example.
 *  2.0 - Custom Child Theme functions.
 *    2.1 - Tip01 - Properly include (enqueue and/or register) CSS and JavaScript files via functions.php - http://mtomas.com/27/
 *    2.2 - Add optional meta tags, scripts to head - disabled by default.
 *    2.3 - Tip07 - Add new image size for custom post/page headers and select default header image - disabled by default.
 *    2.4 - Tip10 - Add Twenty Thirteen search form to WordPress nav menu, also see style.css
 *    2.5 - Control the length of Excerpts (number of words) - disabled by default.
 *    2.6 - Disable loading Font Awesome localy and enable the BootstrapCDN version. Tip01b - Properly exclude (dequeue and/or deregister) CSS and JavaScript files via functions.php - disabled by default.
 *  3.0 - Functions to optimize performance.
 *    3.1 - Stop WordPress Including jQuery Migrate File. This will save you one HTTP request - disabled by default.
 *    3.2 - Disable the emoji's - disabled by default (that means emoji's are active by default).
 *  4.0 - Functions to increase security.
 *    4.1 - Tip09 - Remove WordPress version info from head and feeds - disabled by default.
 *    4.2 - Tip84 - Remove error message on the login page - disabled by default.
 *    4.3 - Tip92 - Require authentication for all REST API requests - limit REST API exposure to bad guys.
 *  5.0 - Other functions.
 *    5.1 - Tip08 - Remove junk from head - disabled by default.
 *    5.2 - Tip82 - No more jumping for read more link - disabled by default.
 *    5.3 - Tip28b - Enable curly quotes in a child theme.
 *    5.4 - Tip81 - Completely disable the Post Formats UI in the post editor screen - disabled by default.
 *    5.5 - Tip85b - Add Social Media Menu to header.
 *
 * ----------------------------------------------------------------------------
 */

/**
 * 1.0 - Parent theme's functions you can override.
 *
 * 1.1 - Tip29 - Style navigation for post listing (next/previous page navigation).
 */

/*
if ( ! function_exists( 'tinyframework_archive_page_nav' ) ) :

function tinyframework_archive_page_nav() {
	the_posts_pagination( array(
		'prev_text'          => esc_html__( 'Newer articles', 'tiny-framework' ),
		'next_text'          => esc_html__( 'Older articles', 'tiny-framework' ),
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'tiny-framework' ) . ' </span>',
	) );
}
endif;
*/

// 1.2 - Tip13 - Remove Open Sans (and other Google Fonts) as default font.

/*
function tinyframeworkchild_remove_google_fonts() {
	wp_dequeue_style( 'tinyframework-fonts' );
}
add_action( 'wp_print_styles','tinyframeworkchild_remove_google_fonts' );
*/

/**
 * 1.3 - Allow HTML in post title. Original parent theme's function changes title for protected and private posts.
 *
 * Words "protected" and "private" are replaced by lock symbol.
 *
 * Please be aware, that incorrect HTML code in the title potentially can break whole site.
 * It is also possible that in some cases it could affect the security of your site.
 *
 * You can also use this function if you're using localized WordPress and want to have lock symbol for the protected posts.
 *
 * In this case uncomment this function and replace words 'Protected' and 'Private' with the corresponding words in your language.
 */

/*
if ( ! function_exists( 'tinyframework_the_title_trim' ) ) :

function tinyframework_the_title_trim($title) {
	// $title = esc_attr($title); // Sanitize HTML characters in the title. Comment out this line if you want to use HTML in post titles.
	$findthese = array(
		'#Protected:#',
		'#Private:#'
	);
	$replacewith = array(
		// What to replace "Protected:" with
		'<span class="screen-reader-text">Protected article:</span>',
		// What to replace "Private:" with
		'<span class="screen-reader-text">Private article:</span>'
	);
	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
endif;
add_filter( 'the_title', 'tinyframework_the_title_trim' );
*/

/**
 * 1.4 - Change/Remove Footer credits - Tip87 - Action Hook implementation example.
 *
 * Uncomment the functions and change tinyframeworkchild_display_credits content to suit your needs.
 */

// First we have to remove the parent theme function that inserts Footer credits. If you just want to hide credits, that's all you need to do.

/*
function tinyframeworkchild_remove_parent_theme_credits() {
	remove_action( 'tinyframework_credits', 'tinyframework_display_credits' );
}
add_action( 'init', 'tinyframeworkchild_remove_parent_theme_credits' );
*/

// Now we can insert our own Footer credits.

/*
function tinyframeworkchild_display_credits() {
	$text = sprintf( esc_html__( 'Powered by %s', 'tiny-framework' ), '<a href="https://wordpress.org/" class="icon-webfont fa-wordpress" rel="generator"><span class="screen-reader-text">WordPress</span></a>' );
	$text .= sprintf( esc_html__( ' and %s', 'tiny-framework' ), '<a href="http://mtomas.com/1/tiny-forge-free-mobile-first-wordpress-theme" rel="nofollow">Tiny Framework</a> ' );
	$text .= '<span class="meta-separator" aria-hidden="true">&bull;</span>';
	$text .= ' <a href="http://your-site.com" title="Web design & programing by your credentials">Web development by your credentials</a> <span class="meta-separator" aria-hidden="true">&bull;</span>';
	echo apply_filters( 'tinyframework_credits_text', $text );
}
add_action( 'tinyframework_credits', 'tinyframeworkchild_display_credits' );
*/



/**
 * 2.0 - Custom Child Theme functions.
 *
 * 2.1 - Tip01 - Properly include additional CSS and JavaScript files via functions.php.
 */
function tinyframeworkchild_scripts_styles() {

	/**
	 * Tip31 - Google Fonts support. Load Google Fonts stylesheet. Google recommends to load this stylesheet before any other stylesheet.
	 *
	 * Get the link to your fonts @link http://www.google.com/webfonts
	 *
	 * Remember, using many font styles can slow down your webpage, so only select the font styles that you actually need on your webpage.
	 * We recommend using no more than 3 fonts styles.
	 *
	 * If you want to register several fonts, use symbol | as a separator: http://fonts.googleapis.com/css?family=Oswald|Lora
	 *
	 * If you only want light style for Oswald and bold style for Lora, then use it this way: http://fonts.googleapis.com/css?family=Oswald:400|Lora:700
	 *
	 * One more usage example: http://fonts.googleapis.com/css?family=Neuton:400,400italic,700
	 *
	 * To test font, paste this to your post: <p style="font-family: 'Bigelow Rules', cursive; font-weight: 400; font-size: 30px;">Testing google fonts</p>
	 *
	 * Uncomment next PHP block to enable Google Fonts support:
	 */

	/*
	if ( !is_admin() ) { // If we do not want this to load in the admin dashboard
	wp_register_style( 'tinyframeworkchild-fonts', 'http://fonts.googleapis.com/css?family=Bigelow+Rules', '', '', 'screen' );
	}

	// Enqueue custom Google Fonts stylesheet
	wp_enqueue_style( 'tinyframeworkchild-fonts' );
	*/

	// Adding CSS file of the Parent theme.
	wp_register_style( 'tinyframework-style',
	get_template_directory_uri() . '/style.css',
	array(), // Use: array( 'tinyframework-google-fonts' ), - if you are using additional Google fonts.
	'2.3.1',
	'all' );

	// Adding CSS file of the Child theme. This style sheet stands last so it would override parent theme and other stylesheets.
	wp_register_style( 'tinyframeworkchild-style',
	get_stylesheet_uri(),
	array(),
	'2.3.1',
	'all' );

	// Enqueing:
	wp_enqueue_style( 'tinyframework-style' );
	wp_enqueue_style( 'tinyframeworkchild-style' );

	// Below is an example how to enqueue the script.

	/*
	wp_enqueue_script( 'your-script-name',
	get_stylesheet_directory_uri() . '/js/your-script-file-name.js',
	array(),
	'2.3.1',
	true ); // true = loading script in the footer for a better website performance
	*/
}
add_action( 'wp_enqueue_scripts', 'tinyframeworkchild_scripts_styles' );

// 2.2 - Add optional meta tags, scripts to head.
function tinyframeworkchild_add_meta_to_head () {
	// Tip03 - We are people, not machines. Read more at: humanstxt.org.  Edit file humans.txt to include your information.

	// echo "\n"; echo '<!-- Find out who built this website! Read humans.txt for more information. -->'; echo "\n"; echo '<link rel="author" type="text/plain" href="'.get_stylesheet_directory_uri().'/inc/humans.txt" />'; echo "\n";

	/* jQuery - Google, then WordPress's.
	 *
	 * The Google CDN version is chosen because it's fast in absolute terms and it has the best overall penetration which increases the odds
	 * of having a copy of the library in your user's browser cache link: https://github.com/h5bp/html5-boilerplate/blob/master/dist/doc/html.md
	 *
	 * You can do this, but it is not the best option, better use the plugin: https://wordpress.org/extend/plugins/use-google-libraries/
	 * Explanation why: https://pippinsplugins.com/why-loading-your-own-jquery-is-irresponsible/
	 */

	/*
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js', false, '1.12.3', true );
		wp_enqueue_script( 'jquery' );
	}
	*/
}
add_action( 'wp_head', 'tinyframeworkchild_add_meta_to_head' );

/**
 * 2.3 - Tip07 - Add new image size for custom post/page headers and select default header image.
 *
 * $args in add_theme_support() in child theme will auto override what defined in parent's.
 *
 * @link https://core.trac.wordpress.org/browser/tags/3.5/wp-includes/theme.php#L1292
 * @link https://wordpress.stackexchange.com/questions/108572/set-post-thumbnail-size-vs-add-image-size
 */
function tinyframeworkchild_custom_header_setup() {
	// Set custom default header. Uncomment if you need to change height and width, name, etc.

	/*
	$args = array(
		// Set height and width, with a maximum value for the width.
		// 'height'        => 350,
		// 'width'         => 960,
		// 'max-width'     => 2000,
		// 'default-image' => get_stylesheet_directory_uri() . '/images/headers/my-header.jpg',
	);
	add_theme_support( 'custom-header', $args );
	*/

	// Add new custom image size, so later you could call it in the theme. Unique image name should be specified, eg. custom-featured-image-small, custom-header-image-large, etc.
	// add_image_size( 'custom-header-image-large', 1600, 9999 ); // 1600 pixels wide (and unlimited height)
}
add_action( 'after_setup_theme', 'tinyframeworkchild_custom_header_setup' );

/**
 * 2.4 - Tip10 - Add Twenty Thirteen search form to WordPress nav menu, also see style.css
 *
 * @link http://themesandco.com/snippet/adding-an-html5-search-form-in-your-wordpress-menu/
 */
function tinyframeworkchild_add_search_to_wp_menu ( $items, $args ) {
	if( 'primary' === $args -> theme_location ) {
	$items .= '<li class="menu-item menu-item-search">' . get_search_form(false) . '</li>';
	}
	return $items;
}
add_filter( 'wp_nav_menu_items','tinyframeworkchild_add_search_to_wp_menu',10,2 );

/**
 * 2.5 - Control the length of Excerpts (number of words).
 *
 * Please note, that Excerpt is not a Teaser (the part of a post that appears on the front page when you use the More tag).
 *
 * @link https://codex.wordpress.org/Template_Tags/the_excerpt
 */

/*
function tinyframeworkchild_custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'tinyframeworkchild_custom_excerpt_length', 999 );
*/

/**
 * 2.6 - Tip01b - Properly exclude (dequeue and/or deregister) CSS and JavaScript files via functions.php
 *
 * This function will disable loading Font Awesome localy and enable the BootstrapCDN version.
 *
 * @link https://wordpress.stackexchange.com/questions/65523/how-do-i-dequeue-a-parent-theme-css-file
 * @link http://justintadlock.com/archives/2009/08/06/how-to-disable-scripts-and-styles
 *
 * Please be advised, that overall loading CSS is recommended from your own domain - it is faster, because DNS will be resolved once.
 *
 * In my testing I got mixed results:
 *    (83 + 282)ms local vs (123 + 350)ms CDN via: webpagetest.org
 *     (51 + 44)ms local vs    (8 + 17)ms CDN via: tools.pingdom.com
 */

/*
function tinyframeworkchild_switch_web_icon_font_to_cdn() {
	wp_dequeue_style( 'font-awesome' );
	// If style was registered, then it should be deregistered:
	// wp_deregister_style( 'font-awesome' );

	// Now you can add CSS file of the Font Awesome icon font (BootstrapCDN version):
	wp_enqueue_style( 'font-awesome-cdn',
	'//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
	array(),
	'4.7.0',
	'all' );

	// Similarly you can exclude (dequeue and/or deregister) JavaScript files:
	// wp_dequeue_script( 'your-script' );
	// wp_deregister_script( 'your-script' );
}
add_action( 'wp_enqueue_scripts', 'tinyframeworkchild_switch_web_icon_font_to_cdn', 100 );
*/



/**
 * 3.0 - Functions to optimize performance. "The fastest HTTP request is the one not made."
 *
 * Also see: 2.6 - Add CSS file of the Font Awesome icon font, used in the main stylesheet - BootstrapCDN version.
 *
 * 3.1 - Stop WordPress Including jQuery Migrate File. This will save you one HTTP request.
 *
 * @link http://www.paulund.co.uk/remove-jquery-migrate-file-wordpress
 */

/*
function tinyframeworkchild_remove_jquery_migrate( &$scripts) {
	if(!is_admin()) {
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.11.1' ); // Check the jQuery version at: /wp-includes/js/jquery/jquery.js
	}
}
add_filter( 'wp_default_scripts', 'tinyframeworkchild_remove_jquery_migrate' );
*/

/**
 * 3.2 - Disable the emoji's.
 *
 * Performance issue description: https://facetwp.com/wordpress-4-2-emoji-performance/
 *
 * Based on Ryan Hellyer 'Disable Emojis' plugin: https://wordpress.org/plugins/disable-emojis/
 */

/*
function tinyframeworkchild_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'tinyframeworkchild_disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'tinyframeworkchild_disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'tinyframeworkchild_disable_emojis' );
*/

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param    array  $plugins
 * @return   array  Difference betwen the two arrays
 */

/*
function tinyframeworkchild_disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
*/

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param  array  $urls          URLs to print for resource hints.
 * @param  string $relation_type The relation type the URLs are printed for.
 * @return array                 Difference betwen the two arrays.
 */

/*
function tinyframeworkchild_disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		// This filter is documented in wp-includes/formatting.php
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2.2.1/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}
*/



/**
 * 4.0 - Functions to increase security.
 *
 * 4.1 - Tip09 - Remove WordPress version info from head and feeds.
 */

/*
function tinyframeworkchild_complete_version_removal() {
	return '';
}
add_filter( 'the_generator', 'tinyframeworkchild_complete_version_removal' );
*/

/**
 * 4.2 - Tip84 - Remove error message on the login page.
 *
 * @link http://www.wpbeginner.com/wp-tutorials/11-vital-tips-and-hacks-to-protect-your-wordpress-admin-area/
 */

// add_filter( 'login_errors', create_function('$a', "return null;") );

/**
 * 4.3 - Tip92 - Require authentication for all REST API requests - limit REST API exposure to bad guys.
 *
 * @link https://developer.wordpress.org/rest-api/using-the-rest-api/frequently-asked-questions/#require-authentication-for-all-requests
 *
 * Why we need this: https://core.trac.wordpress.org/ticket/39806#comment:5
 *
 * In the long term future this might need to be disabled as REST API will be mature enough. Also if it will interfere with WordPress core functionality:
 * "However, we want to continue to increase adoption and usage of the REST API, and I expect that even this modification will break more and more
 * WP functionality as time goes on, such as API-driven themes and embeds."
 *
 * Anyway, in the foreseeable future it is better to be on a safe side.
 */

/*
add_filter( 'rest_authentication_errors', function( $result ) {
	if ( ! empty( $result ) ) {
		return $result;
	}
	if ( ! is_user_logged_in() ) {
		return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
	}
	return $result;
});
*/



/**
 * 5.0 - Other functions.
 *
 * 5.1 - Tip08 - Remove junk from head.
 *
 * @link https://scotch.io/quick-tips/removing-wordpress-header-junk
 */

// remove_action( 'wp_head', 'rsd_link' ); // remove really simple discovery link
// remove_action( 'wp_head', 'wp_generator' ); // remove wordpress version
// remove_action( 'wp_head', 'feed_links', 2 ); // remove rss feed links (make sure you add them in yourself if you're using feedblitz or an rss service)
// remove_action( 'wp_head', 'feed_links_extra', 3 ); // removes all extra rss feed links
// remove_action( 'wp_head', 'index_rel_link' ); // remove link to index page
// remove_action( 'wp_head', 'wlwmanifest_link' ); // remove wlwmanifest.xml (needed to support windows live writer)
// remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // remove random post link
// remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // remove parent post link
// remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // remove the next and previous post links
// remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
// remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

/**
 * 5.2 - Tip82 - No more jumping for read more link.
 *
 * Clicking on "read more" or "continue reading" sends user to the top of the post, not to the place marked with "more".
 */

/*
function tinyframeworkchild_remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) {
	$end = strpos($link, '"',$offset);
	}
	if ($end) {
	$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter( 'the_content_more_link', 'tinyframeworkchild_remove_more_jump_link' );
*/

// 5.3 - Tip28b - Enable curly quotes in a child theme.

/*
function tinyframeworkchild_undo_wptexturize_hooks( $length ) {
	add_filter( 'the_content', 'wptexturize' );
	add_filter( 'the_excerpt', 'wptexturize' );
	add_filter( 'comment_text', 'wptexturize' );
}
add_action( 'after_setup_theme', 'tinyframeworkchild_undo_wptexturize_hooks' );
*/

/**
 * 5.4 - Tip81 - Completely disable the Post Formats support in the theme and Post Formats UI in the post editor screen.
 *
 * Do you have a normal/business website and do not really use or need Post Formats?
 *
 * @link https://wordpress.org/support/topic/remove-post-formats-alltogether
 */

/*
function tinyframeworkchild_remove_post_formats() {
	remove_theme_support( 'post-formats' );
}
add_action( 'after_setup_theme', 'tinyframeworkchild_remove_post_formats', 11 );
*/

/**
 * 5.5 - Tip85b - Add Social Media Menu to header.
 *
 * Also check style.css
 *
 * @link http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2
 */

/*
function tinyframeworkchild_social_menu_in_header() {
	get_template_part( 'inc/menu', 'social' );
}
add_action('tha_header_top','tinyframeworkchild_social_menu_in_header');
*/
