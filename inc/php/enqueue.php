<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Callback to enqueue the CodeMirror library
 */
function spacexchimp_p001_load_scripts_codemirror( $prefix, $url, $version ) {

    // Enqueue main files of the CodeMirror library
    wp_enqueue_style( $prefix . '-codemirror-css', $url . 'inc/lib/codemirror/lib/codemirror.css', array(), $version, 'all' );
    wp_enqueue_script( $prefix . '-codemirror-js', $url . 'inc/lib/codemirror/lib/codemirror.js', array(), $version, false );

    // Enqueue settings file
    wp_enqueue_script( $prefix . '-codemirror-settings-js', $url . 'inc/js/codemirror-settings.js', array(), $version, true );

    // Enqueue addons
    $addons = array(
                    'display' => array( 'autorefresh', 'placeholder' ),
                    'selection' => array( 'active-line' )
                   );
    foreach ( $addons as $addons_group_name => $addons_group ) {
        foreach ( $addons_group as $addon ) {
            wp_enqueue_script( $prefix . '-codemirror-addon-' . $addon . '-js', $url . 'inc/lib/codemirror/addon/' . $addons_group_name . '/' . $addon . '.js', array(), $version, false );
        }
    }

    // Enqueue modes
    $modes = array(
                    'clike',
                    'css',
                    'htmlmixed',
                    'javascript',
                    'php',
                    'xml'
                  );
    foreach ( $modes as $mode ) {
        wp_enqueue_script( $prefix . '-codemirror-mode-' . $mode . '-js', $url . 'inc/lib/codemirror/mode/' . $mode . '/' . $mode . '.js', array(), $version, true );
    }

}

/**
 * Load scripts and style sheet for settings page
 */
function spacexchimp_p001_load_scripts_admin( $hook ) {

    // Put value of constants to variables for easier access
    $slug = SPACEXCHIMP_P001_SLUG;
    $prefix = SPACEXCHIMP_P001_PREFIX;
    $url = SPACEXCHIMP_P001_URL;
    $version = SPACEXCHIMP_P001_VERSION;

    // Return if the page is not a settings page of this plugin
    $settings_page = 'settings_page_' . $slug;
    if ( $settings_page != $hook ) return;

    // Load jQuery library
    wp_enqueue_script( 'jquery' );

    // Bootstrap library
    wp_enqueue_style( $prefix . '-bootstrap-css', $url . 'inc/lib/bootstrap/bootstrap.css', array(), $version, 'all' );
    wp_enqueue_style( $prefix . '-bootstrap-theme-css', $url . 'inc/lib/bootstrap/bootstrap-theme.css', array(), $version, 'all' );
    wp_enqueue_script( $prefix . '-bootstrap-js', $url . 'inc/lib/bootstrap/bootstrap.js', array(), $version, false );

    // Font Awesome library
    wp_enqueue_style( $prefix . '-font-awesome-css', $url . 'inc/lib/font-awesome/css/font-awesome.css', array(), $version, 'screen' );

    // Other libraries
    wp_enqueue_script( $prefix . '-bootstrap-checkbox-js', $url . 'inc/lib/bootstrap-checkbox.js', array(), $version, false );

    // Style sheet
    wp_enqueue_style( $prefix . '-admin-css', $url . 'inc/css/admin.css', array(), $version, 'all' );

    // JavaScript
    wp_enqueue_script( $prefix . '-admin-js', $url . 'inc/js/admin.js', array(), $version, true );

    // Call the function that enqueue the CodeMirror library
    spacexchimp_p001_load_scripts_codemirror( $prefix, $url, $version );

}
add_action( 'admin_enqueue_scripts', 'spacexchimp_p001_load_scripts_admin' );
