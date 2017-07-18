/**
 * functions.js
 *
 * Various additional functions.
 * 
 * v.2.0.5
 */

(function( $ ) { 'use strict';

	/* Accessibility enhancements
	 *
	 * Tip25 - Mark the links that will open in a new window with special icon, usually these are the links to external resources.
	 */
	$( '.entry-content a[target="_blank"]' ).append( '<span class="icon-webfont fa-external-link" aria-hidden="true"></span><span class="screen-reader-text">' + tinyframeworkAdditionalScripts.newWindow + '</span>' );

	// Remove title attributes when the title attribute is the same as the link text
    $('*').each( function () {
        var self = $(this);
        var theTitle = $.trim( self.attr( 'title' ) );
        var theText = $.trim( self.text() );
        if ( theTitle === theText ) {
            self.removeAttr( 'title' );
        }
    } );

} )(jQuery);
