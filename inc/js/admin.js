/*
 * Plugin JavaScript and jQuery code for the admin pages of website
 *
 * @package     My Custom Functions
 * @author      Arthur Gareginyan
 * @link        https://www.spacexchimp.com
 * @copyright   Copyright (c) 2016-2021 Space X-Chimp. All Rights Reserved.
 */


jQuery(document).ready(function($) {

    "use strict";

    // Remove the 'successful' message after 3 seconds
    if ('.updated') {
        setTimeout(function() {
            $('.updated').fadeOut();
        }, 3000);
    }

    // Add a dynamic content to the plugin settings page. Needed for having an up to date banners
    $('.include-tab-store').load('https://resources.spacexchimp.com/wordpress/plugins/dynamic-content/page.html');

    // Add questions and answers into spoilers and color them in different colors
    $('.panel-group .panel').each(function(i) {
        $('.question-' + (i+1) ).appendTo( $('h4', this) );
        $('.answer-' + (i+1) ).appendTo( $('.panel-body', this) );

        if ( $(this).find('h4 div').hasClass('question-red') ) {
            $(this).addClass('panel-danger');
        } else {
            $(this).addClass('panel-info');
        }
    });

    // Enable switches
    $('.control-switch-onoff').checkboxpicker({
        reverse: true,
        offLabel: 'OFF',
        onLabel: 'ON'
    });

});
