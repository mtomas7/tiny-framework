Tiny Framework
==============

License: GNU General Public License v2 or later

License URI: http://www.gnu.org/licenses/gpl-2.0.html

Theme URI: http://mtomas.com/1/

Theme URI (GitHub): https://github.com/mtomas7/tiny-framework

Author: Tomas Mackevicius

Author URI: http://mtomas.com

Copyright: Tomas Mackevicius (see Copyright section below for more details)

To support future development of this theme you can contribute directly by donating with PayPal (if you prefer, you can visit PayPal.com directly and send a payment to services [at] mtomas.com):

Donate link:  https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=CYA7XMLU8ENS2&lc=US&item_name=Free-WordPress-themes-by-TomasM&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted


Description
-----------

Tiny Framework WordPress theme was created with the future in mind and encompasses all the best features of the default WordPress themes in one place, adds full accessibility and Structured Data Markup with Schema.org microdata format support. Fast start is ensured with very extensive documentation!

Tiny Framework features elegant responsive mobile-first design, HTML5 ready structure of Underscores, custom per-post headers, custom logo, three footer widgets, FontAwesome icon webfont and Google Fonts support. Web developers will enjoy integrated Theme Hook Alliance custom action hooks. It's all there, you have everything in one neat package.

Tiny Framework can be used as a learning tool or your own little web development "framework" a.k.a. "starter theme". With its unique "Coding Tips System" Tiny Framework helps to understand how to extend parent themes and build your own child themes, hacking them the way you want. Along with the main theme you will find an example of a child theme - an easy way to start developing with child themes! You get the best coding examples from default WordPress themes and the best hacks from the child theme.

For more information about Tiny Framework please go to http://mtomas.com/1/


Installation
------------

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

	Twitter: @TomasMack


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

```
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
				<main id="main" class="site-main">
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
```

Archive example for category.php
--------------------------------

```
...
<section id="primary" class="content-area">
	<main id="main" class="site-main">
		<header class="page-header">
			<h1 class="page-title">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title">
				<div class="entry-meta">
			<div class="entry-content">
...
```


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
Source: http://justintadlock.com/archives/2013/08/14/social-nav-menus-part-2
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

Underscores    - 1.0   - 2017-07-18 - https://github.com/Automattic/_s/
Twenty Twelve  - 2.2   - 2017-07-18 - https://core.trac.wordpress.org/browser/trunk/src/wp-content/themes/twentytwelve?order=date&desc=1
Twenty Fifteen - 1.7   - 2017-07-18 - https://core.trac.wordpress.org/browser/trunk/src/wp-content/themes/twentyfifteen?order=date&desc=1


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


== Happy coding! ==

Tomas Mackevicius http://mtomas.com - Twitter: @TomasMack

"Ut In Omnibus Glorificetur Deus" ~Saint Benedict of Nursia
