<?php
/**
 * Tiny Framework websemantics polyfill.
 *
 * Some functions to add backwards compatibility to older WordPress versions.
 * Adds some awesome websemantics like microformats(2) and microdata.
 *
 * @link http://microformats.org/wiki/microformats
 * @link http://microformats.org/wiki/microformats2
 * @link https://schema.org
 * @link http://indiewebcamp.com
 *
 * @package Tiny Framework
 * @subpackage semantics
 * @since Tiny Framework 2.2.0
 */

/**
 * Table of Contents:
 *
 * - Websemantics implementation catalog.
 * - Adds custom classes to the array of body classes.
 * - Additional body classes - add category (or any other taxonomy) class for single posts.
 * - Additional body classes - add Page slug class.
 * - Additional post classes. Adds custom classes to the array of post classes.
 * - Additional post classes. Adds a post class to denote Non-password protected page with a post thumbnail.
 * - Encapsulates post-classes to use them on different tags.
 * - Add semantics. Tip90 - Automatically define the Schema.org type you want to use for the type of the content.
 * - Echos the semantic classes added via the "tinyframework_semantics" filters.
 * - Allow Schema.org attributes to be added to HTML tags in the editor (but not for comments).
 * - Add rel-prev attribute to previous_image_link.
 * - Add rel-next attribute to next_image_link.
 * - Adds custom classes to the array of comment classes.
 * - Adds microformats v2 support to the comment_author_link.
 * - Adds microformats v2 support to the get_avatar() method.
 *
 * ----------------------------------------------------------------------------
 */

/**
 * Websemantics implementation catalog.
 *
 * Microformats @link http://microformats.org
 *
 * hfeed (in inc/semantics.php only) @link http://microformats.org/wiki/hatom
 * - hentry (in inc/semantics.php only) @link http://microformats.org/wiki/hentry
 * -- entry-title
 * -- entry-content
 * -- entry-summary (in style.css and inc/template-tags.php only)
 * -- updated (in style.css and inc/template-tags.php only)
 * -- published (in style.css and inc/template-tags.php only)
 * - vcard (in inc/template-tags.php only) @link http://microformats.org/wiki/hcard
 * -- author
 * -- fn (in inc/template-tags.php only)
 * -- n
 * -- url
 *
 * Microformats rel tags @link http://microformats.org/wiki/rel-tag
 * - rel="bookmark"
 * - rel="profile" (in header.php only)
 * - rel="generator" (in functions.php only)
 *
 * Microformats XFN tags @link http://microformats.org/wiki/xfn
 * -- rel="author"
 *
 * Microformats2 @link http://microformats.org/wiki/microformats-2
 *
 * h-feed (in inc/semantics.php only) @link http://microformats.org/wiki/h-feed
 * - h-entry (in inc/semantics.php only) @link http://microformats.org/wiki/h-entry
 * -- Activity streams @link http://microformats.org/wiki/activity-streams
 * --- h-as-page (in inc/semantics.php only)
 * --- h-as-article (in inc/semantics.php only)
 * --- h-as-note (in inc/semantics.php only)
 * --- h-as-audio (in inc/semantics.php only)
 * --- h-as-video (in inc/semantics.php only)
 * --- h-as-image (in inc/semantics.php only)
 * --- h-as-bookmark (in inc/semantics.php only)
 *
 * -- h-card (not used directly) @link http://microformats.org/wiki/h-card
 * --- u-url (in inc/semantics.php only)
 * --- u-featured (in inc/semantics.php and header.php only)
 *
 *    Overall comments in the theme should be updated, perhaps removing custom code, so default WP comment code would be used.
 * -- Comment Draft (Currently disabled) @link http://microformats.org/wiki/comment-brainstorming#microformats2_h-feed_p-comments
 * --- h-feed p-comments (in comments.php only)
 * ---- h-as-comment (in inc/semantics.php only)
 * ---- h-entry (in inc/semantics.php only)
 * ---- h-cite (in inc/semantics.php only)
 * ---- p-comment (in inc/semantics.php only)
 * ---- comment (in inc/semantics.php only) ??? See bellow...
 *
 * Schema.org microdata format
 *   @link https://schema.org
 *   @link https://html.spec.whatwg.org/multipage/microdata.html
 *
 * itemtype="https://schema.org/Blog" (in inc/semantics.php only)
 * itemtype="https://schema.org/BlogPosting" (in inc/semantics.php only)
 * itemtype="https://schema.org/UserComments" (in comments.php only)
 * itemtype="https://schema.org/WebPage" (in inc/semantics.php only)
 * itemtype="https://schema.org/Person" (in inc/template-tags.php and template-parts/author-bio.php)
 * itemtype="https://schema.org/CollectionPage"
 * itemtype="https://schema.org/SearchResultsPage" (in inc/semantics.php only)
 * itemtype="https://schema.org/AboutPage" (in inc/semantics.php only)
 * itemtype="https://schema.org/ContactPage" (in inc/semantics.php only)
 * itemtype="https://schema.org/ProfilePage" (in inc/semantics.php only)
 * itemtype="https://schema.org/ImageObject" (in inc/semantics.php only)
 * itemtype="https://schema.org/CreativeWork" (in inc/semantics.php only)
 *
 *
 * - itemprop="image" (in inc/semantics.php only)
 *
 */

if ( ! function_exists( 'tinyframework_body_class' ) ) :
/**
 * Adds custom classes to the array of body classes.
 *
 * param array $classes Existing class values.
 *
 * @return array Filtered class values.
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_body_class( $classes ) {

	$background_color = get_background_color();
	$background_image = get_background_image();

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() && ! is_404() ) {
		$classes[] = 'hfeed';
		$classes[] = 'h-feed';
		$classes[] = 'feed';
	} else {
		$classes = tinyframework_get_post_class( $classes );
	}

	// Adds a class of group-blog to blogs with more than 1 published author and single-author to blogs with only 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	} else {
		$classes[] = 'single-author';
	}

	// Presence of header image.
	if ( get_header_image() ) {
		$classes[] = 'header-image-yes';
	} else {
		$classes[] = 'header-image-no';
	}

	// Add class if the site title and tagline is hidden.
	if ( 'blank' === get_header_textcolor() ) {
		$classes[] = 'title-tagline-hidden';
	}

	// Using a full-width layout, when no active widgets in the sidebar or full-width template.
	if ( ! is_active_sidebar( 'sidebar-1' )
		 || is_page_template( 'page-templates/full-width.php' )
		 || is_attachment() ) {
			 $classes[] = 'full-width';
	}

	// Front Page template: thumbnail in use and number of sidebars for widget areas.
	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';

		if ( has_post_thumbnail() ) {
			$classes[] = 'has-post-thumbnail';
		}

		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) ) {
			$classes[] = 'two-sidebars';
		}
	}

	// White or empty background color to change the layout and spacing.
	if ( empty( $background_image ) ) {

		if ( empty( $background_color ) ) {
			$classes[] = 'custom-background-empty';
		} elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) ) {
			$classes[] = 'custom-background-white';
		}
	}

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'tinyframework-fonts', 'queue' ) ) {
		$classes[] = 'custom-font-enabled';
	}

	// Index, archive views.
	if ( is_archive() || is_search() || is_home() ) {
		$classes[] = 'list-view';
	}

	// Single views. is_singular applies when one of the following returns true: is_single(), is_page() or is_attachment().
	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'singular';
	}

	// Presence of footer widget(s).
	if ( is_active_sidebar( 'sidebar-4' )
		|| is_active_sidebar( 'sidebar-5' )
		|| is_active_sidebar( 'sidebar-6' ) ) {
		$classes[] = 'footer-widgets';
	}

	return $classes;
}
endif;
add_filter( 'body_class', 'tinyframework_body_class' );


/**
 * Additional body classes - add category (or any other taxonomy) class for single posts.
 *
 * Controlled with conditionals, nicenames, by Brian Krogsgard.
 *
 * @link http://www.organizedthemes.com/body-class-tricks-for-wordpress-sites/#comment-315
 * @since Tiny Framework 1.5.4
 */
function tinyframework_tax_body_class( $classes ) {
	if ( is_singular('post') ) {
		global $post;
		$terms = get_the_terms( $post->ID, 'category' );

		if ( $terms && ! is_wp_error( $terms ) ) {

			foreach ( $terms as $term ) {
				// assign body class for the website categories
				$classes[] =$term->slug;
			}
		}
	}

	return $classes;
}
add_filter( 'body_class', 'tinyframework_tax_body_class' );


/**
 * Additional body classes - add Page slug class.
 *
 * @link http://www.wpbeginner.com/wp-themes/how-to-add-page-slug-in-body-class-of-your-wordpress-themes/
 * @since Tiny Framework 1.5.4
 */
function tinyframework_page_slug_body_class( $classes ) {
	if ( is_singular() ) {
		global $post;

		if ( isset( $post ) ) {
			$classes[] = $post->post_type . '-' . $post->post_name;
		}
	}

	return $classes;
}
add_filter( 'body_class', 'tinyframework_page_slug_body_class' );


/**
 * Additional post classes. Adds custom classes to the array of post classes.
 *
 * @since Tiny Framework 2.2.0
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function tinyframework_post_class( $classes ) {

	$classes = array_diff( $classes, array( 'hentry' ) );

	if ( ! is_singular() ) {
		return tinyframework_get_post_class( $classes );
	} else {
		return $classes;
	}
}
add_filter( 'post_class', 'tinyframework_post_class', 99 );


/**
 * Additional post classes. Adds a post class to denote Non-password protected page with a post thumbnail.
 *
 * @since Tiny Framework 1.5.4
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function tinyframework_post_thumbnail_class( $classes ) {
	if ( ! post_password_required() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}

	return $classes;
}
add_filter( 'post_class', 'tinyframework_post_thumbnail_class', 99 );


/**
 * Encapsulates post-classes to use them on different tags.
 *
 * @since Tiny Framework 2.2.0
 */
function tinyframework_get_post_class( $classes = array() ) {
	// Adds a class for microformats v2.
	$classes[] = 'h-entry';

	// Add hentry to the same tag as h-entry.
	$classes[] = 'hentry';

	// Adds microformats 2 activity-stream support for pages and articles.
	if ( get_post_type() === 'page' ) {
		$classes[] = 'h-as-page';
	}

	if ( ! get_post_format() && get_post_type() === 'post' ) {
		$classes[] = 'h-as-article';
	}

  // Adds some more microformats 2 classes based on the posts "format".
	switch ( get_post_format() ) {
		case 'aside':
		case 'status':
			$classes[] = 'h-as-note';
			break;

		case 'audio':
			$classes[] = 'h-as-audio';
			break;

		case 'video':
			$classes[] = 'h-as-video';
			break;

		case 'gallery':
		case 'image':
			$classes[] = 'h-as-image';
			break;

		case 'link':
			$classes[] = 'h-as-bookmark';
			break;
	}

	return array_unique( $classes );
}


if ( ! function_exists( 'tinyframework_get_semantics' ) ) :
/**
 * Add semantics. Tip90 - Automatically define the Schema.org type you want to use for the type of the content.
 *
 * @param string $id the class identifier
 * @return array
 */
function tinyframework_get_semantics( $id = null ) {

	$classes = array();

	// Add default values.
	switch ( $id ) {
		case 'body':
			if ( ! is_singular() ) {
				$classes['itemscope'] = array( '' );
				$classes['itemtype']  = array( 'https://schema.org/CollectionPage' );

				if ( is_front_page() ) {

					// Is posts index page.
					if( is_home() ) {
						// For personal blog you might use https://schema.org/Blog instead.
						$classes['itemtype']  = array( 'https://schema.org/CollectionPage' );
					}
					// If static front page, see bellow: is_single.

				} elseif ( is_archive() ) {

					// Is author page.
					if ( is_author() ) {
						// Also could be https://schema.org/CollectionPage
						$classes['itemtype']  = array( 'https://schema.org/ProfilePage' );

					// Is category.
					} elseif ( is_category() ) {
						$classes['itemtype']  = array( 'https://schema.org/CollectionPage' );

					// Is specific category. E.g. category for our blog.
					// See other conditional options: https://developer.wordpress.org/reference/functions/is_category/
					// If website is blog, you could also use:
					// } elseif ( is_home() || ( is_archive() && !is_author() ) {
					} elseif ( is_category( 'blog' ) ) {
						$classes['itemtype']  = array( 'https://schema.org/Blog' );

					// Other archive types.
					} else {
						$classes['itemtype']  = array( 'https://schema.org/CollectionPage' );
					}

				// Is search results page.
				} elseif ( is_search() ) {
						$classes['itemtype']  = array( 'https://schema.org/SearchResultsPage' );
				}

			// Is single post.
			} elseif ( is_single() ) {
				$classes['itemscope'] = array( '' );
				$classes['itemtype']  = array( 'https://schema.org/WebPage' );
				// For personal blog you might use instead:
				// $classes['itemtype']  = array( 'https://schema.org/BlogPosting' );

			// Is single page.
			} elseif ( is_page() ) {
				$classes['itemscope'] = array( '' );
				$classes['itemtype']  = array( 'https://schema.org/WebPage' );

				// Specific pages. In this case we specify only about us/me and contact pages.
				// For your FAQ page you would use itemtype QAPage
				// Check other specific WebPage types: https://schema.org/WebPage
				// You could also use is_page( 1 ) to select page by its ID (in this example ID=1).
				// See other conditional options: https://developer.wordpress.org/reference/functions/is_page/
				if ( is_page( array(
						'about',
						'about-us',
						'about-me',
					) ) ) {
					$classes['itemtype']  = array( 'https://schema.org/AboutPage' );

				// Contacts page.
				} elseif ( is_page( array(
								'contact-page',
								'contact-us',
								'contacts',
								'contact',
							) ) ) {
					$classes['itemtype']  = array( 'https://schema.org/ContactPage' );
				}

				// More custom examples:
				// Is of movie post type.

				/*
				elseif ( is_singular('movies') ) {
					$classes['itemtype']  = array( 'https://schema.org/ItemPage' );
				}
				*/

				// Add several custom post types where each one describes a single item.

				/*
				elseif ( is_singular( array(
					'book',
					'movie',
					) ) ) {
					$classes['itemtype']  = array( 'https://schema.org/ItemPage' );
				}
				*/
			}
			break;

		case 'site-title':
			if ( ! is_singular() ) {
				$classes['itemprop']  = array( 'name' );
				// .site-title class is required as it is used in style.css, inc/customizer.php and .js files.
				$classes['class']     = array( 'p-name', 'site-title' );

			// I'm not sure if we need to use Site title in singular posts/pages. For post title we use "headline", so "name" is available to use.
			// For singular pages display only required CSS class.
			} else {
				// .site-title class is required as it is used in style.css, inc/customizer.php and .js files.
				$classes['class']     = array( 'site-title' );
			}
			break;

		case 'site-description':
			if ( ! is_singular() ) {
				$classes['itemprop']  = array( 'description' );
				// .site-description class is required as it is used in style.css and other files.
				$classes['class']     = array( 'p-summary', 'e-content', 'site-description' );

			// For singular pages display only required CSS class.
			} else {
				// .site-description class is required as it is used in style.css and other files.
				$classes['class']     = array( 'site-description' );
			}
			break;

		case 'site-url':
			if ( ! is_singular() ) {
				$classes['itemprop']  = array( 'url' );
				$classes['class']     = array( 'u-url', 'url' );
			}
			break;

		// For the Article container.
		case 'post':
			if ( ! is_singular() ) {
				// Any property to describe Article???
				$classes['itemscope'] = array( '' );
				$classes['itemtype']  = array( 'https://schema.org/Article' );
				// For personal blog you might use:
				// $classes['itemtype']  = array( 'https://schema.org/BlogPosting' );
				// $classes['itemprop']  = array( 'blogPost' );

			// is_singular()
			} else {
				// Post is an image attachment.
				if ( wp_attachment_is_image() ) {
					$classes['itemscope'] = array( '' );
					$classes['itemtype']  = array( 'https://schema.org/ImageObject' );

				// Post is of Image post format.
				} elseif ( has_post_format( 'image' ) ) {
					$classes['itemscope'] = array( '' );
					$classes['itemtype']  = array( 'https://schema.org/ImageObject' );

				// Post is of Quote post format.
				} elseif ( has_post_format( 'quote' ) ) {
					$classes['itemscope'] = array( '' );
					$classes['itemtype']  = array( 'https://schema.org/CreativeWork' );

				// Post is of Status post format.
				} elseif ( has_post_format( 'status' ) ) {
					$classes['itemscope'] = array( '' );
					$classes['itemtype']  = array( 'https://schema.org/BlogPosting' );

				} else {
					// Looks that if mainEntityOfPage is specified (link element with article permalink bellow the title in content.php),
					// there is no need to specify mainEntity for the Article container:
					// @link http://www.seoskeptic.com/how-to-use-schema-org-v2-0s-mainentityofpage-property/
					// More resources: @link https://stackoverflow.com/questions/34466028/how-to-implement-mainentityofpage-to-this-specific-site
					// @link https://webmasters.stackexchange.com/questions/87940/new-required-mainentityofpage-for-article-structured-data

					// $classes['itemprop']  = array( 'mainEntity' );
					$classes['itemscope'] = array( '' );
					// For personal blog you might use https://schema.org/BlogPosting
					$classes['itemtype']  = array( 'https://schema.org/Article' );
					// This ID (should it be #post-thumbnail ?) could be used for the itemref in the article element (in inc/semantics.php) to point to featured image (see header.php) for the Google AMP Articles Rich Snippets "Article image" validation.
					// $classes['itemref']  = array( 'featured-image' );
				}

			}
			break;
	}

	$classes = apply_filters( 'tinyframework_semantics', $classes, $id );
	$classes = apply_filters( "tinyframework_semantics_{$id}", $classes, $id );
	// ^ Double quotes above are for a reason: https://wordpress.org/support/topic/tinyframework_semantics_id-hook-firing-for-each-type-of-element/

	return $classes;
}
endif;


/**
 * Echos the semantic classes added via the "tinyframework_semantics" filters.
 *
 * @param string $id the class identifier
 */
function tinyframework_semantics( $id ) {
	$classes = tinyframework_get_semantics( $id );

	if ( ! $classes ) {
		return;
	}

	foreach ( $classes as $key => $value ) {
		echo ' ' . esc_attr( $key ) . '="' . esc_attr( join( ' ', $value ) ) . '"';
	}
}


if ( ! function_exists( 'tinyframework_allow_schema_markup' ) ) :
// Allow Schema.org attributes to be added to HTML tags in the editor (but not for comments).
function tinyframework_allow_schema_markup() {
	global $allowedposttags;

	foreach( $allowedposttags as $tag => $attr ) {
		$attr[ 'itemscope' ] = array();
		$attr[ 'itemtype' ] = array();
		$attr[ 'itemprop' ] = array();
		$allowedposttags[ $tag ] = $attr;
	}

	return $allowedposttags;
}
add_action( 'init', 'tinyframework_allow_schema_markup' );
endif;


/**
 * Add rel-prev attribute to previous_image_link.
 *
 * @param string a-tag
 * @return string
 */
function tinyframework_semantic_previous_image_link( $link ) {
	return preg_replace( '/<a/i', '<a rel="prev"', $link );
}
add_filter( 'previous_image_link', 'tinyframework_semantic_previous_image_link' );


/**
 * Add rel-next attribute to next_image_link.
 *
 * @param string a-tag
 * @return string
 */
function tinyframework_semantic_next_image_link( $link ) {
	return preg_replace( '/<a/i', '<a rel="next"', $link );
}
add_filter( 'next_image_link', 'tinyframework_semantic_next_image_link' );


/**
 * Add Schema.org support to search forms.
 *
 */
function tinyframework_get_search_form( $form ) {
	$form = preg_replace( '/<form/i', '<form itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction"', $form );
	$form = preg_replace( '/<\/form>/i', '<meta itemprop="target" content="' . site_url( '/?s={search} ' ) . '"/></form>', $form );
	$form = preg_replace( '/<input type="search"/i', '<input type="search" itemprop="query-input"', $form );

	return $form;
}
add_filter( 'get_search_form', 'tinyframework_get_search_form' );


/**
 * Adds custom classes to the array of comment classes.
 *
 * @since Tiny Framework 2.2.0
 */

function tinyframework_comment_class( $classes ) {
	$classes[] = 'h-as-comment';
	$classes[] = 'h-entry';
	$classes[] = 'h-cite';
	$classes[] = 'p-comment';

	// Currently class 'comment' is disabled as it is also present in comment template (in inc/template-tags.php function tinyframework_comment)
	// $classes[] = 'comment';

	return array_unique( $classes );
}
add_filter( 'comment_class', 'tinyframework_comment_class', 99 );


/**
 * Adds microformats v2 support to the comment_author_link.
 *
 * @since Tiny Framework 2.2.0
 */
function tinyframework_author_link( $link ) {
	// Adds a class for microformats v2
	return preg_replace( '/(class\s*=\s*[\"|\'])/i', '${1}comment-author-name u-url ', $link );
}
add_filter( 'get_comment_author_link', 'tinyframework_author_link' );


/**
 * Adds microformats v2 support to the get_avatar() method.
 *
 * @since Tiny Framework 2.2.0
 */
function tinyframework_pre_get_avatar_data( $args, $id_or_email ) {
	if ( ! isset( $args['class'] ) ) {
		$args['class'] = array();
	}

	// Adds a class for microformats v2.
	$args['class']      = array_unique( array_merge( $args['class'], array( 'u-featured' ) ) );
	$args['extra_attr'] = 'itemprop="image"';

	return $args;
}
add_filter( 'pre_get_avatar_data', 'tinyframework_pre_get_avatar_data', 99, 2 );
