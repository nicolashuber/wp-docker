/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

import $ from 'jquery'

// Site title and description.
wp.customize( 'blogname', value => {
    value.bind( to => {
        $( '.branding__name' ).text( to )
    } )
} )

// Header text color.
wp.customize( 'header_textcolor', value => {
    value.bind( to => {
        $( '.header, .header a' ).css( {
            'color': to
        } )
    } )
} )
