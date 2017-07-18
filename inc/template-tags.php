<?php
/**
 * Custom template tags for Tiny Framework
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Tiny_Framework
 * @since Tiny Framework 2.0
 */

/**
 * Table of Contents:
 *
 * - Extend the default WordPress CSS classes
 * -- JavaScript Detection - add a `js` class to the root `<html>` element when JavaScript is detected.
 * - Hide some archive template descriptions. Descriptions are still available for accessibility purposes.
 * - Content meta information below the post title
 * -- Content meta information below the post content
 * - Determine whether blog/site has more than one category
 * - Flush out the transients used in {@see tinyframework_categorized_blog()}
 * - Template for comments and pingbacks
 * - Displays the optional excerpt.
 * - Tip41 - Displays the optional excerpt (subtitle) below the entry title.
 * - Add "...continue reading" link for the automatically generated Excerpts
 * - Display edit post link
 * - Display post content with "more" link when applicable
 * - Display navigation to next/previous post pages when applicable
 * - Display navigation to next/previous archive pages when applicable
 * - Tip40 - Displays an optional post thumbnail (Featured Image) on index views.
 * - Add a pingback url auto-discovery header for singularly identifiable articles.
 * - Temporary and deprecated functions
 *
 * ----------------------------------------------------------------------------
 */

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Tiny Framework 2.0.3
 */
function tinyframework_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'tinyframework_javascript_detection', 0 );


/**
 * Hide some archive template descriptions. Descriptions are still available for accessibility purposes.
 *
 * They will be replaced with web icons (inserted in category.php, etc.).
 */
function tinyframework_modify_archive_title( $title ) {

	if ( is_category() ) {
		$title = sprintf( '<span class="screen-reader-text">%1$s </span>%2$s',
		__( 'Category:', 'tiny-framework' ),
		single_cat_title( '', false )
		);
	} elseif ( is_tag() ) {
		$title = sprintf( '<span class="screen-reader-text">%1$s </span>%2$s',
		__( 'Tag:', 'tiny-framework' ),
		single_tag_title( '', false )
		);
	} elseif ( is_author() ) {
		$title = sprintf( '<span class="screen-reader-text">%1$s </span>%2$s',
		__( 'Author:', 'tiny-framework' ),
		'<span class="vcard">' . get_the_author() . '</span>'
		);
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'tinyframework_modify_archive_title' );


if ( ! function_exists( 'tinyframework_entry_meta_top' ) ) :
/**
 * Content meta information below the post title
 *
 * Tip26 - Set up post entry meta. Print HTML bellow post title with meta information for the current post date/time and author.
 *
 * Create your own tinyframework_entry_meta_top() to override in a child theme's funcions.php file.
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_entry_meta_top() {

	if ( 'post' === get_post_type() ) {
		printf( '<span class="byline"><span class="author vcard" itemprop="author" itemscope="itemscope" itemtype="https://schema.org/Person"><span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s" rel="author" itemprop="url name">%3$s</a></span></span>',
			esc_html_x( 'Author', 'Used before post author name.', 'tiny-framework' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
	}

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s" itemprop="dateModified datePublished">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s" itemprop="dateModified datePublished">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			get_the_date(),
			esc_attr( get_the_modified_date( 'c' ) ),
			get_the_modified_date()
		);

		printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
			esc_html_x( 'Published on', 'Used before publish date.', 'tiny-framework' ),
			esc_url( get_permalink() ),
			$time_string
		);
	}

	if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link(
			sprintf(
				wp_kses(
					/* translators: %s: post title. */
					__( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'tiny-framework' ),
					array(
						'span' => array(
							'class' => array(),
						)
					)
				),
				get_the_title()
			)
		);
		echo '</span>';
	}
}
endif;


if ( ! function_exists( 'tinyframework_entry_meta' ) ) :
/**
 * Content meta information below the post content
 *
 * Set up post entry meta. Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own tinyframework_entry_meta() to override in a child theme's funcions.php file.
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_entry_meta() {

	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', esc_html_x( 'Format', 'Used before post format.', 'tiny-framework' ) ),
			esc_url( get_post_format_link( $format ) ),
			get_post_format_string( $format )
		);
	}

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s" itemprop="datePublished">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			get_the_date(),
			esc_attr( get_the_modified_date( 'c' ) ),
			get_the_modified_date()
		);

		printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
			esc_html_x( 'Published on', 'Used before publish date.', 'tiny-framework' ),
			esc_url( get_permalink() ),
			$time_string
		);
	}

	if ( 'post' === get_post_type() ) {
		if ( is_singular() || is_multi_author() ) {
			printf( '<span class="byline"><span class="author vcard" itemprop="author" itemscope="itemscope" itemtype="https://schema.org/Person"><span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s" rel="author" itemprop="url name">%3$s</a></span></span>',
				esc_html_x( 'Author', 'Used before post author name.', 'tiny-framework' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);
		}

		$categories_list = get_the_category_list( esc_html_x( ', ', 'Used between list items, there is a space after the comma.', 'tiny-framework' ) );
		if ( $categories_list && tinyframework_categorized_blog() ) {
			printf( '<span class="cat-links" itemprop="articleSection"><span class="screen-reader-text">%1$s </span>%2$s</span>',
				esc_html_x( 'Categories', 'Used before category names.', 'tiny-framework' ),
				$categories_list
			);
		}

		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'Used between list items, there is a space after the comma.', 'tiny-framework' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links" itemprop="keywords"><span class="screen-reader-text">%1$s </span>%2$s</span>',
				esc_html_x( 'Tags', 'Used before tag names.', 'tiny-framework' ),
				$tags_list
			);
		}
	}

	if ( is_attachment() && wp_attachment_is_image() ) {
		// Retrieve attachment metadata.
		$metadata = wp_get_attachment_metadata();

		printf( '<span class="full-size-link"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
			esc_html_x( 'Full size', 'Used before full size attachment link.', 'tiny-framework' ),
			esc_url( wp_get_attachment_url() ),
			$metadata['width'],
			$metadata['height']
		);
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title. */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'tiny-framework' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}
}
endif;


if ( ! function_exists( 'tinyframework_categorized_blog' ) ) :
/**
 * Determine whether blog/site has more than one category.
 *
 * @since Tiny Framework 2.0.1
 *
 * @return bool True of there is more than one category, false otherwise.
 */
function tinyframework_categorized_blog() {
	$all_the_cool_cats = get_transient( 'tinyframework_categories' );
	if ( false === $all_the_cool_cats ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'tinyframework_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 || is_preview() ) {
		// This blog has more than 1 category so tinyframework_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so tinyframework_categorized_blog should return false.
		return false;
	}
}
endif;


/**
 * Flush out the transients used in {@see tinyframework_categorized_blog()}.
 *
 * @since Tiny Framework 2.0.1
 */
function tinyframework_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'tinyframework_categories' );
}
add_action( 'edit_category', 'tinyframework_category_transient_flusher' );
add_action( 'save_post',     'tinyframework_category_transient_flusher' );


if ( ! function_exists( 'tinyframework_comment' ) ) :
/**
 * Template for comments and pingbacks
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own tinyframework_comment() in a child theme's funcions.php file, and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments
	?>
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<p><?php esc_html_e( 'Pingback:', 'tiny-framework' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'tiny-framework' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments
		global $post;
	?>
	<li id="li-comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="comment-body" itemprop="comment" itemscope="itemscope" itemtype="https://schema.org/Comment">
			<header class="comment-meta">
				<?php
					echo get_avatar( $comment, 56 );
					printf( '<cite><span class="comment-author p-author author vcard hcard h-card" itemprop="creator" itemscope="itemscope" itemtype="http://schema.org/Person"><b class="fn p-name" itemprop="name">%1$s</b></span> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually
						( $comment->user_id === $post->post_author ) ? '<span class="post-author-label">' . esc_html__( 'Post author', 'tiny-framework' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s" itemprop="datePublished dateModified dateCreated">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time. */
						sprintf( esc_html__( '%1$s at %2$s', 'tiny-framework' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'tiny-framework' ); ?></p>
			<?php endif; ?>

			<section class="comment-content p-summary p-name" itemprop="text name description">
				<?php comment_text(); ?>
				<?php edit_comment_link( esc_html__( 'Edit', 'tiny-framework' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array(
					'reply_text' => esc_html__( 'Reply', 'tiny-framework' ),
					'after'      => ' <span>&darr;</span>',
					'depth'      => $depth,
					'max_depth'  => $args['max_depth'],
					) ) );
				?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;


if ( ! function_exists( 'tinyframework_edit_link' ) ) :
/**
 * Display edit post link
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_edit_link() {
	edit_post_link(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers. */				
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'tiny-framework' ),
				array(
					'span' => array(
						'class' => array(),
					)
				)
			),
			get_the_title()
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;


if ( ! function_exists( 'tinyframework_post_content' ) ) :
/**
 * Display post content with "more" link when applicable
 *
 * @since Tiny Framework 2.0.1
 */
function tinyframework_post_content() {
	the_content( sprintf(
		wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
			__( '...continue reading<span class="screen-reader-text"> "%s"</span>', 'tiny-framework' ),
			array(
				'span' => array(
					'class' => array(),
				),
			)
		),
		get_the_title()
	) );
}
endif;


if ( ! function_exists( 'tinyframework_excerpt' ) ) :
/**
 * Displays the optional excerpt.
 *
 * Wraps the excerpt in a div element.
 *
 * Create your own tinyframework_excerpt() function to override in a child theme's funcions.php file.
 *
 * @since Tiny Framework 2.2.0
 *
 * @param string $class Optional. Class string of the div element. Defaults to 'entry-summary'.
 */
function tinyframework_excerpt( $class = 'entry-summary' ) {
	$class = esc_attr( $class );

	if ( has_excerpt() || is_search() ) : ?>
		<div class="<?php echo $class; ?>" itemprop="description alternativeHeadline">
			<?php the_excerpt(); ?>
		</div><!-- .<?php echo $class; ?> -->
	<?php endif;
}
endif;


if ( ! function_exists( 'tinyframework_excerpt_top' ) ) :
/**
 * Tip41 - Displays the optional excerpt (subtitle) below the entry title.
 *
 * Wraps the excerpt in a div element.
 *
 * Create your own tinyframework_excerpt_top() function to override in a child theme's funcions.php file.
 *
 * @since Tiny Framework 2.2.0
 *
 * @param string $class Optional. Class string of the div element. Defaults to 'entry-summary'.
 */
function tinyframework_excerpt_top( $class = 'entry-summary-top' ) {
	$class = esc_attr( $class );

	if ( has_excerpt() ) : ?>
		<div class="<?php echo $class; ?>" itemprop="description alternativeHeadline">
			<?php // Includes a fix for better plugin compatibility: https://github.com/WordPress/twentysixteen/issues/397
				$my_excerpt = get_the_excerpt();
				echo $my_excerpt;
			?>
		</div><!-- .<?php echo $class; ?> -->
	<?php endif;
}
endif;


if ( ! function_exists( 'tinyframework_new_excerpt_more' ) && ! is_admin() ) :
/**
 * Add "continue reading" link for the automatically generated Excerpts. Replaces "[...]" (appended to automatically generated excerpts).
 *
 * This does not apply to explicit excerpts for the posts that you would enter manually into Excerpt text box.
 * Please also note, that Excerpt is not a Teaser (the part of a post that appears on the front page when you use the More tag).
 *
 * Note that if you have also placed the More tag and it was placed before the minimum count of words needed for Excerpt,
 * "continue reading" link for the Excerpt will not be displayed.
 *
 * If that happens, you can use the function below to adjust the Excerpt length. By default automatic Excerpt shows
 * the first 55 words of the post's content.
 *
 * @link https://codex.wordpress.org/Template_Tags/the_excerpt
 * @return string 'Continue reading' link
 */
function tinyframework_new_excerpt_more() {
	$link = sprintf( ' <a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: post title. */
		sprintf( __( '...continue reading<span class="screen-reader-text"> "%s"</span>', 'tiny-framework' ), esc_html( get_the_title( get_the_ID() ) ) )
		);
	return $link;
}
add_filter( 'excerpt_more', 'tinyframework_new_excerpt_more' );
endif;


if ( ! function_exists( 'tinyframework_post_pages_nav' ) ) :
/**
 * Display navigation to next/previous post pages when applicable (when post is devided into multiple pages with <!--nextpage--> ).
 *
 * @since Tiny Framework 2.0.1
 */
function tinyframework_post_pages_nav() {
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'tiny-framework' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'tiny-framework' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
	//return $content;
}
//add_filter ('the_content', 'tinyframework_post_pages_nav');
endif;


if ( ! function_exists( 'tinyframework_archive_page_nav' ) ) :
/**
 * Display navigation to next/previous archive pages when applicable
 *
 * @since Tiny Framework 1.0
 */
function tinyframework_archive_page_nav() {
	the_posts_pagination( array(
		'prev_text'          => esc_html__( 'Previous page', 'tiny-framework' ),
		'next_text'          => esc_html__( 'Next page', 'tiny-framework' ),
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'tiny-framework' ) . ' </span>',
	) );
}
endif;


if ( ! function_exists( 'tinyframework_post_thumbnail' ) ) :
/**
 * Tip40 - Displays an optional post thumbnail (Featured Image) on index views.
 *
 * Wraps the post thumbnail in an anchor element on index views.
 *
 * To generate new size for existing images use Regenerate Thumbnails plugin: https://wordpress.org/plugins/regenerate-thumbnails/
 *
 * @since Tiny Framework 2.1.2
 */
function tinyframework_post_thumbnail() {
	// Show post thumbnail only under certain conditions
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( !is_single() ) : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php the_post_thumbnail( 'medium_large', array(
			'alt'      => the_title_attribute( 'echo=0' ),
			'itemprop' => 'image',
			// 'class'    => 'alignleft',
			) );
		?>
	</a>

	<?php endif; // End !is_single()
}
endif;


if ( ! function_exists( 'tinyframework_pingback_header' ) ) :
// Add a pingback url auto-discovery header for singularly identifiable articles.
function tinyframework_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'tinyframework_pingback_header' );
endif;


// Temporary and deprecated functions

if ( ! function_exists( 'tinyframework_the_site_logo' ) ) :
/**
 * Tip14 - Displays the optional custom logo. Does nothing if custom logo is not available.
 *
 * In new theme iteration we will simply call the_custom_logo(); function straight from the header.php.
 */
function tinyframework_the_site_logo() {
	// Check if legacy Site Logo plugin is running.
	if ( function_exists( 'the_site_logo' ) ) {
		the_site_logo();
	// Then if old Jetpack version is running.
	} elseif ( function_exists( 'jetpack_the_site_logo' ) ) {
	   jetpack_the_site_logo();
	// Then if standard WordPress function is supported.
	} elseif ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	} else {
		return;
	}
}
endif;


/**
 * Find new custom logo class and append it with an old class for back-compat. in child themes that may use old class.
 *
 * Solution from: @link https://make.wordpress.org/core/2016/03/10/custom-logo/#comment-30081
 */
if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {

	function tinyframework_custom_logo_output( $html ) {
		$html = str_replace( 'custom-logo-link', 'custom-logo-link site-logo-link', $html );
	return $html;
	}
	add_filter('get_custom_logo', 'tinyframework_custom_logo_output', 10);
}


/**
 * Adds custom classes to the array of body classes.
 *
 * param array $classes Existing class values.
 *
 * @return array Filtered class values.
 */
function tinyframework_custom_logo_body_class( $classes ) {
	// Tip14 - Check if standard WordPress function is supported, then add a class to support old child themes.
	if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
        $classes[] = 'has-site-logo';
	}

	return $classes;
}
add_filter( 'body_class', 'tinyframework_custom_logo_body_class' );
