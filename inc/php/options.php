<?php

/**
 * A useful function that returns an array with the value of the plugin options
 */
function spacexchimp_p001_options() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p001_plugin();

    // Retrieve options from database
    $options = get_option( $plugin['settings'] . '_settings' );

    // Make the "$options" array if the plugin options data in the database is not exist
    if ( ! is_array( $options ) ) {
        $options = array();
    }

    // Create an array with options
    $array = $options;

    // Return the processed data
    return $array;
}
