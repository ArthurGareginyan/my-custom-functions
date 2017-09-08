<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Prepare the user entered code for execution
 */
function spacexchimp_p001_prepare( $content ) {

    // Cleaning
    $content = trim( $content );
    $content = ltrim( $content, '<?php' );
    $content = rtrim( $content, '?>' );

    // Return prepared code
    return $content;
}

/**
 * Check the user entered code for duplicate names of snippets
 */
function spacexchimp_p001_duplicates( $content ) {

    // Find names of user entered snippets and check for duplicates
    preg_match_all('/function[\s\n]+(\S+)[\s\n]*\(/i', $content, $user_func_names);
    $user_func_a = count( $user_func_names[1] );
    $user_func_b = count( array_unique( $user_func_names[1] ) );

    // Find all names of declared user snippets and mutch with names of user entered snippets
    $declared_func = get_defined_functions();
    $declared_func_user = array_intersect( $user_func_names[1], $declared_func['user'] );
    $declared_func_internal = array_intersect( $user_func_names[1], $declared_func['internal'] );

    // Update error status
    if ( $user_func_a != $user_func_b OR count( $declared_func_user ) != 0 OR count( $declared_func_internal ) != 0 ) {
        update_option( SPACEXCHIMP_P001_SETTINGS . '_error', '1' );   // ERROR
        $error_status = '1';
    } else {
        update_option( SPACEXCHIMP_P001_SETTINGS . '_error', '0' );   // RESET ERROR VALUE
        $error_status = '0';
    }

    // Return error status
    return $error_status;
}

/**
 * Execute the user entered code
 */
function spacexchimp_p001_exec() {

    // If STOP file exist...
    if ( file_exists( SPACEXCHIMP_P001_PATH . 'STOP' ) ) {
        return;   // EXIT
    }

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P001_SETTINGS . '_settings' );
    $content = !empty( $options['snippets'] ) ? $options['snippets'] : ' ';
    $enable = !empty( $options['enable'] ) ? $options['enable'] : ' ';

    // If the user entered code is disabled...
    if ( $enable != 'on') {
        return;   // EXIT
    }

    // Prepare the user entered snippets by calling the "prepare" function
    $content = spacexchimp_p001_prepare( $content );

    // If content is empty...
    if ( empty( $content ) OR $content == ' ' ) {
        return;   // EXIT
    }

    // If the duplicates snippets finded...
    $duplicates = spacexchimp_p001_duplicates( $content );
    if ( $duplicates != 0 ) {
        return;   // EXIT
    }

    // Parsing and execute by Eval
    if ( false === @eval( $content ) ) {
        update_option( SPACEXCHIMP_P001_SETTINGS . '_error', '1' );   // ERROR
        return;   // EXIT
    } else {
        update_option( SPACEXCHIMP_P001_SETTINGS . '_error', '0' );   // RESET ERROR VALUE
    }
}
spacexchimp_p001_exec();
