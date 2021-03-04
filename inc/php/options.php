<?php

/**
 * Callback function that returns an array with the value of the plugin options
 * @return array
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

    // Set default value if option is empty
    $array['hidden_scrollto'] = !empty( $options['hidden_scrollto'] ) ? $options['hidden_scrollto'] : '0';
    $array['snippets'] = !empty( $options['snippets'] ) ? $options['snippets'] : '';
    $array['enable'] = !empty( $options['enable'] ) ? $options['enable'] : '';

    // Return the processed data
    return $array;
}
