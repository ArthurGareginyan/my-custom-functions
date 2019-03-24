<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Function for managing information about the version number of the plugin
 */
function spacexchimp_p001_versioning() {

    ///////////////////////////////////////////////////////////////////
    //                       SETTING VARIABLES                       //
    ///////////////////////////////////////////////////////////////////

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p001_plugin();
    $version_files = $plugin['version'];

    // Read the plugin service information from the database and put it into an array
    $info = get_option( $plugin['settings'] . '_service_info' );

    // Make the "$info" array if the plugin service information in the database is not exist
    if ( ! is_array( $info ) ) {
        $info = array();
    }

    // Get the current plugin version number from the database
    $version_db = !empty( $info['version'] ) ? $info['version'] : '0';

    ///////////////////////////////////////////////////////////////////
    //                       FORMATTING NUMBERS                      //
    ///////////////////////////////////////////////////////////////////

    // Clean the version number from extra digits
    $version_db = substr( $version_db, 0, 4 );
    $version_files = substr( $version_files, 0, 4 );
    if  ( ! is_numeric( $version_db ) ) {
        $version_db = number_format( floor( $version_db * 100 ) / 100, 1, '.', '' );
    }
    if  ( ! is_numeric( $version_files ) ) {
        $version_files = number_format( floor( $version_files * 100 ) / 100, 1, '.', '' );
    }

    // Count the number of decimal digits in version number
    $version_db_count = strlen( substr( strrchr( $version_db, "."), 1 ) );
    $version_files_count = strlen( substr( strrchr( $version_files, "."), 1 ) );

    // Fix decimals if the number of decimal digits in version number is 1
    if ( $version_db_count == '1' ) {
        $version_db_formated = ( $version_db - floor( $version_db ) ) / 10;
        $version_db_formated = ( floor( $version_db ) + $version_db_formated );
        $version_db = sprintf( '%0.2f', $version_db_formated );
    }
    if ( $version_files_count == '1' ) {
        $version_files_formated = ( $version_files - floor( $version_files ) ) / 10;
        $version_files_formated = ( floor( $version_files ) + $version_files_formated );
        $version_files = sprintf( '%0.2f', $version_files_formated );
    }

    ///////////////////////////////////////////////////////////////////
    //                       COMPARING NUMBERS                       //
    ///////////////////////////////////////////////////////////////////

    // If the version number in the database is same as the new version number:
    // - Reset the "old_version" marker in the database
    // - Exit from this function
    if ( $version_files == $version_db ) {

        if ( $info['old_version'] == '1' ) {

            $info['old_version'] = '0';
            update_option( $plugin['settings'] . '_service_info', $info );

        }

        return;
    }

    // If the version number in the database is smaller than the new version number:
    // - Save the new version number to the database
    // - Update the "old_version" marker in the database
    // - Exit from this function
    if ( $version_files > $version_db ) {

        $info['version'] = $version_files;
        $info['old_version'] = '0';
        update_option( $plugin['settings'] . '_service_info', $info );

        return;
    }

    // If the version number in the database is greater than the new version number:
    // - Save the "old_version" marker to the database
    // - Exit from this function
    if ( $version_files < $version_db ) {

        $info['old_version'] = '1';
        update_option( $plugin['settings'] . '_service_info', $info );

        return;
    }

}
spacexchimp_p001_versioning();
