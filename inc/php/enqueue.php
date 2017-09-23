<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Load scripts and style sheet for settings page
 */
function spacexchimp_p001_load_scripts_admin( $hook ) {

    // Put value of constants to variables for easier access
    $slug = SPACEXCHIMP_P001_SLUG;
    $prefix = SPACEXCHIMP_P001_PREFIX;
    $url = SPACEXCHIMP_P001_URL;

    // Return if the page is not a settings page of this plugin
    $settings_page = 'settings_page_' . $slug;
    if ( $settings_page != $hook ) return;

    // Load jQuery library
    wp_enqueue_script( 'jquery' );

    // Bootstrap library
    wp_enqueue_style( $prefix . '-bootstrap-css', $url . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( $prefix . '-bootstrap-theme-css', $url . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( $prefix . '-bootstrap-js', $url . 'inc/lib/bootstrap/bootstrap.js' );

    // Font Awesome library
    wp_enqueue_style( $prefix . '-font-awesome-css', $url . 'inc/lib/font-awesome/css/font-awesome.css', 'screen' );

    // CodeMirror library
    wp_enqueue_style( $prefix . '-codemirror-css', $url . 'inc/lib/codemirror/codemirror.css' );
    wp_enqueue_script( $prefix . '-codemirror-js', $url . 'inc/lib/codemirror/codemirror-compressed.js' );
    wp_enqueue_script( $prefix . '-codemirror-active-line-js', $url . 'inc/lib/codemirror/addons/active-line.js' );

    // Other libraries
    wp_enqueue_script( $prefix . '-bootstrap-checkbox-js', $url . 'inc/lib/bootstrap-checkbox.js' );

    // Style sheet
    wp_enqueue_style( $prefix . '-admin-css', $url . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( $prefix . '-admin-js', $url . 'inc/js/admin.js', array(), false, true );

}
add_action( 'admin_enqueue_scripts', 'spacexchimp_p001_load_scripts_admin' );
