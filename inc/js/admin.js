/*
 * Plugin JavaScript and jQuery code for the admin pages of website
 *
 * @package     My Custom Functions
 * @author      Arthur Gareginyan
 * @link        https://www.spacexchimp.com
 * @copyright   Copyright (c) 2016-2018 Space X-Chimp. All Rights Reserved.
 */


jQuery(document).ready(function($) {

    "use strict";

    // Remove the 'successful' message after 3 seconds
    if ('.updated') {
        setTimeout(function() {
            $('.updated').fadeOut();
        }, 3000);
    }

    // Add dynamic content to page tabs. Needed for having an up to date content.
    $('.include-tab-store').load('https://www.spacexchimp.com/assets/dynamic-content/plugins.html #include-tab-store');

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

    // Enable switches (on/off)
    $('.control-switch-onoff').checkboxpicker({
        reverse: true,
        offLabel: 'OFF',
        onLabel: 'ON'
    });

    // Find all textareas on page
    $('textarea').each(function(index, elements) {

        // Change textarea to CodeMirror editor
        var editor = CodeMirror.fromTextArea( elements , {
            lineNumbers: true,
            firstLineNumber: 1,
            matchBrackets: true,
            indentUnit: 4,
            mode: 'text/x-php',
            styleActiveLine: true
        });

        // Refresh CodeMirror editor after 1 second
        setTimeout(function() {
            editor.refresh();
        },1);
    });

});
