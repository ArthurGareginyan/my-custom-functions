<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.1
 */
function MCFunctions_load_scripts_admin( $hook ) {

    // Return if the page is not a settings page of this plugin
    $settings_page = 'appearance_page_' . MCFUNC_SLUG;
    if ( $settings_page != $hook ) {
        return;
    }

    // Style sheet
    wp_enqueue_style( MCFUNC_PREFIX . '-admin-css', MCFUNC_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( MCFUNC_PREFIX . '-admin-js', MCFUNC_URL . 'inc/js/admin.js', array(), false, true );

    // Bootstrap library
    wp_enqueue_style( MCFUNC_PREFIX . '-bootstrap-css', MCFUNC_URL . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( MCFUNC_PREFIX . '-bootstrap-theme-css', MCFUNC_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( MCFUNC_PREFIX . '-bootstrap-js', MCFUNC_URL . 'inc/lib/bootstrap/bootstrap.js' );

    // CodeMirror library
    wp_enqueue_style( MCFUNC_PREFIX . '-codemirror-css', MCFUNC_URL . 'inc/lib/codemirror/codemirror.css' );
    wp_enqueue_script( MCFUNC_PREFIX . '-codemirror-js', MCFUNC_URL . 'inc/lib/codemirror/codemirror-compressed.js' );
    wp_enqueue_script( MCFUNC_PREFIX . '-codemirror-active-line-js', MCFUNC_URL . 'inc/lib/codemirror/addons/active-line.js' );

}
add_action( 'admin_enqueue_scripts', MCFUNC_PREFIX . '_load_scripts_admin' );
