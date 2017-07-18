=== Tiny Framework ===
Contributors: TomasM
Requires at least: WordPress 4.4
Tested up to: WordPress 4.8.0
Version: 2.3.1
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: one-column, two-columns, right-sidebar, custom-background, custom-header, custom-logo, custom-menu, editor-style, featured-image-header, featured-images, flexible-header, footer-widgets, full-width-template, microformats, post-formats, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, accessibility-ready, blog, e-commerce, education

Theme URI: http://mtomas.com/1/
Author: Tomas Mackevicius
Author URI: http://mtomas.com
Donate link: http://mtomas.com/about-me/
Copyright: Tomas Mackevicius (see Copyright section below for more details)


== Description ==
Tiny Framework WordPress theme was created with the future in mind and encompasses all the best features of the default WordPress themes in one place, adds full accessibility and Structured Data Markup with Schema.org microdata format support. Fast start is ensured with very extensive documentation!

Tiny Framework features elegant responsive mobile-first design, HTML5 ready structure of Underscores, custom per-post headers, custom logo, three footer widgets, FontAwesome icon webfont and Google Fonts support. Web developers will enjoy integrated Theme Hook Alliance custom action hooks. It's all there, you have everything in one neat package.

Tiny Framework can be used as a learning tool or your own little web development "framework" a.k.a. "starter theme". With its unique "Coding Tips System" Tiny Framework helps to understand how to extend parent themes and build your own child themes, hacking them the way you want. Along with the main theme you will find an example of a child theme - an easy way to start developing with child themes! You get the best coding examples from default WordPress themes and the best hacks from the child theme.

For more information about Tiny Framework please go to http://mtomas.com/1/

To support future development of this theme you can contribute directly by donating with PayPal (if you prefer, you can visit PayPal.com directly and send a payment to services@mtomas.com):

https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=CYA7XMLU8ENS2&lc=US&item_name=Free-WordPress-themes-by-TomasM&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted


== Installation ==

1. In your admin panel, go to Appearance -> Themes and click the 'Add New' button.
2. Type in Tiny Framework in the search form and press the 'Enter' key on your keyboard.
3. Click on the 'Activate' button to use your new theme right away.
4. Go to http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide for a guide on how to customize this theme.
5. Navigate to Appearance > Customize in your admin panel and customize to taste.


Support
=======

WordPress.org - free, but very limited support forum, that deals only with the issues of existing theme code:

	https://wordpress.org/support/theme/tiny-framework

Need personalized (paid) support? If you need a help extending or modifying this theme, you can always contact me for a commercial support:

	http://mtomas.com/wordpress-theme-support-consultation/

	Tomas Mackevicius - http://mtomas.com - services@mtomas.com - @TomasMack


Overview of main theme features
===============================

- Elegant, readable and fully responsive theme built on HTML5 and mobile-first layout.
- Provides full web accessibility: conforms to WAI-ARIA (Web Accessibility Initiative - Accessible Rich Internet Applications) and WCAG 2.0 AA (Web Content Accessibility Guidelines) requirements.
- Integrated Structured Data Markup with Schema.org microdata format support - good for Google index and rank building. Required for Google Rich Snippets, Breadcrumbs and Sitelinks Search Box. Structured Data Markup can be easily tweaked/adjusted in functions.php file - most important settings in one place!
- SEO optimized - only one H1 heading per page on any page! Optimized for Google PageSpeed Insights score and Google Mobile-Friendly Test. Theme doesn't generate its own post/page titles, that makes it compatible with plugins like Yoast WordPress SEO.
- Performance optimized - additional scripts are loaded in the footer, option to load icon webfont via CDN.
- Custom Headers for posts and pages (including random header rotator), 3 footer widgets, integrated Social Menu to display your networking links in the footer.
- Custom logo to display it next to Site Title and Description.
- Styling for post formats on both index and single views.
- An optional "Open Sans" display font (enabled by default) and Google Fonts support (optional).
- Icon webfont support - using Font Awesome webfont icons.
- Integrated Theme Hook Alliance custom action hooks.
- Front page template with its own widgets.
- Full-width (no-sidebar) page template.
- Page template to display a list of links (blogroll). Blogroll feature is available as a plugin: Link Manager.
- Included a starter child theme - easy way to make it your own!
- Compatible with popular plugins: Jetpack (Infinite scroll, Sharing).
- LESS dynamic stylesheet language support! Welcome to rapid development age - change the look and feel of your site in minutes! (provided via child themes).


Full overview of Tiny Framework theme
-------------------------------------

http://mtomas.com/1/


Quick start guide
=================

1. The way WordPress works, each time you update a theme, its folder would be overwritten with new version. That means if you want to make changes to the theme and retain them, you have two choices: use a custom CSS plugin, where you would store all new CSS styles, or use a child theme, that you would modify.

First choice is good for users who will do only small changes, that can be achieved by modifying CSS styles. In this case you would append new CSS styles with the help of a plugin. If you're using popular Jetpack plugin suite, it has a Custom CSS module, other plugins to consider:

	https://wordpress.org/plugins/simple-custom-css/

	https://wordpress.org/plugins/imporved-simpler-css/

With the arrival of new theme version, you could update theme, because all your custom CSS styles would be safely stored in the database.

If you plan to make more considerable changes to the theme, I would suggest using a child theme. New WordPress users do not know how to create a child theme,
for that purpose I included an example of a child theme with main Tiny Framework download under inc/examples/tiny-framework-child.

To install child theme, upload this child theme as a separate theme alongside with Tiny Framework parent theme (both themes should be uploaded for child theme to work).

Activate Child theme and you're ready to go! From that point all of your changes will be done in the child theme. If you need to modify a file, but it isn't present in your child theme's folder, just copy it there from the Tiny Framework theme.

As a bonus, Tiny Framework child theme has very nice search field in the top menu area (ported from Twenty Thirteen theme), support for Overhanging/Pull Quotes and Overhanging Images. Two new header images were added to give you an example on how to change the default header images in the child theme.
To activate search field you have to create a menu and assign it as primary (see Step 3).

Read more about child themes:

https://codex.wordpress.org/Child_Themes


2. In WordPress Admin panel go to Admin Panel Menu > Appearance > Widgets, expand Footer Copyright Widget Area on the right side,
drag a standard Text widget from the left side to the widget area, enter your copyright text in the text field
(leave the title field empty):

	`
	&copy; 2015 Your Name. All rights reserved
	`

	P.S. please do not copy backticks - they are here to make this document compatible with Markdown syntax.


3. Go to Theme Customizer (Admin Panel Menu > Appearance > Customize) and see if you need to change any visual aspects of your site.

	- If you already created menu, assign it as primary in Navigation. You can also create a menu and assign it as primary in:

		Admin. panel > Appearance > Menus

		At the top see: "Select a menu to edit, or create a new menu." and create a menu if it's a fresh WordPress install. Then at the bottom check "Theme locations: Primary Menu" and save the menu.

	- If you will choose to upload custom logo (display it next to Site Title and Description), I recommend to size its height to 85px.


4. Setup menu for social icons. First method (an easy one) is to create new menu, name it "Social" or other name and assign it as "Social Links Menu" (the check box at the bottom).
Then you can add your social profiles as Links. By default social icons would be displayed on the right side of the footer.

If you want to use icon webfont for social networks in widgets and other places, use standard text widget in the Main Sidebar Widget (same instructions as with Footer Copyright Widget) with text like this:

	```
	<a href="http://address-to-about-me-page" class="icon-webfont social-link fa-pencil"><span class="screen-reader-text">Contact me</span></a>
	<a href="http://address-to-facebook-account" class="icon-webfont social-link fa-facebook-square"><span class="screen-reader-text">Facebook</span></a>
	<a href="http://www.linkedin.com/in/your-profile/" class="icon-webfont social-link fa-linkedin-square"><span class="screen-reader-text">LinkedIn</span></a>
	<a href="http://profiles.wordpress.org/your-wp-name" class="icon-webfont social-link fa-wordpress"><span class="screen-reader-text">WordPress.org</span></a>
	<a href="http://twitter.com/your-twitter-handle" class="icon-webfont social-link fa-twitter"><span class="screen-reader-text">Twitter</span></a>
	<a href="https://plus.google.com/your-g-plus-account-number" class="icon-webfont social-link fa-google-plus-square" rel="author"><span class="screen-reader-text">Google+</span></a>
	<a href="http://github.com/your-github-name" class="icon-webfont social-link fa-github"><span class="screen-reader-text">Github</span></a>
	```

	P.S. please do not copy backticks - they are here to make this document compatible with Markdown syntax.


5. Next, open functions.php file in a text editor and find sections:

	- 6.0 (2.2 in child themes) - Add optional meta tags, scripts to head

	- 9.0 (1.4 in child themes) - Footer credits - Tip87 - Action Hook implementation example

	- 10.0 (3.0 in child themes) - Functions to optimize performance

	- 11.0 (4.0 in child themes) - Functions to increase security

	- 12.0 (5.0 in child themes) - Other functions

Check if you need to enable (uncomment) any of the functions there. If you enabled human.txt meta tag, open human.txt file in text editor and update it with your information.


6. Make it look clean (optional). Personally I'm not a fan of displaying a bunch of meta data on index page or on archive pages. I try to keep it as clean as possible
to not mess with readers attention. But I had to enable all that meta info to pass theme evaluation. However it is very easy to fix it. To disable entry meta, located below the post in index/archive view, open style.css file in a text editor
and search for Tip30, then uncomment next CSS block to hide entry meta section (with author, categories, tags) in the Index page and archive listings.


7. If you want to use custom logo, there are two usage cases:

- Your self-hosted site runs WordPress 4.5 or newer version or site is hosted at WordPress.com.

- If you have self-hosted site that runs older WordPress version, you have to install Jetpack plugin.

Then go to Customizer and under Site Title & Tagline you can upload an image to use it as custom logo.

8. Maintain fully accessible website (recommended). As you probably noticed, accessible WordPress themes have special "accessibility-ready" tag.
	It basically means that this theme produces accessible website on clean WordPress installation. It also means, that after some user actions website might not be fully accessible anymore.
	That's right, website owners can negatively affect accessibility of their own websites. Here are several precautions and tips to keep your website accessible.

- Headings play a big role in providing web accessibility and can have potential impact for website's SEO ( https://www.joedolson.com/2014/11/headings-hierarchy-problem/ ).
	Knowing that, users should use headings in their produced content following main heading structure of a theme.

	H1 is reserved to describe one most important item on a page, usually post/page title. H2 is used to outline main website document structure
	and H3 is used to describe less important page elements, like widgets, etc.

	Tiny Framework users should use headings in posts and pages starting from H2, and starting from H4 for the content inside the widgets.

- Use headings in a consistent manner, don't skip or mix them up, eg. H2-->H3-->H4, but not H2-->H4-->H3.
	Basically, you have to start with highest heading (H2 for content and H4 for widgets) and then use lower importance headings if needed.
	If you would think that visually lower importance heading, eg. H4 looks better, you would not use H4 after H2, but instead you would alter
	the CSS style of H3 to match your needs. This would give you the desired look and would not break the logical structure of a document.

- If you will decide to change color and/or background of text elements, always check if new color combination conforms to web accessibility requirements: http://webaim.org/resources/contrastchecker/  This requirement is also valid for the states of a text or link: :hover, :focus, :active, :visited.

- If you upload images that add value to the content, please do not forget to provide Title description and/or Alt Text description in media uploader. If Alt Text field of media uploader is empty, WordPress will use Title field instead. So at least one of the fields should be provided.

For more information please see - How to use Tiny Framework and its child themes: a comprehensive guide:

http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide


Theme document structure
========================

This might help you when applying CSS rules to see the "Cascades" of Cascading Style Sheets.

Example for single.php
----------------------

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<a class="site-logo-link" rel="home" href="">
					<img class="site-logo attachment-thumbnail" data-size="thumbnail">
				<div id="site-title-wrapper">
					<h1 class="site-title">
					<h2 class="site-description">
			<nav id="site-navigation" class="main-navigation" role="navigation">
		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title">
							<div class="entry-meta">
						<div class="entry-content">
			<aside id="secondary" class="widget-area" role="complementary">
				<section id="recent-posts-5" class="widget widget_recent_entries">
					<h3 class="widget-title">Recent Articles</h2>
						<ul>
							<li>
		<footer id="colophon" class="clear" role="contentinfo">
			<div id="footer-widgets" class="widget-area three">
				<div id="footer-widget-left">
					<section id="recent-posts-4" class="widget widget_recent_entries">
						<h3 class="widget-title">Recent articles</h2>
							<ul>
								<li>


Archive example for category.php
--------------------------------

			...
			<section id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<header class="page-header">
						<h1 class="page-title">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title">
							<div class="entry-meta">
						<div class="entry-content">
			...


Tiny Framework theme at WordPress.org
=====================================

https://wordpress.org/themes/tiny-framework


Showcase your Tiny Framework site or mod!
=========================================

http://mtomas.com/363/


Coding tips you will find in Tiny Framework theme and related child themes
==========================================================================

Just open related to the tip files in a text editor and search for a tip number, for example "Tip03" to find the code.

For more information please see - How to use Tiny Framework and its child themes: a comprehensive guide:

http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide


Head, header (01-20)
--------------------

- Tip01  - Properly include (enqueue and/or register) CSS and JavaScript files via functions.php (in child themes) - http://mtomas.com/27/
- Tip01b - Properly exclude (dequeue and/or deregister) CSS and JavaScript files via functions.php (in child themes)
- Tip02  -
- Tip03  - We are people, not machines. Read more at: humanstxt.org. If you enabled humans.txt meta tag, open inc/humans.txt file in text editor and update it with your own information (functions.php, inc/humans.txt) (also in child themes)
- Tip04  - Reminder to enable JavaScript. Tiny Framework uses icon webfont, which will not be rendered properly if JavaScript is disabled (header.php, style.css)
- Tip05  - Mark main navigation menu items, containing children with special CSS class (style.css)
- Tip06  - Custom headers for posts and pages (header.php, style.css, also see Tip07)
- Tip07  - Add new image size for custom post/page headers and select default header image (functions.php) (also in child themes)
- Tip08  - Remove junk from head - disabled by default (functions.php) (only in child themes)
- Tip09  - Remove WordPress version info from head and feeds - better for security reasons - disabled by default (functions.php) (only in child themes)
- Tip10  - Add Twenty Thirteen search form to WordPress nav menu (functions.php, style.css) (in child themes)
- Tip11  - Make site title and site description float (style.css) (in child themes)
- Tip12  - Disable header image for the Front Page Template to have classic Twenty Twelve front page look. Also see Tip63 (style.css) (also in child themes)
- Tip13  - Remove Open Sans (from Google Fonts) as default font (functions.php) (in child themes)
- Tip14  - Custom logo feature support (functions.php, header.php, style.css, rtl.css, inc/template-tags.php)


Content (21-50)
---------------

- Tip21  - Icon webfont support implementation and examples (style.css, category.php, footer.php)
- Tip22  - Improve font rendering and fallback in Linux - http://www.onedesigns.com/tutorials/font-families-for-cross-compatible-typography (style.css)
- Tip23  - Mark links to documents with corresponding icons for PDF, Word, Excel, PowerPoint and archive documents (style.css).
- Tip24  - .no-border CSS class - use it in case you need to display an image without any borders or shadows, include "no-border" class for the desired image (style.css)
- Tip25  - Mark the links that will open in a new window with special icon, usually these are the links to external resources (style.css, inc/functions.js)
- Tip25b - Disable special icons, that marks the links that will open in a new window (style.css)
- Tip25c - .no-link-icon CSS class - use it to disable special icon, that marks the links that will open in a new window for an individual link, include "no-link-icon" class for the desired link (style.css)
- Tip26  - Print HTML bellow post title with meta information for the current post date/time and author (functions.php, template-parts/content.php)
- Tip26b - Print HTML bellow post title with meta information (date/time and author) for the index/archive views in MOBILE and/or NORMAL view (style.css) (also in child themes)
- Tip26c - Hide HTML bellow post title with meta information (date/time and author) for the posts in MOBILE and/or NORMAL view (style.css) (also in child themes)
- Tip27  - Hide previous article - next article navigation below the content of a post (style.css)
- Tip28  - Remove curly quotes in WordPress (functions.php)
- Tip28b - Enable curly quotes in WordPress (functions.php) (only in child themes)
- Tip29  - Style navigation arrows for post listing (next/previous page navigation) (functions.php) (in child themes)
- Tip30  - Hide entry meta section, located below the post (with author, categories, tags) in the Index page and archive listing (style.css)
- Tip31  - Google Fonts support - disabled by default (functions.php) (also in child themes)
- Tip32  - Add shadow to post/page title (style.css) (also in child themes)
- Tip33  - Enable hyphenation of text for <article>. Please note that automatic hyphenation can reduce accesibility of the theme - it can cause strange pronunciation with screen readers (style.css) (also in child themes)
- Tip34  - Display image Description field content in attachment view (image.php). By default this is disabled, because some people use Description field for personal notes.
- Tip35  - Jetpack Infinite Scroll support (style.css, inc/plugin-compatibility.php)
- Tip36  -
- Tip37  - Automatically style author's name in a blockquote. Author's name should be enclosed in <cite> (style.css) (can also be used in child themes)
- Tip38  - Overhanging/Pull Quotes (style.css) (only in child themes)
- Tip39  - Overhanging Images (style.css, js/custom-scripts.js) (only in child themes)
- Tip40  - Optional post thumbnail (Featured Image) on index/archive views (style.css, inc/template-tags.php , template-parts/content.php) (can also be used in child themes).
- Tip41  - Display the optional entry excerpt (subtitle) below the entry title (style.css, inc/template-tags.php , template-parts/content.php) (can also be used in child themes). By default this is disabled, because some people might use entry excerpt for other purposes, find Tip41 in style.css to enable.


Sidebar (51-60)
---------------

- Tip51  - Show children items of Sidebar category/page menu for selected parent category/page only (style.css)
- Tip52  - Adjust default site layout for normal view (style.css) (also in child themes)
- Tip52b - Change site layout (position of sidebar) for normal view (functions.php, style.css) (also in child themes)
- Tip53  - Change vertical spacing between lines in Recent Posts widget. If your post titles are rather short, 12px will be a good choice (style.css) (also in child themes)


Footer (61-80)
--------------

- Tip61  - Discreet link to WordPress Admin panel in the footer (footer.php, style.css)
- Tip62  - Add side borders for the middle footer widget - to better separate widgets visually (style.css) (also in child themes)
- Tip63  - Disable footer widgets for the Front Page Template to have classic Twenty Twelve front page look. Also see Tip12 (style.css) (also in child themes)


Additional tips (81-100)
------------------------

- Tip81  - Completely disable the Post Formats UI in the post editor screen - disabled by default (functions.php) (only in child themes)
- Tip82  - No more jumping for read more link - disabled by default (functions.php) (only in child themes)
- Tip83  - Make focused input fields glow (style.css)
- Tip84  - Remove error message on the login page - better for security reasons - disabled by default (functions.php) (only in child themes)
- Tip85  - Add Social Links Menu (optional) (footer.php, style.css, inc/menu-social.php)
- Tip85b - Add Social Links Menu to header (optional) (functions.php, style.css) (only in child themes)
- Tip86  - Style social icons in the sidebar (optional) (style.css) (also in child themes)
- Tip87  - Action Hook implementation example (footer.php, functions.php) (also in child themes)
- Tip88  - Customize color scheme (style.css) (also in child themes)
- Tip89  - Add custom image sizes to the editor (functions.php) (also in child themes)
- Tip90  - Fine-tune Schema.org markup (inc/semantics.php)
- Tip91  - Set Next and Previous post links to be from the same category (taxonomy) as current post (single.php)
- Tip92  - Require authentication for all REST API requests - limit REST API exposure to bad guys (functions.php) (only in child themes)

For more information please see - How to use Tiny Framework and its child themes: a comprehensive guide:

http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide


Theme localization (Translations)
=================================

Attention Tiny Framework translators, there is an easy way to translate Tiny Framework to your language. Read more at:

http://mtomas.com/389/tiny-forge-framework-child-themes-comprehensive-guide#Theme-localization-translations


Theme translations
------------------

See the list of all available translations at: https://translate.wordpress.org/projects/wp-themes/tiny-framework

Contributors:

Dutch (Nederlands) - big thanks to Paula Anguita http://paula-anguita.nl

Finnish (Suomi) - big thanks to Lassi A Liikkanen

French (Français) - big thanks to Alex Goudeau and James Capra

German (Deutsch) - big thanks to Ralph Stieber http://www.happy-end-buecher.de/wissenswertes/impressum/

Hebrew (עִבְרִית) - big thanks to Asaf Wolf @ Technion - Israel Institute of Technology technion.ac.il

Italian (Italiano) - big thanks to en_ry https://profiles.wordpress.org/en_ry/

Japanese (日本語) - big thanks to Ishikawa Koutarou @stein2nd

Lithuanian (Lietuvių kalba) - big thanks to Mantas Malcius http://mantas.malcius.lt

Norwegian (Bokmål) - big thanks to Tore Johnny Bråtveit http://braatveit.net

Norwegian (Nynorsk) - not complete

Polish (Polski) - big thanks to Adam Horodecki

Portuguese (Brazil) (Português do Brasil) - big thanks to Ary F. Capra and James Capra

Portuguese (Português) - big thanks to Pedro Mendonça http://www.pedromendonca.pt

Russian (Русский) - big thanks to Pavel Kanyshev a.k.a. veshinak

Spanish (Español) - big thanks to Antonio Sánchez http://antsanchez.com

Swedish (Svenska) - big thanks to Tommy Wikstrom http://profiles.wordpress.org/tommywik

Ukrainian (Українська) - big thanks to Sergey Galagan http://sgalagan.com


Copyright information
=====================

Tiny Framework WordPress Theme, Copyright (C) Tomas Mackevicius.
License: GNU GPL v2 or later.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License
as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program (license.txt). If not, see URI: http://www.gnu.org/licenses/gpl-2.0.html.

Tiny Framework WordPress Theme is derived from Twenty Twelve WordPress Theme, Copyright (C) the WordPress team.
License: GNU GPL v2 or later.
Source: https://wordpress.org/themes/twentytwelve


Third-party resources
---------------------

Tiny Framework WordPress Theme bundles the following third-party resources:

normalize.css, Copyright (C) Nicolas Gallagher and Jonathan Neal.
License: MIT License http://opensource.org/licenses/MIT
Source: https://github.com/necolas/normalize.css

Font Awesome webfont icons, Copyright (C) Dave Gandy.
License: SIL OFL 1.1 http://scripts.sil.org/OFL
Source: https://fortawesome.github.io/Font-Awesome/

HTML5 Shiv, Copyright (C) Alexander Farkas (aFarkas).
License: GNU GPL v2 or later and MIT License http://opensource.org/licenses/MIT
Source: https://github.com/aFarkas/html5shiv

Disable Emojis, Copyright (C) Ryan Hellyer.
License: GNU GPL v2 or later.
Source: https://wordpress.org/plugins/disable-emojis/

Images:

	icon-search.png, icon-search-2x.png
	Twenty Thirteen WordPress Theme, Copyright (C) the WordPress team.
	License: GNU GPL v2 or later.
	Source: https://wordpress.org/themes/twentythirteen

Default Tiny Framework header images:

	Source: http://pixabay.com/en/bee-pollen-nectar-yellow-flower-170551/
	License: Public Domain CC0

	Source: http://pixabay.com/en/bird-animal-birds-africa-safari-171215/
	License: Public Domain CC0

	Source: http://pixabay.com/en/ladybird-leaf-green-white-red-163480/
	License: Public Domain CC0

Default Tiny Framework Child theme header images:

	Source: http://pixabay.com/en/bee-pollen-nectar-yellow-flower-170551/
	License: Public Domain CC0

	Source: http://pixabay.com/en/sunset-poppy-backlight-174276/
	License: Public Domain CC0

	Source: http://pixabay.com/en/aoraki-mount-cook-mountain-90388/
	License: Public Domain CC0


Third-party code
----------------

Tiny Framework WordPress Theme incorporates code from:

Twenty Twelve Schema.org Child Theme, Copyright (C) Joshua Lyman.
License: GNU GPL v2 or later.
Source: https://github.com/jlyman/Twenty-Twelve-Schema.org-Child-Theme
Info: Schema.org integration code.

Underscores WordPress Theme, Copyright (C) Automattic.
License: GNU GPL v2 or later.
Source: http://underscores.me
Info: parts of various files.

Twenty Fifteen WordPress Theme, Copyright (C) the WordPress team.
License: GNU GPL v2 or later.
Source: https://wordpress.org/themes/twentyfifteen
Info: inc/back-compat.php file, parts of functions.php and other files.

Expound WordPress Theme, Copyright (C) Konstantin Kovshenin @link http://kovshenin.com
License: GNU GPL v2 or later.
Source: https://wordpress.org/themes/expound
Info: mobile menu code, a non-disruptive admin notice.

Universal WordPress Theme, Copyright (C) Joe Dolson.
License: GNU GPL v2 or later.
Source: https://wordpress.org/themes/universal/
Info: web accessibility features.

Stargazer WordPress Theme, Copyright (C) by Justin Tadlock.
License: GNU GPL v2 or later.
Source: https://wordpress.org/themes/stargazer
Source: http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2 */
Info: social media menu code.

Twenty Thirteen WordPress Theme, Copyright (C) the WordPress team.
License: GNU GPL v2 or later.
Source: https://wordpress.org/themes/twentythirteen
Info: search form code for top navigation.

Superhero WordPress Theme, Copyright (C) Automattic.
License: GNU GPL v2 or later.
Source: https://wordpress.org/themes/superhero/
Info: Jetpack integration code.

Theme Hook Alliance hooks, Copyright (C) by Doug Stewart.
License: GNU GPL v2 or later.
Source: https://github.com/zamoose/themehookalliance
Info: a collection of WordPress theme hooks.

Bootstrap, Copyright (C) Twitter, Inc.
License: MIT License http://opensource.org/licenses/MIT
Source: http://getbootstrap.com
Info: CSS for Alert and Button elements.

Twenty Sixteen WordPress Theme, Copyright (C) the WordPress team.
License: GNU GPL v2 or later.
Source: https://wordpress.org/themes/twentysixteen
Info: CSS and jQuery code for Overhanging/Pull Quotes and Overhanging Images.

Resonar WordPress Theme, Copyright (C) Automattic.
License: GNU GPL v2 or later.
Source: https://wordpress.org/themes/resonar/
Info: CSS and jQuery code for Overhanging/Pull Quotes.

SemPress WordPress Theme, Copyright (C) Matthias Pfefferle.
License: GNU GPL v3.
Source: https://wordpress.org/themes/sempress/
Info: Microformats, Microformats2 and Schema.org support, other code samples.

Persist Admin notice Dismissals, Copyright (C) Collins Agbonghama.
License: GNU GPL v3.
Source: https://github.com/collizo4sky/persist-admin-notices-dismissal
Info: Simple framework library that persists the dismissal of admin notices across pages in WordPress dashboard.


Special thanks and credits
==========================

Theme improvements
------------------

Help implementing theme accessibility features - Joe Dolson: http://www.joedolson.com and Rian Rietveld http://blog.rrwd.nl

Footer widget stacking improvement by Steven Stern: http://www.sterndata.com/blog/responsive-design-css-stacking-columns

Set default Tiny Framework header image. By Paulwpxp: https://wordpress.org/support/topic/setting-default-header-image-in-child-theme


Dependencies (updated to version #)
===================================

Related themes:
---------------

Underscores    - 1.0   - 2017-06-30 - https://github.com/Automattic/_s/
Twenty Twelve  - 2.2   - 2017-06-28 - https://core.trac.wordpress.org/browser/trunk/src/wp-content/themes/twentytwelve?order=date&desc=1
Twenty Fifteen - 1.7   - 2017-06-28 - https://core.trac.wordpress.org/browser/trunk/src/wp-content/themes/twentyfifteen?order=date&desc=1


Other components:
-----------------

normalize.css                   - 7.0.0     - 2017-07-01 - Initial CSS rules       - https://github.com/necolas/normalize.css
Font Awesome                    - 4.7.0     - 2017-07-01 - Webicon font            - http://fontawesome.io
Theme Hook Alliance hooks       - 1.0-draft - 2017-07-01 - Custom hooks            - https://github.com/zamoose/themehookalliance
html5shiv                       - 3.7.3-pre - 2017-07-01 - HTML5 compatibility     - https://github.com/aFarkas/html5shiv
SemPress                        - 1.5.6     - 2017-07-01 - Microformats v2 support - https://github.com/pfefferle/SemPress/
Persist Admin notice Dismissals - 1.3       - 2017-07-01 - Dismiss admin notices   - https://github.com/collizo4sky/persist-admin-notices-dismissal
Bootstrap                       - 3.3.7     - 2017-07-01 - Alert and Button CSS    - http://getbootstrap.com


Plugin compatibility:
---------------------

Link Manager              - 0.1-beta  - 2017-07-01 - http://wordpress.org/plugins/link-manager/
Jetpack                   - 4.1.1     - 2016-08-06 - Infinite Scroll, Sharing  - https://github.com/Automattic/jetpack , http://jetpack.com
Disable Emojis            - 1.5.3     - 2017-07-01 - https://wordpress.org/plugins/disable-emojis/
Floating Social Bar       - 1.1.7     - 2015-05-30 - https://wordpress.org/plugins/floating-social-bar/
Share Buttons by AddToAny - 1.5.6     - 2015-05-30 - https://wordpress.org/plugins/add-to-any/


Installation components:
------------------------

.htaccess config file     - 2.14.0    - 2016-01-30 - Apache Server Configs                   - https://github.com/h5bp/server-configs-apache


== Changelog ==

= 2.3.1 =
- Released: 2017-07-01
----------------------

### Release info
- Release time investment (Development & QA): ~10 h and stopped counting somewhere down the road...
- Free theme support time investment: ~1 h and stopped counting somewhere down the road...
- Theme documentation time investment: ~1 h and stopped counting somewhere down the road...

### Added
- Added Tip26c - Hide HTML bellow post title with meta information (date/time and author) for the posts in MOBILE and/or NORMAL view (style.css) (also in child themes)
- Added Tip92 - Require authentication for all REST API requests - limit REST API exposure to bad guys (functions.php) (only in child themes)
- Added rel="nofollow" to Tiny Framework footer credits in functions.php.
- Added Schema.org support to search forms in semantics.php (via SemPress)
	https://github.com/pfefferle/SemPress/commit/f6b89ae4507f1d817294c9a7e423a4631a7a502d

### Removed
- Removed invalid rel="designer" attribute (via Underscores)
	https://github.com/Automattic/_s/issues/1016
- Removed landmark roles (via Underscores)
	https://github.com/Automattic/_s/commit/f56a070c2bb2a82b73024354c8a720fa0f89789c

### Fixed
- Wrapped filter name (in inc/semantics.php) in double-quotes instead of single-quotes so that the {$id} portion of the filter hook would be parsed by PHP.
	Big thanks to @mclaurent: https://wordpress.org/support/topic/tinyframework_semantics_id-hook-firing-for-each-type-of-element/#post-9214788

### Changed
- Dependency update: updated normalize.css 5.0.0 --> 7.0.0.
- Dependency update: updated Disable Emojis 1.5.1 --> 1.5.3 (in child themes only).
- Added CSS style for localized sites in Lithuanian language to capitalize name of month in .entry-date (in child theme only).
- Allow category display in post preview even when only one category (via Twenty Fifteen)
	https://core.trac.wordpress.org/changeset/40023/trunk/src/wp-content/themes/twentyfifteen
- Improved Schema.org microdata tags.
	- Added some missing tags.
	- Unified itemscope tag usage, replacing itemscope and itemscope="" with itemscope="itemscope").
	- Small improvement:
		https://github.com/Automattic/_s/pull/1061/files
- Added ID to comment labels for post articles (via Underscores)
	https://github.com/Automattic/_s/commit/7320fe67a36316f4f312a251b1bd4872999bf535
- Code obfuscation: Fixed assignment within a condition (via Underscores)
	https://github.com/Automattic/_s/commit/923d8f1f6a370443b4203d0d5e8089795b53f2fb
- Made the content.php more flexible with post types by using is_singular() (via Underscores)
	https://github.com/Automattic/_s/commit/ef5351227e8034c452b2587ebaa16d51dbe0c7c5
- Improved CSS styles for 4.8 widgets (via Twenty Twelve)
	https://core.trac.wordpress.org/changeset/40839/trunk/src/wp-content/themes/twentytwelve
- Replaced u-photo --> u-featured (header.php and inc/semantics.php) based on the comment at:
	https://github.com/pfefferle/SemPress/commit/106d10326c7a345844c484c01799acb1cef7cce5
- Translation: I18n: ensure all text strings with placeholders have translators comments (via Underscores)
	https://github.com/Automattic/_s/commit/8cefd8f258e3bc686e813cd9c91536a2a5051e53
- Translation: Fix translatability of comments title (via Underscores)
	https://github.com/Automattic/_s/commit/97eb58a129114021333c9b3437d4bc97c619761a
- Translation: Prevented broken translations in some locales for the edit post link (via Underscores)
	https://github.com/Automattic/_s/commit/3aa7934d56cb5a3362848d7c2f67fe1df7e2edd6
	https://github.com/Automattic/_s/commit/c6d64b63fc2eb97d52735241e7883695980d4b8c


= 2.3.0 =
- Released: 2017-01-21
----------------------

### Release info
- Release time investment (Development & QA): ~11 h and stopped counting somewhere down the road...
- Free theme support time investment: ~2 h and stopped counting somewhere down the road...
- Theme documentation time investment: ~3 h and stopped counting somewhere down the road...

### Added
- Added Post Type Template support. Decided not to add back-compatibility as I will not include any additional templates that would be only for posts.
	Currently I enabled Full-width page template for posts (might be useful for landing pages, etc.). For more info about this feature and back-compatibility see:
	https://make.wordpress.org/core/2016/11/03/post-type-templates-in-4-7/
	https://core.trac.wordpress.org/ticket/18375
- Added: Persist Admin notice Dismissals to handle the WP Admin Panel notice:
	https://github.com/collizo4sky/persist-admin-notices-dismissal
	http://w3guy.com/wordpress-admin-notices-dismissible/
	via: https://wordpress.stackexchange.com/a/193573
- Added a class of .group-blog to blogs with more than 1 published author.
- Added a class of .title-tagline-hidden if the site title and tagline is hidden.
- Added support for customizer edit shortcuts. You can see them next to site title, description, logo and widgets in the customizer preview (WordPress version 4.7 required).
- Tip91 - Set Next and Previous post links to be from the same category (taxonomy) as current post (single.php).
- Translation: added Portuguese (Português) translation. Big thanks to Pedro Mendonça!

### Removed
- Translation: by using standard comment navigation we can remove 3 strings:
	Comment navigation
	Older comments
	Newer comments
- Removed nav id="comment-nav-below" - standard comment navigation doesn't use it.

### Fixed
- Persistent Admin Panel notice on theme activation/update.

### Changed
- Dependency update: updated Font Awesome 4.6.3 --> 4.7.0.
- Minimum WordPress version requirement raised 4.1 --> 4.4. Stats show that WordPress 4.1 is used only by 3.3%, WordPress 4.2 only by 4.3% and WordPress 4.3 only by 5.1% of the sites (combined only 12.7%), so I hope incompatibility impact will be minimal.
	On the other hand it will help the theme evolve together with WordPress.
	https://wordpress.org/about/stats/
- Replaced custom comments nav with WordPress built-in (via Twenty Sixteen).
	https://github.com/WordPress/twentysixteen/commit/736553e48ec64e6890b92f20e853ba171546a8bb
- Moved HTML5 Shiv code from header.php to functions.php by using wp_script_add_data.
- Renamed inc/back-compat-wp-4-2 back to back-compat.php
- Updated js/skip-link-focus-fix.js (via Underscores).
	https://github.com/Automattic/_s/commit/33a777556fadf3350131b95338c51df2f88da583
- Updated js/navigation.js (via Underscores).
	https://github.com/Automattic/_s/commit/e38cfc29bca6d414393f3aa16303f8f6a7ea5b0e
- Updated tinyframework_pingback_header function in inc/template-tags.php (via Underscores).
	https://github.com/Automattic/_s/commit/6e04a5f80238afc44b048623b1ccddf5b56513d9


= 2.2.1 =
- Released: 2016-10-23
----------------------

### Release info
- Release time investment (Development & QA): ~3 h and stopped counting somewhere down the road...
- Free theme support time investment: ~1 h and stopped counting somewhere down the road...
- Theme documentation time investment: ~0 h and stopped counting somewhere down the road...

### Added
- Added preconnect for Google Fonts to functions.php (via Twenty Fifteen).
	https://core.trac.wordpress.org/changeset/38870/trunk/src/wp-content/themes/twentyfifteen

### Removed
- Tip36 - Display featured image thumbnail in archive views (index page, categories, etc.) This tip was superseded with Tip40 - Displays an optional post thumbnail (Featured Image) on index views.
- Translation: removed local translation files and support for them, all translations migrated to WordPress.org (via Twenty Twelve).
	https://core.trac.wordpress.org/changeset/38093/trunk/src/wp-content/themes/twentytwelve
	https://translate.wordpress.org/projects/wp-themes/tiny-framework
Removed author meta info from parent and child themes that had to be used to show the web project author. But Facebook uses this info to show article author, so we don't want any confusion and legal/attribution issues. In functions.php line was"
	echo '<meta name="author" content="Your name here">'; echo "\n\n";

### Changed
- Dependency update: updated normalize.css 4.2.0 --> 5.0.0.
- Enhancement: improved Schema.org support by enabling photo and u-photo classes for the featured header image. Big thanks to @wido for the provided work-around:
	https://core.trac.wordpress.org/ticket/36996#comment:3
- Enhancement: moved pingback code from header.php to inc/template-tags.php (via Underscores).
	https://github.com/Automattic/_s/commit/ff4b374d6bf289eb602e9cebba369077dd446050
- Enhancement: updated inc/admin-notice.php code to use new classes .notice and .is-dismissible:
	https://make.wordpress.org/core/2015/04/23/spinners-and-dismissible-admin-notices-in-4-2/
	https://digwp.com/2016/05/wordpress-admin-notices/
- Translation: line:
	Thank you for using Tiny Framework! Please check out a valuable user guide: <a target="_blank" href="%s">How to use Tiny Framework and its child themes: a comprehensive guide</a>. Happy coding! <a href="%s">(hide this message)</a>

	changed to:

	Thank you for using Tiny Framework! Please check out a valuable user guide: <a target="_blank" href="%s">How to use Tiny Framework and its child themes: a comprehensive guide</a>. Happy coding!


= 2.2.0 =
- Released: 2016-08-06
----------------------

### Release info
- Release time investment (Development & QA): ~45 h and stopped counting somewhere down the road...
- Free theme support time investment: ~16 h and stopped counting somewhere down the road...
- Theme documentation time investment: ~2 h and stopped counting somewhere down the road...

### Added
- Translation: completed French (Français) translation. Big thanks to Alex Goudeau and James Capra!
- Translation: completed Portuguese (Brazil) (Português do Brasil) translation. Big thanks to Ary F. Capra and James Capra!
- Translation: completed Hebrew (עִבְרִית) translation. Big thanks to Asaf Wolf!
- Translation: completed Finnish (Suomi) translation. Big thanks to Lassi A Liikkanen!
- Translation: added Ukrainian (Українська) translation. Big thanks to Sergey Galagan!
- Translation: added translation term "Edit %s".
- Tip38 - Overhanging/Pull Quotes (style.css) (only in full width child themes) (via Resonar).
- Tip39 - Overhanging Images (style.css, js/custom-scripts.js) (only in full width child themes) (via Twenty Sixteen).
- Tip40 - Optional post thumbnail (Featured Image) on index views (style.css, inc/template-tags.php , template-parts/content.php) (can also be used in child themes) (via Twenty Sixteen).
	This option is enabled by default in a child theme example - too good to leave it disabled!
- Tip41 - Display the optional entry excerpt (subtitle) below the entry title.
	It is implemented as in Twenty Sixteen.
	Includes a fix for better plugin compatibility: https://github.com/WordPress/twentysixteen/issues/397
- Tip85b - Add Social Links Menu to header (optional) (functions.php, style.css) (only in child themes).
- Tip89 - Add custom image sizes to the editor (functions.php) (also in child themes).
- Tip90 - Fine-tune Schema.org markup (inc/semantics.php).
- Added new file inc/semantics.php to and new functions and to collect all related functions from functions.php and template-tags.php.
- Enhancing microformats support and adding microformats v2 support (via SemPress).
	https://github.com/pfefferle/SemPress/blob/master/sempress/inc/semantics.php
	https://github.com/pfefferle/SemPress/blob/master/sempress/functions.php
- Added to functions.php new functions, based on plugin 'Disable Emojis' to improve site performance (disabled by default) (only in child themes).
- Added new social network icons for odnoklassniki.ru and getpocket.com.
- Added new HTML5 input types to the comment-form (via SemPress).
- Added for the Fancy Header child theme CSS rules to relocate the whole branding block to the left side, search style.css for: "Move the branding block to the left side".
- Indicate widget sidebars can use selective refresh in the Customizer (via Twenty Twelve).
	https://core.trac.wordpress.org/changeset/37040/trunk/src/wp-content/themes/twentytwelve/functions.php

### Removed
- Tip02 - Optional code to enable favicon for the website, admin area and login page. It was done, because now Site Icon can be set in WordPress.
- Removed non-standard and deprecated webkit CSS rule 'word-break: break-word' that also caused some problems on Arabic RTL sites.
	https://groups.google.com/a/chromium.org/forum/#!msg/chromium-discuss/ZmGeuW9Y1uY/IsfdwkbFCQAJ
	https://wordpress.org/support/topic/various-items-including-p-ul-ol-and-related-lis-have-added-tabs-and-spaces?replies=8
- Removed some functions from parent theme's functions.php that were disabled by default.
- Removed CSS class for post .has-thumbnail in favor of one that already was present in the theme: .has-post-thumbnail.
- Removed itemscope="itemscope" itemtype="https://schema.org/WPHeader" from the div.site-branding as it was duplicate from header. I'm not sure why I did this way before.

### Fixed
- Changed the global value in functions.php for content_width 640 -> 625 because that is current content width, I guess the old value came from the Twenty Twelve theme where sidebar was narrower.
- Fixed Schema.org issue placing "name" inside "Person".
- Escaped attribute text properly in 'aria-label' attributes (via Twenty Sixteen).
	https://github.com/WordPress/twentysixteen/commit/6a5704a45a1da24ba2c2b9b9c165b4611bf06a55
- Fixed menu bug where menu would be incorrectly rendered when enlarging browser window with expanded mobile menu.
	To fix this, additional media query was introduced: @media screen and (max-width: 782px).
	If you're using a child theme, please see Child theme example that is included with the main theme, to see what changes you have to make in style.css.
- Fixed a bunch of small CSS errors.
- Fixed function tinyframework_tax_body_class that was not adding category names to a post BODY classes.
- Added conditional for tinyframework_page_slug_body_class function, so the post/page slug would not be added to category and other archive pages.
- Enabled touch support for nav menu links with sub-items (via Underscores).
	https://github.com/Automattic/_s/issues/957#issuecomment-221962311
	https://github.com/Automattic/_s/pull/963

### Changed
- Dependency update: updated normalize.css to 4.2.0.
- Dependency update: updated Font Awesome 4.3.0 --> 4.6.3.
- Dependency update: updated related CSS styles to Bootstrap 3.3.7.
- IMPORTANT! Enhancement: changed the text domain from tinyframework --> tiny-framework. If you use a child theme in another language, you need to check child theme's files and replace all 'tinyframework' instances with 'tiny-framework' in order for the translated lines to appear.
	I understand, that this change will cause problems to some users, but WordPress.org theme review team basically forced me to do this, please see the announcement post: http://mtomas.com/709/announcing-accessible-wordpress-theme-tiny-framework-2-2
- IMPORTANT! Enhancement: moved custom logo function from inc/plugin-compatibility.php to functions.php as in WordPress 4.5 it became part of the core. After your site will be upgraded to WordPress 4.5 or newer, you can uninstall old Site Logo plugin if you're using it, or Jetpack plugin if you are using it only to get custom site logo feature.
	Because new WordPress custom logo function uses different CSS classes, old child themes have to change old classes to new ones:
	.has-site-logo --> .wp-custom-logo (new theme version includes back-compat. function and CSS styles)
	.site-logo-link --> .custom-logo-link (new theme version includes back-compat. function and CSS styles)
	.site-logo --> .custom-logo (no back-compat. styles, old class is replaced by new one)
- Enhancement: additional functions were added to template-tags.php to deal with the Site Logo migration to WP Custom Logo. See the section "Temporary and deprecated functions" at the end of the file.
- Enhancement: made function tinyframework_the_site_logo replaceable in a child theme.
- Enhancement: Custom Logo Optimisation. Bring custom-logo args closer to custom-header.
	https://core.trac.wordpress.org/changeset/37077
	https://github.com/WordPress/twentysixteen/commit/ba08079cd0795c05b3d955893a0c8156f7c1c0ad
- Enhancement: reverted some changes in editor-style.css (via Twenty Fifteen):
	https://core.trac.wordpress.org/changeset/33418/trunk/src/wp-content/themes/twentyfifteen/css/editor-style.css
- Enhancement: updated h2.entry-title code in content.php adding esc_url (via Underscores).
- Enhancement: updated comparisons to resolve the strict comparison warnings (via Underscores).
	https://github.com/Automattic/_s/commit/268a1e2ced91b2cd5369229e5b7ea2baa739ed1c
- Enhancement: removed unnecessary value passed to get_categories() in tinyframework_categorized_blog() - template-tags.php (via Twenty Sixteen).
- Enhancement: improved CSS formatting.
- Enhancement: don't include pingback unnecessarily (via Twenty Sixteen).
	https://github.com/WordPress/twentysixteen/commit/68d5212d74130262b2b45fd788ea040f536c8ebe
- Enhancement: unified word-break and word-wrap rules.
- Enhancement: changed font-weight values from 700 to bold to make the code more readable.
- Enhancement: improved selector for mailto links (via Twenty Sixteen).
	https://github.com/WordPress/twentysixteen/commit/78109b6b50959fcaf89dd7ef2b63ffa579c409df
- Enhancement: removed some unnecessary browser specific CSS prefixes (via html5please.com).
- Enhancement: improved bottom margin for .post-navigation links. This was especially visible in posts with disabled comments.
- Enhancement: many Schema.org integration improvements.
- Enhancement: changed the class for Sidebar from .secondary --> .sidebar, as Sidebar already has ID #secondary (via Twenty Sixteen).
	https://github.com/WordPress/twentysixteen/commit/f58ea91328162c8eb39d993553402952c3cc21fb
- Enhancement: removed hfeed class from singular pages (via Underscores).
	https://github.com/Automattic/_s/commit/7c2d3ce6eb04be290233e1ae3c83580297789e60
	https://github.com/WordPress/twentysixteen/commit/b533864871e9d37c5c725d344a1338e94dabbaa9
- Enhancement: respect content-search.php for search result in Jetpack Infinite Scroll (via Underscores).
	https://github.com/Automattic/_s/commit/2eb3836006acb454b5cc4b40b4cf61a3bc419046
- Enhancement: set a fixed table-layout in the clearfix to avoid max-width conflict (via Underscores).
	https://github.com/Automattic/_s/commit/6f6de2556860f944f58aa5292b63eafdaa64b60a
- Enhancement: repositioned the window on jump-to-anchor to account for admin bar and border height (via Twenty Sixteen).
	https://github.com/WordPress/twentysixteen/commit/8d6241fc970b50e635e80faed8111a5b7b8b90c5
- Enhancement: updated formatting of the_title with H2 (via Underscores).
	https://github.com/Automattic/_s/commit/60f7311f1977179822e83c95745fa6787894959a
- Enhancement: added styles for all HTML5 input types (via Underscores).
	https://github.com/Automattic/_s/commit/d40faf1e4517173d9745b7697cffcac2fb61a22b
- Enhancement: Prevent 'fieldset' elements overflowing on small screens (via Twenty Sixteen).
	https://github.com/WordPress/twentysixteen/commit/75a4a5e96a1ff8ef8a6152447296b46857a3041c
- Enhancement: updated navigation.js and skip-link-focus-fix.js (via Underscores).
	https://github.com/Automattic/_s/commit/6ae11474be9dc76404c15f5d1b752059d3ad52c4
- Enhancement: improved mobile menu - menu item now shows special icon if it contains submenu.
- Enhancement: improved menu in Full width child theme by positioning submenus on the left side this way preventing submenu items being hidden behind the viewport.
- Enhancement: assigned a zoom-in cursor icon for linked post images.
- Enhancement: use selective refresh to preview changes to Site Title and tagline (Site Description). Fixes issue where wptexturize and other filters fail to apply when previewing changes via postMessage transport (via Twenty Twelve).
	https://core.trac.wordpress.org/changeset/36797
- Enhancement: added itemprop="mainEntityOfPage" after post/page title for single pages/posts as link element. HTML5 specification says that link should be inside HEAD, but it looks that
	at the moment it is a workaround to pass Google's microdata validation:
	http://www.seoskeptic.com/how-to-use-schema-org-v2-0s-mainentityofpage-property/
	Update: replaced it with meta (and url as ID) as per Google recommendation:
	https://developers.google.com/structured-data/rich-snippets/articles#article_markup_properties
	Update 2: appears that Google doesn't validate code based on its own example, reverting back to link element.
- Enhancement: back-compat.php was renamed to back-compat-wp-4-1.php.
- Enhancement: removed content-box box-sizing on search fields (via Underscores).
	https://github.com/Automattic/_s/commit/7304cc1414ab28a9b300a8a7561d950c2bd7623d
	 This might slightly affect child themes.
	 If you see slightly smaller search field, remove all Tip10 CSS rules from your child theme's style.css or set the height to 30px:

	.site-header .search-form [type="search"],
	.site-header .search-form [type="text"] {
		height: 30px;
	}

	In the Full Width child theme you may need to decrease top margin of the top search box by about 3px in 1100px media query:

	.menu-item.menu-item-search {
		margin: 5px 7px 0 0;
		margin: 0.3125rem 0.4375rem 0 0;
	}

- Enhancement: added CSS rules to avoid overflowing wide custom logo in small screens in Firefox and IEs (via Twenty Sixteen).
	https://github.com/WordPress/twentysixteen/commit/4d9f6049f2727f5b7fd34092dda4dc3307fa4cd8
- Enhancement: replaced http://schema.org links with https://schema.org.
- Enhancement: made tinyframework_categorized_blog pluggable (via Twenty Sixteen).
	https://github.com/WordPress/twentysixteen/pull/449/files
- Enhancement: updated theme tags:
	https://core.trac.wordpress.org/ticket/33407
	https://core.trac.wordpress.org/ticket/36744
	https://github.com/WordPress/twentysixteen/issues/457
- Enhancement: consolidate styles for form field/textarea padding (via Underscores).
	https://github.com/Automattic/_s/commit/dc262c6a554e7e4b16a7b55a6804bd7c942400b8#diff-da232d78aa810382f2dcdceae308ff8eL475
- Accessibility: improved edit_post_link function (via Underscores).
	https://github.com/Automattic/_s/commit/b1b13f58d8ad90b293beb474ca83766be2a51ff2
- Accessibility: updated "continue reading" functions (via Twenty Sixteen).
	https://github.com/WordPress/twentysixteen/commit/4bd14a4939cd6fabeaa30970f726985f2eb33ab1
- Accessibility: reset 'word-wrap' for 'screen-reader-text' to ensure screen reader text is read as words and not affected by word-wrap (via Twenty Sixteen).
	https://github.com/WordPress/twentysixteen/commit/4a7578c6aa5490abcbfa7e1bfa201176b27a95f0
- Accessibility: do not show the outline on the skip link target container (via Underscores).
	https://github.com/Automattic/_s/commit/1a7cedc7dd25d29e53d59b2004b8536de431326c
- Accessibility: changed the article text from justified to left-aligned to improve accessibility for the dyslexic users:
	http://uxmovement.com/content/6-surprising-bad-practices-that-hurt-dyslexic-users/
- Accessibility: I take a little step back from the Site Title update in v2.0.3 and wrap Site Title on the Front Page in the link as it is on all other pages. That creates a page link to itself, but simplifies code in many places and mirrors Underscores theme.
- Accessibility: While upgrading Bootstrap 3.3.6 --> 3.3.7 it came to light that it is better to remove forced outline: thin dotted; and leave it up to the browsers:
	https://github.com/twbs/bootstrap/pull/19935
- Translation: updated Russian translation. Big thanks to Sergei Kasaurov!
- Translation: to improve i18n support: '...continue reading %s' changed to => '...continue reading<span class="screen-reader-text"> "%s"</span>' (via Twenty Sixteen).
	https://core.trac.wordpress.org/ticket/31979
	https://github.com/WordPress/twentysixteen/commit/1c5198a1ce00df873bbb539b9600b0f9d029fa6a
- Translation: to improve i18n support: 'Edit %s' changed to => 'Edit<span class="screen-reader-text"> "%s"</span>' (via Twenty Sixteen).
	https://core.trac.wordpress.org/ticket/31979
	https://github.com/WordPress/twentysixteen/commit/cdee6023358f1e79281a9ddbb81a561f14d00779
- Translation: updated comments_popup_link function and translation. Translations of: 1 comment, % comments, etc. will be handled be WordPress (via Underscores).
	https://github.com/Automattic/_s/commit/21208ab38160d8dea2a83b718b08bec8dc6c3c6c
- Translation: unified similar translations replacing "Leave a reply" --> "Leave a comment" in content.php.


= 2.1.1 =
- Released: 2015-07-13
----------------------

### Release info
- Release time investment (Development & QA): ~7 h.
- Free theme support time investment: ~11 h.
- Theme documentation time investment: ~1 h.

### Added
- Translation: added Norwegian (Bokmål) translation. Big thanks to Tore Johnny Bråtveit! http://braatveit.net
- Translation: added Dutch (Nederlands) translation. Big thanks to Paula Anguita! http://paula-anguita.nl
- Translation: added Polish (Polski) translation. Big thanks to Adam Horodecki!
- Documentation: added new tutorial section: Move top navigation menu below the header image (header.php).

### Changed
- Enhancement: improved Site Logo support by using full image size instead of a thumbnail. Thanks Johanna Hector for asking!
	IMPORTANT: If your site's logo breaks or becomes larger because of this update, please size it exactly to the measures you need and re-upload the logo.
	Before theme did not specify the logo size and WordPress was sometimes assigning the thumbnail size, sometimes some different size. This update makes it use full size of the picture, simplifying everything.
- Dependency update: updated related CSS styles to Bootstrap 3.3.5.
- Enhancement: added CSS styles to remove image borders from the icons of the plugin: Share Buttons by AddToAny.
- Enhancement: don't use 'esc_html__()' on translation containing HTML (via Underscores).
	https://github.com/Automattic/_s/commit/a7ad622e4c076bebb994355f983d5d18cb25af48
- Enhancement: escape translations on comments.php, footer.php, functions.php and in custom template tags (via Underscores).
	https://github.com/Automattic/_s/commit/062105ac9de7695715a3a47682f15b5073043fb9
	https://github.com/Automattic/_s/commit/229d5e93dab3d90aabe601354a66538a020b32a5
	https://github.com/Automattic/_s/commit/2d86340f439f03f7a1dfb71868d087649dcd4e1c
	https://github.com/Automattic/_s/commit/6fea1077d89203a8d4ed99a5d36a4ce934fae442
- Enhancement: updated Theme document structure in readme.txt.
- Enhancement: moved $content_width within setup function (via Underscores).
	https://github.com/Automattic/_s/commit/ce796e39a59a07bd793ba9f97c057f3b8958a394
	Big thanks to Fränk Klein for the help figuring that out! http://fklein.info
- Enhancement: improved code for Tip25 - Mark the links that will open in a new window with special icon.
- Enhancement: Use https for Google API external libraries (via Twenty Fifteen).
	https://core.trac.wordpress.org/changeset/32843/trunk/src/wp-content/themes/twentyfifteen/functions.php
- Enhancement: made the code that inserts comments similar in single.php and page.php.
- Enhancement: moved translator comment closer to string for post_content function. Translator comments should be placed directly in the line above the string to be translated, in order for parser to pick it up (via Underscores).
- Enhancement: don't hyphenate input elements (via Twenty Fifteen).
	https://core.trac.wordpress.org/changeset/33093/trunk/src/wp-content/themes/twentyfifteen/style.css
- Enhancement: changed the slug when including Font Awesome font-awesome-iconfont-style -> font-awesome.
	https://themes.trac.wordpress.org/ticket/24494#comment:6
- Translation: updated main POT file and translation files - new references to files and lines.

### Fixed
- Fixed bug in Tip25b.
- Translation: made one spelling correction in German translation. Big thanks to Chris Riederer @ hamborger.de
- Closed span in content.php.


[2.1.0] - 2015-04-30
--------------------

### Changed
- Enhancement: moved template parts into their own dedicated folder and update Infinite Scroll to reflect this change (via Underscores).
	https://github.com/Automattic/_s/commit/71d4231cbebb44800739cb50abac8b251977676f
	This might break compatibility with a custom implementation, but because theme is very young, I hope the chance for that is very small.
- Enhancement: better coding standards for no content template (via Underscores).
	https://github.com/Automattic/_s/commit/7dfe5408f0e6ae650c0647e0679395a7af842eba
- Enhancement: adjusted author title line height in archive view.
- Enhancement: increased size for emoji and smiley icons, so they would look better (for child themes, for Tiny Framework CSS styles are commented out).
- Enhancement: improved CSS styling when Infinite Scroll is active.

- Translation: updated German translation. Big thanks to Ralph Stieber! http://www.happy-end-buecher.de/wissenswertes/impressum/


[2.0.7] - 2015-04-26
--------------------

### Added
- Added new file: js/html5shiv.js - to also have unminified version.

### Changed
- Enhancement: updated CSS styles for Custom Menu widget to make it look similar to Categories widget.
- Enhancement: updated CSS styles for RSS widget.
- Enhancement: improved a:hover CSS styles for Custom Menu and Categories widgets.

- Accessibility: added focus property for the widget links, site title and description, post and archive nvigation links.


[2.0.6] - 2015-04-21
--------------------

### Changed
- Enhancement: increased default widget font size 13px --> 14px.

### Fixed
- Fixed add_query_arg() and remove_query_arg() usage, that could pose security issues:
	https://make.wordpress.org/plugins/2015/04/20/fixing-add_query_arg-and-remove_query_arg-usage/


[2.0.5] - 2015-04-17
--------------------

### Added
- Added new file: js/functions.js to contain various additional JavaScript functions.

- Enhancement: added white search icons in case someone would like to create darker themes.
- Enhancement: added Tip23 - Mark links to documents with corresponding icons for PDF, Word, Excel, PowerPoint and archive documents (style.css).
- Enhancement: added Tip88 - Customize color scheme (style.css) (also in child themes).
- Enhancement: added Tip37 - Automatically style author's name in a blockquote. Author's name should be enclosed in <cite> (style.css) (can also be used in child themes)

- Accessibility: added focus property for the main navigation links in mobile view.
- Accessibility: added function to remove title attributes when the title attribute is the same as the link text (via theme Universal).

- Translation: added new line: "Opens in a new window".

### Changed
- Updated normalize CSS to v3.0.3.

- Enhancement: updated editor styles to better display images and captions in small screens (via Twenty Fifteen).
- Enhancement: increased default FontAwesome icon webfont size 14px --> 16px making it convenient to use in the content.
- Enhancement: increased theme screenshot size to 1200px x 900px (via Underscores).
- Enhancement: increased the Minimum width of first media query 770px --> 783 pixels, so it would be activated at the same time as mobile view of WordPress admin-bar.
- Enhancement: replaced JavaScript for handling the navigation menu accessible tabbing from jQuery solution to vanilla JavaScript (via Underscores).
- Enhancement: disabled external link icon for some popular social sharing plugins' icons.
- Enhancement: make WP admin-bar sticky from the beginning for a consistent user experience and avoid theme menu covering it.
- Enhancement: improved CSS styling of <cite> inside <blockquote>

- Accessibility: made Tip25 accessible (Mark the links that will open in a new window with special icon, usually these are the links to external resources) (via theme Universal).

- Translation: updated Japanese translation. Big thanks to Ishikawa Koutarou! @stein2nd
- Translation: updated Swedish translation. Big thanks to tommywik! https://profiles.wordpress.org/tommywik

### Fixed
- Translation: corrected German translation strings "on" and "no-subset" that should not be translated.
- Fixed mobile menu being covered by WordPress admin-bar. Big thanks to WebTrooper! https://profiles.wordpress.org/webtrooper/
- Prevent very large image with a caption and without alignment overflowing the content.


[2.0.4] - 2015-03-19
--------------------

### Added
- Enhancement: added CSS styles for table head and alternating rows.
- Enhancement: added Tip25c - .no-link-icon CSS class - use it to disable special icon, that marks the links that will open in a new window for an individual link, include "no-link-icon" class for the desired link (style.css)
- Enhancement: added Schema.org markup for body, header, etc... via Greg Rickaby's Schema.org Example Markup:
	http://gregrickaby.com/schema-org-example-markup/ , https://gist.github.com/gregrickaby/5917114
- Enhancement: created two new sections in functions.php - "Functions to optimize performance" and "Functions to increase security".
- Enhancement: added HTML5 support for default core markup: widgets. It will be introduced in WordPress 4.2. Although it is fair to note, that
	currently widget generation is set via functions.php manually. If standard WP generated content of a widget will be similar of what is set via functions.php now, in WordPress 4.4 I'll consider removing manual settings: before_widget and after_widget.

- Accessibility: added outline for buttons.
- Accessibility: added Entry Title just for screen readers for Link, Quote and Status post formats. It is also required to maintain proper heading structure of the document for these post formats.

- Translation: added sentence to the Copyright widget description: Use Text widget with no Title.
- Translation: added Spanish translation. Big thanks to Antonio Sánchez! http://antsanchez.com
- Translation: added Italian translation. Big thanks to en_ry! https://profiles.wordpress.org/en_ry/

### Changed
- Enhancement: replaced hard-coded HTML4 search form for mobile menu with the standard HTML5 form generated by WordPress core.
- Enhancement: replaced hard-coded HTML4 search form in Tip10 for child themes with the standard HTML5 form generated by WordPress core.
	Big thanks to ElectricFeet! http://themesandco.com/snippet/adding-an-html5-search-form-in-your-wordpress-menu/
- Enhancement: updated rtl.css and editor-style-rtl.css files.
- Enhancement: moved Font Awesome files from inc/ to fonts/ folder.
- Enhancement: updated Font Awesome to version 4.3.0.
- Enhancement: updated ie.css styles.
- Enhancement: updated CSS styles for buttons.
- Enhancement: wrapped Entry Title of Aside post format in <header>.
- Enhancement: updated CSS style for Quote post format.
- Enhancement: moved RSS icon style rule lower to prevent it from being overridden by other social icon rules (via Twenty Fifteen).
- Enhancement: replaced Open Sans font fall-back from Helvetica, Arial, "Nimbus Sans L" to Verdana, Geneva, "DejaVu Sans". That gives us
	more consistent character density and feel. https://www.onedesigns.com/tutorials/font-families-for-cross-compatible-typography
- Enhancement: removed line-height for many elements to make them depended on the main line-height of the document and override only when necessary.
- Enhancement: changed CSS $rembase 14px --> 16px (via Underscores).
- Enhancement: adjusted size of H2 and H3 headings in the content area according to "Golden Ratio" for 16px content font size
	(Headlines: 26px; Sub-headlines: 20px; Primary Text: 16px; Secondary Text: 13px), also updated styles for blockquote and other elements. http://www.pearsonified.com/typography/
- Enhancement: unified font sizes used throughout the theme, changing many elements with font of 10px -> 11px; 12px and 14px -> 13px; 15px -> 16px.
- Enhancement: disabled the overflow: hidden for the .site to avoid clipping of top menu sub-items.
- Enhancement: improved text spacing for the first paragraph of a widget when using auto-paragraph feature.
- Enhancement: sanitized location.hash in skip-link-focus-fix.js before passing it to getElementById (via Underscores).
- Enhancement: made navigation consistent - using the comment navigation the same way as the new the_post_navigation() and the_posts_navigation() (via Underscores).
- Enhancement: increased spacing for tap targets in mobile view (manually created social icons, small meta links) to get better Google PageSpeed Insights score.
- Enhancement: changed sidebar container from div to aside.
- Enhancement: changed widget container from aside to section (that is also how it will be by default starting from WordPress 4.2).
- Enhancement: changed widget container of Copyright widget from ul/li to div/section to make it uniform with other footer widgets.
- Enhancement: rewrote anonymous function as tinyframework_modify_archive_title to prevent PHP errors on older servers https://stackoverflow.com/questions/11425559/php-parse-error-syntax-error-unexpected-t-function

- Accessibility: adjusted color for the label of Link post format.
- Accessibility: increased contrast for post meta icons.
- Accessibility: made aria-controls refer to an ID instead of a class. Prevents ARIA error (via Underscores).

- Translation: unified terms Social Menu -> Social Links Menu.

### Fixed
- Moved custom hook, so wp_head() would be the last function before the head tag. Big thanks to Antonio Sánchez!
- Social Menu was not generated by child theme. Big thanks to John MacKenzie!
- Fixed Schema.org error in comments section. Thanks to en_ry! https://profiles.wordpress.org/en_ry/
- Added missing border for the Calendar Widget table bottom cell.
- Fixed width of several comment form input elements to make them not overflow small screens.


[2.0.3] - 2015-01-19
--------------------

### Changed
- Enhancement: moved all Font Awesome files to one location. It will be easier to maintain the font and easier for users to renew font files at will.
- Enhancement: updated editor-style.css to match current front-end styles.
- Enhancement: replaced CSS Reset with CSS Normalize (via Underscores).
- Enhancement: adjusted search field width in mobile menu for normal and focused state, so it would fit on one line for older iPhones.
- Enhancement: consolidated similar code from content.php and author.php into author-bio.php (via Twenty Fifteen).

- Accessibility: fixed background color for #no-javascript. Big thanks to John MacKenzie!
- Accessibility: improved document outline by changing hidden title for Primary Menu H1-->H2 and single post author heading H3-->H2.
- Accessibility: updated Site Title and Site Description code (via Twenty Fifteen). Now on the home page Site Title is H1 and is not a link,
	on archive pages it's H1 link (to keep the constant structure of headings), on single pages it's p. Also moving to one H1 per page.
	It will give clean outline and structure, good for semantics, assistive technology and search engines, see:
	https://core.trac.wordpress.org/ticket/30065#comment:18
	http://blog.rrwd.nl/2014/11/21/html5-headings-in-wordpress-lets-fight/

### Fixed
- Site title and description gets color set in customizer. Big thanks to John MacKenzie!


[2.0.2] - 2015-01-12
--------------------

### Changed
- Enhancement: added custom classes .no-js and .js for HTML element to handle those specific cases when JavaScript is disabled (via Twenty Fifteen).
- Enhancement: updated code for Previous/next comments page navigation to use webicons instead of hard-coded arrows.
- Enhancement: refactored style.css file for child theme example according to the Underscores style.css structure.
- Enhancement: removed Tip23  - Properly resize videos, inserted with oembed - https://wordpress.org/support/topic/properly-resizing-videos-possible-code-addition
	(functions.php, style.css). It was causing problems with embedded tweets.
- Enhancement: updated 404.php and content-none.php to use section instead of article. Also updated section class names (via Underscores).
- Enhancement: addded: content-search.php to inc/examples/ (via Twenty Fifteen).
- Enhancement: changed #site-info and #site-info-2 to .site-info and .site-info-2 to get in line with Underscores.
- Enhancement: dropped support for IE7.
- Enhancement: improved index.php and search.php files (via Twenty Fifteen).
- Enhancement: added new Tip34  - Display image Description field content in attachment view (image.php).
- Enhancement: changed 960px media query to 1100px.


[2.0.1] - 2014-12-18
--------------------

### Changed
- Enhancement: refactored most of the theme files for better readability, understanding and uniformity.
- Enhancement: refactored style.css file according to the Underscores style.css structure.
- Enhancement: updated CSS reset (via Twenty Fifteen and Underscores).
- Enhancement: switched from standard content-box CSS sizing to more natural border-box, see: http://www.paulirish.com/2012/box-sizing-border-box-ftw/
- Enhancement: replaced CSS classes to get more in line with Underscores:
	archive-header -> page-header
	archive-title  -> page-title
	commentlist    -> comment-list
	assistive-text -> screen-reader-text
- Enhancement: replaced functions generating post meta data with new ones, added webicons to describe meta data type (via Twenty Fifteen).
- Enhancement: removed temporary function to let older WP installations use HTML5 galleries.
- Enhancement: removed Custom Header and Background Admin Callbacks (in WP 4.1 these admin screens are removed from the core).
- Enhancement: added theme support for title-tag - let WordPress manage the document title.
- Enhancement: added validation prior activating the theme - Tiny Framework only works in WordPress 4.1 or later (to avoid compatibility code for the title-tag) (via Twenty Fifteen).
- Enhancement: changed the way the_title is coded in posts (via Underscores).
- Enhancement: made the_title of Archive listings h2 instead of h1 - good for accessibility and SEO (via Twenty Fifteen).
- Enhancement: using the new archive template tags and making archive template titling way simpler (via Twenty Fifteen):
	https://core.trac.wordpress.org/changeset/30223
- Enhancement: added Font Awesome webfont and Twitter Bootstrap alerts to the styles of the visual editor (via Twenty Fifteen).
- Enhancement: moved many service functions from functions.php and repeating functions from individual files to template-tags.php.
- Enhancement: moved some repeating peaces of code from theme files to template-tags.php.
- Enhancement: removed all hardcoded webicons from the theme files and embedded them via style.css.
- Enhancement: improved functions.php code that includes Google fonts used as system fonts of the theme (via Twenty Fifteen).
- Enhancement: improved template-tags.php code that adds "...continue reading" link for the automatically generated Excerpts (via Twenty Fifteen).
- Enhancement: updated html5shiv 3.7.0 -> 3.7.2.
- Enhancement: using proper way to get customizer settings values (via Twenty Twelve).
- Enhancement: updated code that generates content page links (via Twenty Fifteen).
- Enhancement: updated code for Previous/next post navigation to use new function the_post_navigation (via Twenty Fifteen).
- Enhancement: added better highlights for tapped links in iOS Safari (via Twenty Fifteen) https://core.trac.wordpress.org/changeset/30590/trunk/src/wp-content/themes/twentyfifteen/style.css .
- Enhancement: menu on touch devices: fixed jQuery selector for menu items with submenus (via Twenty Twelve).
- Enhancement: showing a bio on author entries automatically, if a user has filled out their description.
- Enhancement: removed Tip34 - Display author info card at the bottom of posts on a single author website.
- Enhancement: changed _e -> esc_html_e and __ -> esc_html__ for a better translation security.
- Enhancement: updated functions.php item numbering:
	3.4->3.5 - HTML5 support for default core markup...
	3.5->3.6 - This theme supports a variety of post formats...
	3.6->3.7 - This theme uses wp_nav_menu() in two locations...
	3.7->3.8 - This theme supports custom background color and image...
	3.8->3.9 - This theme uses a custom image size for featured image...
	3.9->3.10 - Tip07 - Add new image size...
	3.10->3.11 - Include Theme Hooks Alliance Hooks...
	3.10b->3.12 - A non-disruptive admin notice to inform users about additional resources...
	3.11->4.1 - Register sidebars...
	3.12->4.5 - Allow Schema.org attributes to be added to HTML tags...
	3.13->4.2 - Add Theme Customizer components...
	3.14->4.3 - Load custom template tags for this theme...
	3.15->4.4 - Load plugin compatibility file...
	4.0->4.6 - Return the Google font stylesheet URL if available...
	5.10->5.9 - Add optional meta tags, scripts to head...
	5.10b->5.10 - Tip02 - Optional code to enable favicon for the website...

- Accessibility: improved menu toggle accessibility. Makes it a little easier to use the primary navigation with assistive devices (via Undersocres).
- Accessibility: made "skip to content" link work correctly in IE9, Chrome, and Opera for better accessibility (via Twenty Fifteen).


[2.0.0] - 2014-11-02
--------------------

### Note
- This changelog reflects theme development going from Tiny Forge v1.6.0 to Tiny Framework v2.0.0

### Added
- Enhancement: new mobile menu look and functionality: sticky menu + integrated search.
- Enhancement: new navigation menu for social networking link management.
- Enhancement: added Tip85 - Add Social Links Menu (optional) (footer.php, style.css, inc/menu-social.php).
- Enhancement: added Tip86 - Style social icons in the sidebar (optional) (style.css) (also in child themes).
- Enhancement: Elusive icon webfont replaced with Font Awesome webfont.
- Enhancement: integrated Theme Hook Alliance custom action hooks - https://github.com/zamoose/themehookalliance
- Enhancement: added Tip87 - Action Hook implementation example (footer.php, functions.php) (also in child themes).
- Enhancement: removed custom logo component in favor of the compatibility with WordPress.com Site Logo feature, that is also available as a component of the Jetpack plugin - https://github.com/Automattic/site-logo , development branch of stand-alone plugin that is no longer maintained http://jetpack.com/support/site-logo/ .
- Enhancement: added Tip14 - Site Logo plugin/feature support. Enable Site Logo for mobile view (header.php, style.css, rtl.css, inc/plugin-compatibility.php).
- Enhancement: added compatibility for Jetpack's Infinite Scroll.
- Enhancement: added Tip35 - Jetpack Infinite Scroll support (style.css, inc/plugin-compatibility.php).
- Enhancement: replaced #main with .wrapper in style.css to make it easier to adjust html structure in the future.
- Enhancement: fixed main website's document structure to get in line with Underscores theme:
	.wrapper --> .site-content in header.php,
	div id="main" --> div id="content" in header.php,
	main id="content" --> main id="main" in single.php and in all archive templates,
	.site-content --> .content-area in single.php and in all archive templates,
	.entry-header --> .page-header for pages
	.entry-title --> .page-title for pages
	added class="site-main" to main in single.php and in all archive templates.
- Enhancement: moved some of the Footer code to functions.php file. This will make easier to develop with child themes - to make changes in the Footer, you will not need to copy actual footer.php file, but instead make all changes in functions.php file.
- Enhancement: cleaned up functions.php making it more readable, moved some functions to inc/template-tags.php.
- Enhancement: added escaping to custom header (proper attribute escaping is added) (via Underscores).
- Enhancement: improved 404.php and added sidebar to it for more consistent look (via Underscores).
- Enhancement: external link icon image replaced with web font icon.
- Enhancement: added additional CSS rules to style.css to change the site layout.
- Enhancement: added Tip52 - Adjust default site layout for normal view (style.css) (also in child themes).
- Enhancement: added Tip52b - Change site layout (position of sidebar) for normal view (style.css) (also in child themes).
- Enhancement: added website's document structure schema to readme.txt.
- Enhancement: added Tip01b - Properly exclude (dequeue and/or deregister) CSS and JavaScript files via functions.php.
- Enhancement: added Tip53  - Change vertical spacing between lines in Recent Posts widget (style.css) (also in child themes).
- Enhancement: changing @-ms-viewport width from device-width to auto!important to fix IE scrollbar covering part of the website and particularly obstructing the scrollbar of a large mobile menu ( https://stackoverflow.com/questions/17045132/scrollbar-overlay-in-ie10-how-do-you-stop-that-might-be-bootstrap ).

- Accessibility: made small-screen menu accessible to keyboard commands and voice-driven software by using a focusable button element rather than h1 for the toggle element (via Twenty Twelve). Developers, ir you're using custom child theme that has its own header.php, change the header.php line:

	<h1 class="menu-toggle"><?php _e( 'Menu', 'tiny-framework' ); ?></h1>

	to

	<button class="menu-toggle"><?php _e( 'Menu', 'tiny-framework' ); ?></button>
- Accessibility: added outline that affects all links on the site.
- Accessibility: added focus property for site content links and login/admin links in the footer.
- Accessibility: added underline for top navigation links in focus state (navigating with keyboard).
- Accessibility: adjusted content text color #333 --> #222 to get better contrast ratio with links.
- Accessibility: adjusted content link color #0066cc --> #0066df to get 3:1 contrast ratio from the surrounding non-link text.
- Accessibility: adjusted content link: hover color #FC9F00 --> #ff6111 to get better contrast ratio from the background (3.0).
- Accessibility: adjusted Archive Title color #8DC919 --> #6BA420 to get better contrast ratio from the background (3.0).
- Accessibility: adjusted Widget Title color #FC9F00 --> #ff6111 to get better contrast ratio from the background (3.0).
- Accessibility: adjusted site-admin link colors to get better contrast ratio.
- Accessibility: increased font size for blockquote 18px --> 24px, so lighter color could be used.
- Accessibility: increased font size for archive page navigation 14px --> 18px, so lighter color could be used.
- Accessibility: improved "...continue reading" link with additional text (title of the post) for screen readers.
- Accessibility: added aria-label and H1 heading for Primary Menu in Header.
- Accessibility: added aria-labelledby and H1 Footer heading.
- Accessibility: added aria-labelledby and H1 Main Sidebar heading.
- Accessibility: moved "Skip to content" link right below the BODY.
- Accessibility: only show the description heading if the site description has been set. Big thanks to Daniel Davis http://daniemon.com/blog/accessible-wp-theme-twenty-twelve/
- Accessibility: increased contrast in buttons.
- Accessibility: added aria-hidden="true" to spans with &bull; &rarr; &larr; &raquo; &laquo; unreadable symbols.
- Accessibility: made decorative elements hidden to screen readers with aria-hidden="true".
- Accessibility: included additional text for screen readers to indicate protected and private posts/pages (in Tiny Framework it is done with the help of webfont icons).

- Translation: significant changes compared to Tiny Forge, translation will have to be redone.


This changelog is also available at: http://mtomas.com/521/tiny-framework-wordpress-theme-version-history

All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/). Or at least tries to adhere...

Given a version number MAJOR.MINOR.PATCH, increment the:

    MAJOR version when you make incompatible API changes,
    MINOR version when you add functionality in a backwards-compatible manner, and
    PATCH version when you make backwards-compatible bug fixes.

Additional labels for pre-release and build metadata are available as extensions to the MAJOR.MINOR.PATCH format.

Numeric identifiers always have lower precedence than non-numeric identifiers. A larger set of pre-release fields has
a higher precedence than a smaller set, if all of the preceding identifiers are equal. Example:

1.0.0-alpha < 1.0.0-alpha.1 < 1.0.0-beta < 1.0.0-beta.2 < 1.0.0-rc.1 < 1.0.0.

Want to write better changelogs? See: https://github.com/olivierlacan/keep-a-changelog


### Added (new features)
### Changed (changes in existing functionality)
### Deprecated (once-stable features removed in upcoming releases)
### Removed (deprecated features removed in this release)
### Fixed (any bug fixes)
### Security (invite users to upgrade in case of vulnerabilities)


== Happy coding! ==

Tomas Mackevicius http://mtomas.com - services@mtomas.com - @TomasMack

"Ut In Omnibus Glorificetur Deus" ~Saint Benedict of Nursia
