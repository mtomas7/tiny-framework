<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tiny_Framework
 * @since Tiny Framework 1.0
 */
?><!doctype html>

<?php tha_html_before(); // custom action hook ?>

<!--[if IE 8]>
<html class="ie ie8 no-js" <?php language_attributes(); ?>>
<![endif]-->

<!--[if !(IE 8)]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>

<?php tha_head_top(); // custom action hook ?>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="profile" href="http://microformats.org/profile/specs" />
<link rel="profile" href="http://microformats.org/profile/hatom" />

<?php tha_head_bottom(); // custom action hook ?>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?><?php tinyframework_semantics( 'body' ); // Function located in: inc/semantics.php ?>>

<?php tha_body_top(); // custom action hook ?>

<span class="skiplink"><a class="screen-reader-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'tiny-framework' ); ?>"><?php esc_html_e( 'Skip to content', 'tiny-framework' ); ?></a></span>

<?php // Tip04 - Reminder to turn ON JavaScript ?>

<noscript>
	<div id="no-javascript">
		<?php esc_html_e( 'Advanced features of this website require that you enable JavaScript in your browser. Thank you!', 'tiny-framework' ); ?>
	</div>
</noscript>

<div id="page" class="site">

	<?php tha_header_before(); // custom action hook ?>

	<header id="masthead" class="site-header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">

		<?php tha_header_top(); // custom action hook ?>

		<div class="site-branding" itemprop="publisher" itemscope="itemscope" itemtype="https://schema.org/Organization">

			<?php // Tip14 - custom logo feature support. Check: inc/template-tags.php for more details.
			tinyframework_the_site_logo();
			?>

			<div id="site-title-wrapper">

				<?php
					if ( is_front_page() && is_home() ) : ?>

						<h1 id="site-title"<?php tinyframework_semantics( 'site-title' ); // Function located in: inc/semantics.php ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"<?php tinyframework_semantics( 'site-url' ); // Function located in: inc/semantics.php ?>><?php bloginfo( 'name' ); ?></a></h1>

					<?php else : ?>

						<p id="site-title"<?php tinyframework_semantics( 'site-title' ); // Function located in: inc/semantics.php ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"<?php tinyframework_semantics( 'site-url' ); // Function located in: inc/semantics.php ?>><?php bloginfo( 'name' ); ?></a></p>

					<?php endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) :
					?>

						<p id="site-description"<?php tinyframework_semantics( 'site-description' ); // Function located in: inc/semantics.php ?>><?php echo $description; ?></p>

					<?php endif;
				?>

			</div><!-- #site-title-wrapper -->

		</div><!-- .site-branding -->

		<?php
		/* Accessibility. Aria Label: Provides a label to differentiate multiple navigation landmarks
		 * hidden heading: provides navigational structure to site for scanning with screen reader
		 */
		?>

		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'tiny-framework' ); ?>" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">

			<h2 class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'tiny-framework' ); ?></h2>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'tiny-framework' ); ?></button>

			<?php // Search form for mobile menu ?>

			<div class="search-box-wrapper search-container-mobile">
				<div class="search-box">
					<?php get_search_form(); ?>
				</div>
			</div>

			<!--<button class="go-to-top"><a href="#page"><span class="icon-webfont fa-chevron-circle-up" aria-hidden="true"></span></a></button>-->

			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'nav-menu',
				'depth'          => 4,
				) );
			?>

		</nav><!-- #site-navigation -->

		<!-- Custom Header - Start -->

		<?php // Tip06 - Custom headers for posts and pages
		$header_image = get_header_image();
		if ( function_exists( 'get_custom_header' ) ) {
			/* We need to figure out what the minimum width should be for our featured image
			 * This result would be the suggested width if the theme were to implement flexible widths
			 */
			$header_image_width = get_theme_support( 'custom-header', 'width' );
		}
		?>

		<?php
		/* The header image
		 *
		 * Check if this is a post or page, if it has a thumbnail, and if it's a big one
		 * You can also check if it's not password protected, just add this condition: && ! post_password_required()
		 */
		if ( is_singular() && has_post_thumbnail( $post->ID ) &&
				( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) ) ) &&
				$image[1] >= $header_image_width ) :
			// Houston, we have a new header image!
			echo get_the_post_thumbnail( $post->ID, 'custom-header-image', array(
				'class'    => 'photo u-featured', // At this point using a work-around: https://core.trac.wordpress.org/ticket/36996#comment:3 that is added as 12.5 in functions.php
				'id'       => 'featured-image', // Experimental! This ID (should it be #post-thumbnail ?) could be used for the itemref in the article element (in inc/semantics.php) for the Google AMP Articles Rich Snippets "Article image" validation.
				'itemprop' => 'image',
				) );
		else :
			if ( function_exists( 'get_custom_header' ) ) {
				$header_image_width  = get_custom_header()->width;
				$header_image_height = get_custom_header()->height;
			}
		?>

			<?php
			// Check to see if the header image has been removed.
			if ( ! empty( $header_image ) ) : ?>

				<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />

			<?php endif; // end check for removed header image ?>

		<?php endif; // end check for featured image or standard header ?>

		<!-- Custom Header - End -->

		<?php tha_header_bottom(); // custom action hook ?>

	</header><!-- .site-header -->

	<?php tha_header_after(); // custom action hook ?>

	<div id="content" class="site-content">
