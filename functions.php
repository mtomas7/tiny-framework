<?php
/**
 * Tiny Framework functions and definitions.
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
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * Learn how to set up a solid functions.php file
 * @link http://justintadlock.com/archives/2010/12/30/wordpress-theme-function-files
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */

/**
 * Table of Contents:
 *
 *  0.0 - Compatibility.
 *    0.1 - Back-compatibility. Tiny Framework only works in WordPress 4.4 or later.
 *    0.2 - HTML5 compatibility. Adds the new HTML5 input types to the comment-form.
 *  1.0 - .
 *  2.0 - Add support for a custom header image.
 *  3.0 - Theme setup - Part 1. Set up theme defaults and register the various WordPress features that Tiny Framework supports.
 *    3.1 - Make Tiny Framework available for translation.
 *    3.2 - This theme styles the visual editor with editor-style.css to match the theme style.
 *    3.3 - Add default posts and comments RSS feed links to head.
 *    3.4 - Let WordPress manage the document title.
 *    3.5 - HTML5 support for default core markup.
 *    3.6 - This theme supports a variety of post formats.
 *    3.7 - This theme uses wp_nav_menu() in two locations.
 *    3.8 - This theme supports custom background color and image, and here we also set up the default background color.
 *    3.9 -  Enable support for Post Thumbnails on posts and pages (also see Tip06 in style.css).
 *    3.10 - Tip07 - Add new image size for custom post/page headers and select default header image (also see Tip06 in style.css).
 *    3.11 - Tip14 - This theme supports standard custom logo (also via Site Logo Plugin, as a WordPress.com feature and a feature component of Jetpack plugin).
 *    3.12 - Indicate widget sidebars can use selective refresh in the Customizer.
 *    3.13 - Include Theme Hooks Alliance Hooks (also check inc/tha-theme-hooks.php).
 *    3.14 - A non-disruptive admin notice to inform users about additional resources.
 *    3.14b - A non-disruptive admin notice - loading Persist Admin notice Dismissals components.
 *  4.0 - Theme setup - Part 2 - Set the content width in pixels, based on the theme's design and stylesheet.
 *    4.1 - Register sidebars. Register our main widget area, footer widget areas and the front page widget areas.
 *    4.2 - Add Theme Customizer components.
 *    4.3 - Load custom template tags for this theme.
 *    4.4 - Load plugin compatibility file.
 *    4.5 - Schema.org rich snippets (microdata), microformats v2 integration, custom BODY and ARTICLE (post) classes.
 *    4.6 - Return the Google font stylesheet URL if available.
 *    4.7 - Tip89 - Add custom image sizes to the editor.
 *  5.0 - Enqueue scripts and styles for front-end.
 *    5.1 - Load font stylesheet URL for Open Sans and other optional Google fonts.
 *    5.2 - Add CSS file of the Font Awesome icon font (local version).
 *    5.3 - Load our main stylesheet.
 *    5.4 - Load the Internet Explorer specific stylesheet.
 *    5.4b - Load html5 shiv to add support for HTML5 elements in older IE versions.
 *    5.5 - Add JavaScript to pages with the comment form to support sites with threaded comments (when in use).
 *    5.6 - Add JavaScript for handling the navigation menu hide-and-show behavior.
 *    5.7 - Add additional scripts for accessibility, etc.
 *    5.8 - Make "skip to content" link work correctly in IE9, Chrome, and Opera for better accessibility.
 *    5.9 - Add preconnect for Google Fonts.
 *  6.0 - Add optional meta tags, scripts to head - disabled by default.
 *  7.0 - Enhancements for posts.
 *    7.1 - Change title for protected and private posts - words "protected" and "private" are replaced by lock/lock and user symbols.
 *    7.2 - Control the length of Excerpts (number of words) - disabled by default.
 *  8.0 - Navigation settings.
 *    8.1 - Filter the page menu arguments. Make our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *  9.0 - Footer credits - Tip87 - Action Hook implementation example.
 *  10.0 - Functions to optimize performance - moved to a Child Example theme.
 *  11.0 - Functions to increase security - moved to a Child Example theme.
 *  12.0 - Other functions.
 *    12.1 - Tip08 - Remove junk from head - moved to a Child Example theme.
 *    12.2 - Tip82 - No more jumping for read more link - moved to a Child Example theme.
 *    12.3 - Tip28 - Remove curly quotes in WordPress.
 *    12.4 - Tip81 - Completely disable the Post Formats UI in the post editor screen - moved to a Child Example theme.
 *  13.0 - Additional strings available for translation.
 *
 * ----------------------------------------------------------------------------
 */

/**
 * 0.0 - Compatibility.
 *
 * 0.1 - Back-compatibility. Tiny Framework only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

/**
 * 0.2 - HTML5 compatibility. Adds the new HTML5 input types to the comment-form.
 *
 * @param string $form
 * @return string
 *
 * @since Tiny Framework 2.2.0
 */
function tinyframework_comment_autocomplete( $fields ) {
	$fields['author'] = preg_replace( '/<input/', '<input autocomplete="nickname name" ', $fields['author'] );
	$fields['email']  = preg_replace( '/<input/', '<input autocomplete="email" ', $fields['email'] );
	$fields['url']    = preg_replace( '/<input/', '<input autocomplete="url" ', $fields['url'] );

	return $fields;
}
add_filter( 'comment_form_default_fields', 'tinyframework_comment_autocomplete' );



// 1.0 - .



// 2.0 - Add support for a custom header image.
require( get_template_directory() . '/inc/custom-header.php' );



if ( ! function_exists( 'tinyframework_setup' ) ) :
/**
 * 3.0 - Theme setup - Part 1.
 *
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, title tag
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_setup() {

	/* 3.1 - Make Tiny Framework available for translation.
	 *
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/tiny-framework
	 * If you're building a theme based on Tiny Framework, use a find and replace
	 * to change 'tiny-framework' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'tiny-framework' );

	// 3.2 - This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style( array(
		'css/editor-style.css',
		'fonts/font-awesome/css/font-awesome.min.css',
		tinyframework_fonts_url(),
	) );

	// 3.3 - Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/* 3.4 - Let WordPress manage the document title.
	 *
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// 3.5 - HTML5 support for default core markup.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'widgets',
	) );

	// 3.6 - This theme supports a variety of post formats. See https://developer.wordpress.org/themes/functionality/post-formats/
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'link',
		'quote',
		'status',

		// other possible formats (uncomment below if needed):

		// 'audio',
		// 'chat',
		// 'gallery',
		// 'video',
	) );

	// 3.7 - This theme uses wp_nav_menu() in two locations.
	register_nav_menus(	array(
		'primary' => esc_html__( 'Primary Menu', 'tiny-framework' ),
		'social'  => esc_html__( 'Social Links Menu', 'tiny-framework' ),
	) );

	// 3.8 - This theme supports custom background color and image, and here we also set up the default background color.
	add_theme_support( 'custom-background', array(
		'default-color'      => 'e6e6e6',
		'default-image'      => '',

		// Other custom background settings you might need to use:

		// 'default-image'      => get_template_directory_uri() . '/images/background.jpg',
		// 'default-repeat'     => 'no-repeat',
		// 'default-position-x' => 'center',
		// 'default-attachment' => 'fixed',
	) );

	/* 3.9 - Enable support for Post Thumbnails on posts and pages.
	 *
	 * This theme uses a custom image size for featured images, displayed on "standard" posts.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 *
	 * @link https://wordpress.stackexchange.com/questions/108572/set-post-thumbnail-size-vs-add-image-size
	 */
	add_theme_support( 'post-thumbnails' );
	/* Set standard Post Thumbnail size. If size is not specified, WordPress will use 'thumb' image size,
	 * one that is setted from WordPress dashboard.
	 *
	 * Standard Post Thumbnail can be inserted in the theme files with <?php the_post_thumbnail(); ?>
	 */

	/* Commenting out the line below for the time being. Perhaps will use it to display featured posts in the index,
	 * when Featured Content functionality will be added to the WP core.
	 */

	// set_post_thumbnail_size( 220, 130 ); // 220px x 130px

	/* 3.10 - Tip07 - Add new image size for custom post/page headers and select default header image.
	 *
	 * To generate new size for existing images use Regenerate Thumbnails plugin: https://wordpress.org/plugins/regenerate-thumbnails/
	 *
	 * If you want to see custom image size in the editor, check: 4.7 - Add custom image sizes to the editor.
	 */
	add_image_size( 'custom-header-image', 960, 9999 ); // Unlimited height, soft crop

	/**
	 * 3.11 - Tip14 - This theme supports standard custom logo.
	 *
	 * Also as a feature component of Jetpack plugin and via legacy Site Logo Plugin.
	 *
	 * With logo feature being active, site BODY gets new class .wp-custom-logo.
	 *
	 * `add_theme_support` also takes a `header-text` argument. This is an array of classes (without the leading `.`) that should be hidden with the "Display Header Text" setting.
	 * Defaults to the same classes as in Underscores: `site-title` and `site-description`.
	 *
	 * @since @since Tiny Framework 2.0
	 */

	// If website runs old WordPress version, use old call. Also check: inc/template-tags.php for more details.
	if ( version_compare( $GLOBALS['wp_version'], '4.5-alpha', '<' ) ) {
		add_theme_support( 'site-logo', array(
			'size' => 'full',
		) );
	} else { // Otherwise use new call.
		add_theme_support( 'custom-logo', array(
			'height'      => null, // Allow full flexibility if no size is specified.
			'width'       => null, // Allow full flexibility if no size is specified.
			'flex-height' => true,
			'flex-width'  => true,
		) );
	}

	// 3.12 - Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/* 3.13 - Include Theme Hooks Alliance Hooks (also check inc/tha-theme-hooks.php).
	 *
	 * @link https://github.com/zamoose/themehookalliance
	 */
	require( get_template_directory() . '/inc/tha-theme-hooks.php' );

	// 3.14 - A non-disruptive admin notice to inform users about additional resources. Also see 3.14b.
	require( get_template_directory() . '/inc/admin-notice.php' );
}
endif; // tinyframework_setup
add_action( 'after_setup_theme', 'tinyframework_setup' );

/* 3.14b - A non-disruptive admin notice - loading Persist Admin notice Dismissals components.
 * @link https://github.com/collizo4sky/persist-admin-notices-dismissal
 */
require( get_template_directory() . '/inc/admin-persist-notices-dismissal.php' );
add_action( 'admin_init', array( 'PAnD', 'init' ) );



/**
 * 4.0 - Theme setup - Part 2.
 *
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * The apply_filters allows the content width to be filtered
 * The 0 at the end of the add_action() call is to have this run at the earliest.
 *
 * As we run the function super early, other functions, like in plugins, can still override the content width as usual.
 */
function tinyframework_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tinyframework_content_width', 625 );
}
add_action( 'after_setup_theme', 'tinyframework_content_width', 0 );

if ( ! function_exists( 'tinyframework_mod_content_width' ) ) :
/* Adjust content width in certain contexts.
 *
 * Adjust content_width value for full-width and single image attachment templates, and when there are no active widgets in the sidebar.
 *
 * template_redirect fires a lot later than after_setup_theme so that will still change the variable as usual.
 *
 * $GLOBALS['content_width'] = 960;
 *
 * is the same as:
 *
 * global $content_width;
 * $content_width = 960;
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_mod_content_width() {
	if ( is_page_template( 'page-templates/full-width.php' ) || is_attachment() || ! is_active_sidebar( 'sidebar-1' ) ) {
		$GLOBALS['content_width'] = 960;
	}
}
endif;
add_action( 'template_redirect', 'tinyframework_mod_content_width' );

/**
 * 4.1 - Register sidebars.
 *
 * Register our main widget area, footer widget areas and the front page widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Main Sidebar', 'tiny-framework' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'tiny-framework' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'First Front Page Widget Area', 'tiny-framework' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'tiny-framework' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Second Front Page Widget Area', 'tiny-framework' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'tiny-framework' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'First Footer Widget Area', 'tiny-framework' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Found at the bottom of every page (except 404s) as the footer. Left Side.', 'tiny-framework' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Second Footer Widget Area', 'tiny-framework' ),
		'id'            => 'sidebar-5',
		'description'   => esc_html__( 'Found at the bottom of every page (except 404s) as the footer. Center.', 'tiny-framework' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Third Footer Widget Area', 'tiny-framework' ),
		'id'            => 'sidebar-6',
		'description'   => esc_html__( 'Found at the bottom of every page (except 404s) as the footer. Right Side.', 'tiny-framework' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Copyright Widget Area', 'tiny-framework' ),
		'id'            => 'sidebar-7',
		'description'   => esc_html__( 'Found at the bottom of every page as the footer. Left Side. Use Text widget with no Title.', 'tiny-framework' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );
}
add_action( 'widgets_init', 'tinyframework_widgets_init' );

/**
 * 4.2 - Add Theme Customizer components.
 *
 * @since Tiny Framework 1.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
require( get_template_directory() . '/inc/customizer.php' );

// 4.3 - Load custom template tags for this theme.
require( get_template_directory() . '/inc/template-tags.php' );

// 4.4 - Load plugin compatibility file.
if ( file_exists( get_template_directory() . '/inc/plugin-compatibility.php' ) ) {
	require get_template_directory() . '/inc/plugin-compatibility.php';
}

// 4.5 - Schema.org rich snippets (microdata), microformats v2 integration, custom BODY classes and ARTICLE (post).
require( get_template_directory() . '/inc/semantics.php' );


if ( ! function_exists( 'tinyframework_fonts_url' ) ) :
/**
 * 4.6 - Return the Google fonts stylesheet URL if available.
 *
 * The use of Open Sans by default is localized. For languages that use
 * characters not supported by the font, the font can be disabled.
 *
 * @since Tiny Framework 1.2
 *
 * @return string Google fonts URL for the theme or empty string if disabled.
 *
 * Read more at: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function tinyframework_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'tiny-framework' ) ) {
		$fonts[] = 'Open Sans:400italic,700italic,400,700';
	}

	/* Tip31 - Support for aditional Google Fonts. Load Google Fonts stylesheet.
	 *
	 * Bellow are examples on how to add more Google fonts as your system fonts.
	 * System fonts will also be used in the visual editor.
	 *
	 * Get the link to your fonts @link http://www.google.com/webfonts
	 *
	 * Remember, using many font styles can slow down your webpage, so only select the font styles that you actually need on your webpage.
	 * We recommend using no more than 3 fonts styles.
	 *
	 * To test the font below, paste this into your post:
	 *
	 * <p style="font-family: 'Audiowide', cursive; font-weight: 400; font-size: 30px;">Testing google font</p>
	 */

	/* translators: If there are characters in your language that are not supported by Noto Serif, translate this to 'off'. Do not translate into your own language. */

	/*
	if ( 'off' !== _x( 'on', 'Audiowide font: on or off', 'tiny-framework' ) ) {
		$fonts[] = 'Audiowide:400italic,700italic,400,700';
	}
	*/

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */

	/*
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'tiny-framework' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}
	*/

	/* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
	$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'tiny-framework' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = esc_url( add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' ) );
	}

	return $fonts_url;
}
endif;

/**
 * 4.7 - Tip89 - Add custom image sizes to the editor selection.
 *
 * From: http://www.paulund.co.uk/custom-image-sizes-media-library
 * and:  https://pippinsplugins.com/add-custom-image-sizes-to-media-uploader/
 */

function tinyframework_display_custom_image_sizes( $sizes ) {
	// $sizes['my-custom-size'] = esc_html__( 'My custom size', 'tiny-framework' );
	// $sizes['another-custom-size'] = esc_html__( 'Another custom size', 'tiny-framework' );

	return $sizes;
}
add_filter( 'image_size_names_choose', 'tinyframework_display_custom_image_sizes' );



/**
 * 5.0 - Enqueue scripts and styles for front-end.
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_scripts_styles() {
	global $wp_styles;

	/* 5.1 - Load font stylesheet URL for Open Sans and other optional Google fonts. Open Sans is default Tiny Framework font.
	 *
	 * Google recommends to load this stylesheet before any other stylesheet.
	 *
	 * You can comment out this section if you want to remove Open Sans as default font.
	 *
	 * If you're using child theme, search for Tip13 in child theme's functions.php file to remove Open Sans.
	 */
	wp_enqueue_style( 'tinyframework-fonts',
	tinyframework_fonts_url(),
	array(),
	null );

	// 5.2 - Add CSS file of the Font Awesome icon font (local version), used in the main stylesheet.
	wp_enqueue_style( 'font-awesome',
	get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css',
	array(),
	'4.7.0',
	'all' );

	/* 5.2b - Add CSS file of the Font Awesome icon font, used in the main stylesheet - BootstrapCDN version.
	 *
	 * To load Font Awesome icon font from BootstrapCDN, replace the line in the section above:
	 *
	 * get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css',
	 *
	 * with:
	 *
	 * '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
	 *
	 * Please be advised, that overall loading CSS is recommended from your own domain - it is faster, because DNS will be resolved once.
	 *
	 * In my testing I got mixed results:
	 *    (83 + 282)ms local vs (123 + 350)ms CDN via: webpagetest.org
	 *     (51 + 44)ms local vs    (8 + 17)ms CDN via: tools.pingdom.com
	 */

	// 5.3 - Load our main stylesheet.
	wp_enqueue_style( 'tinyframework-style',
	get_stylesheet_uri(),
	array(),
	'2.3.1' );

	// 5.4 - Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'tinyframework-ie',
	get_template_directory_uri() . '/css/ie.css',
	array( 'tinyframework-style' ),
	'2.3.1' );
	wp_style_add_data( 'tinyframework-ie', 'conditional', 'lt IE 9' );

	// 5.4b - Load html5 shiv to add support for HTML5 elements in older IE versions.
	wp_enqueue_script( 'tinyframework-html5',
	get_template_directory_uri() . '/js/html5shiv.min.js',
	array(),
	'3.7.3' );
	wp_script_add_data( 'tinyframework-html5', 'conditional', 'lt IE 9' );

	// 5.5 - Add JavaScript to pages with the comment form to support sites with threaded comments (when in use).
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// 5.6 - Add JavaScript for handling the navigation menu hide-and-show behavior.
	wp_enqueue_script( 'tinyframework-navigation',
	get_template_directory_uri() . '/js/navigation.js',
	array(),
	'2.3.1',
	true ); // Loading script in the footer for a better performance

	// 5.7 - Add additional scripts for accessibility, etc.
	wp_enqueue_script( 'tinyframework-additional-scripts',
	get_template_directory_uri() . '/js/functions.js',
	array( 'jquery' ),
	'2.3.1',
	true ); // Loading script in the footer for a better performance
	// Localize those scripts
	$translation_array = array(
		'newWindow'    => esc_html__( 'Opens in a new window', 'tiny-framework' ),
	);
	wp_localize_script( 'tinyframework-additional-scripts', 'tinyframeworkAdditionalScripts', $translation_array );

	/* 5.8 - Make "skip to content" link work correctly in IE9, Chrome, and Opera for better accessibility.
	 * This function might be removed in the future, when browser accessibility support will become better.
	 */
	wp_enqueue_script( 'tinyframework-skip-link-focus-fix',
	get_template_directory_uri() . '/js/skip-link-focus-fix.js',
	array(),
	'2.3.1',
	true ); // Loading script in the footer for a better performance
}
add_action( 'wp_enqueue_scripts', 'tinyframework_scripts_styles' );

/**
 * 5.9 - Add preconnect for Google Fonts.
 *
 * @since Tiny Framework 2.2.1
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function tinyframework_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'tinyframework-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		// WordPress versions 4.7+ include a crossorigin attribute, earlier versions will not.
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'tinyframework_resource_hints', 10, 2 );



// 6.0 - Add optional meta tags, scripts to head.
function tinyframework_add_meta_to_head () {

	// Tip03 - We are people, not machines. Read more at: humanstxt.org. Edit file humans.txt to include your information.

	// echo "\n"; echo '<!-- Find out who built this website! Read humans.txt for more information. -->'; echo "\n"; echo '<link rel="author" type="text/plain" href="'.get_template_directory_uri().'/inc/humans.txt" />'; echo "\n";

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
add_action( 'wp_head', 'tinyframework_add_meta_to_head' );



if ( ! function_exists( 'tinyframework_the_title_trim' ) ) :
/**
 * 7.0 - Enhancements for posts.
 *
 * 7.1 - Change title for protected and private posts - words "protected" and "private" are replaced by lock symbol.
 *
 * If you're using localized WordPress, replace words 'Protected' and 'Private' with the corresponding words in your language.
 *
 * If you're using child theme, uncomment function 1.3 in child theme's functions.php and replace
 * words 'Protected' and 'Private' with the corresponding words in your language.
 */
function tinyframework_the_title_trim($title) {
	$title = esc_attr($title); // Sanitize HTML characters in the title. Comment out this line if you want to use HTML in post titles.
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

/**
 * 7.2 - Control the length of Excerpts (number of words). Please note, that Excerpt
 * is not a Teaser (the part of a post that appears on the front page when you use the More tag).
 *
 * @link https://codex.wordpress.org/Template_Tags/the_excerpt
 */

/*
function tinyframework_custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'tinyframework_custom_excerpt_length', 999 );
*/



/**
 * 8.0 - Navigation settings.
 *
 * 8.1 - Filter the page menu arguments.
 *
 * Make our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) ) {
		$args['show_home'] = true;
	}
	return $args;
}
add_filter( 'wp_page_menu_args', 'tinyframework_page_menu_args' );



// 9.0 - Footer credits - Tip87 - Action Hook implementation example.
function tinyframework_display_credits() {
	/* translators: %s: Theme name. */
	$text = sprintf( esc_html__( 'Using %s', 'tiny-framework' ), '<a href="http://mtomas.com/1/tiny-forge-free-mobile-first-wordpress-theme" rel="nofollow">Tiny Framework</a> ' );

	// If you would like to use long version of credits, use these two lines below (and delete the line above):

	/*
	$text = sprintf( esc_html__( 'Powered by %s', 'tiny-framework' ), '<a href="https://wordpress.org/" class="icon-webfont fa-wordpress" rel="generator"><span class="screen-reader-text">WordPress</span></a>' );
	$text .= sprintf( esc_html__( ' and %s', 'tiny-framework' ), '<a href="http://mtomas.com/1/tiny-forge-free-mobile-first-wordpress-theme" rel="nofollow">Tiny Framework</a> ' );
	*/

	$text .= '<span class="meta-separator" aria-hidden="true">&bull;</span>';

	// If you want to add your own credits:

	/*
	$text .= ' <a href="http://your-site.com" title="Web design & programing by your credentials">Web development by your credentials</a> ';
	$text .= '<span class="meta-separator" aria-hidden="true">&bull;</span>';
	*/
	echo apply_filters( 'tinyframework_credits_text', $text );
}
add_action( 'tinyframework_credits', 'tinyframework_display_credits' );



// 10.0 - Functions to optimize performance. "The fastest HTTP request is the one not made."

// Functions moved to a Child Example theme that can be found in: inc/examples/tiny-framework-child.zip



// 11.0 - Functions to increase security.

// Functions moved to a Child Example theme that can be found in: inc/examples/tiny-framework-child.zip



/**
 * 12.0 - Other functions.
 *
 * 12.1 - Tip08 - Remove junk from head.
 */

// Functions moved to a Child Example theme that can be found in: inc/examples/tiny-framework-child.zip

// 12.2 - Tip82 - No more jumping for read more link.

// Functions moved to a Child Example theme that can be found in: inc/examples/tiny-framework-child.zip

/**
 * 12.3 - Tip28 - Remove curly quotes in WordPress. For more options:
 *
 * @link http://www.smashingmagazine.com/2013/06/21/five-wordpress-functions-blogging-easier/
 */
remove_filter( 'the_content', 'wptexturize' );
remove_filter( 'the_excerpt', 'wptexturize' );
remove_filter( 'comment_text', 'wptexturize' );

// 12.4 - Tip81 - Completely disable the Post Formats support in the theme and Post Formats UI in the post editor screen.

// Functions moved to a Child Example theme that can be found in: inc/examples/tiny-framework-child.zip

// 12.5 - Add again default attachment image class attributes. See: https://core.trac.wordpress.org/ticket/36996#comment:3
function tinyframework_add_again_default_attach_image_class_attr( $attr, $attach, $size ) {

	// The class to test.
	// Solution was discussed at: https://wordpress.org/support/topic/need-help-with-fixing-core-bug/
	if ( is_array( $size ) ) {
		$size = "$size[0]x$size[1]";
		$classes = 'attachment-' . $size . ' size-' . $size;
	} else {
		$classes = 'attachment-' . $size . ' size-' . $size;
	}

	// Add the wp classes if not founds.
	if ( isset( $attr['class'] ) && false === strpos( $attr['class'], $classes ) ) {
		$attr['class'] .= ' ' . $classes;
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'tinyframework_add_again_default_attach_image_class_attr', 10, 3 );



/**
 * 13.0 - Additional strings available for translation.
 *
 * Some of these strings might be included in the child themes or in the parent theme as commented-out code.
 *
 * @link https://core.trac.wordpress.org/browser/tags/4.5.2/src/wp-admin/credits.php?marks=114-124#L113
 */

/* translators: %s: CMS name, i.e. WordPress. */
esc_html__( 'Powered by %s', 'tiny-framework' );
/* translators: %s: Theme name. */
esc_html__( ' and %s', 'tiny-framework' );
