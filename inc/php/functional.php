<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Prepare the custom code
 */
function spacexchimp_p001_prepare() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p001_plugin();

    // Retrieve options from database and declare variables
    $options = get_option( $plugin['settings'] . '_settings' );
    $data = !empty( $options['snippets'] ) ? $options['snippets'] : '';
    $enable = !empty( $options['enable'] ) ? $options['enable'] : '';

    // Prepare a variable for storing the processed data
    $data_out = "";

    // If data is not empty...
    if ( ! empty( $data ) ) {

        // If the custom code is enabled...
        if ( $enable == "on") {

            // Prepare a variable for storing the processing data, and perform data processing
            $data_tmp = $data;
            $data_tmp = trim( $data_tmp );           // Cleaning
            $data_tmp = ltrim( $data_tmp, '<?php' ); // Cleaning
            $data_tmp = rtrim( $data_tmp, '?>' );    // Cleaning

            $data_out .= $data_tmp;
        }
    }

    // Return the processed data
    return $data_out;
}

/**
 * Preparation of the custom code: Check the custom code for duplicate names of functions
 */
function spacexchimp_p001_preparation_duplicates( $data ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p001_plugin();

    // Find names of user entered snippets and check for duplicates
    preg_match_all('/function[\s\n]+(\S+)[\s\n]*\(/i', $data, $user_func_names);
    $user_func_a = count( $user_func_names[1] );
    $user_func_b = count( array_unique( $user_func_names[1] ) );

    // Find all names of declared user snippets and mutch with names of user entered snippets
    $declared_func = get_defined_functions();
    $declared_func_user = array_intersect( $user_func_names[1], $declared_func['user'] );
    $declared_func_internal = array_intersect( $user_func_names[1], $declared_func['internal'] );

    // Update error status
    if ( $user_func_a != $user_func_b OR count( $declared_func_user ) != 0 OR count( $declared_func_internal ) != 0 ) {
        update_option( $plugin['settings'] . '_error', '1' );   // ERROR
        $error_status = '1';
    } else {
        update_option( $plugin['settings'] . '_error', '0' );   // RESET ERROR VALUE
        $error_status = '0';
    }

    // Return error status
    return $error_status;
}

/**
 * Process the custom code
 */
function spacexchimp_p001_exec() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p001_plugin();

    // If the STOP file exist...
    if ( file_exists( $plugin['path'] . 'STOP' ) ) {
        return;   // EXIT
    }

    // Get the custom code by calling the "prepare" function
    $data = spacexchimp_p001_prepare();

    // If data is empty...
    if ( empty( $data ) OR $data == ' ' ) {
        return;   // EXIT
    }

    // If the duplicates snippets finded...
    $duplicates = spacexchimp_p001_preparation_duplicates( $data );
    if ( $duplicates != 0 ) {
        return;   // EXIT
    }

    // Parsing and execute by Eval
    if ( false === @eval( $data ) ) {
        update_option( $plugin['settings'] . '_error', '1' );   // ERROR
        return;   // EXIT
    } else {
        update_option( $plugin['settings'] . '_error', '0' );   // RESET ERROR VALUE
    }
}

/**
 * Inject the custom code into the website's backend and frontend
 */
spacexchimp_p001_exec();
