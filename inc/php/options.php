<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

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
    $list = array(
        'enable' => (boolean) '', // custom
        'hidden_scrollto' => (integer) '0', // _control_hidden
        'snippets' => (string) '', // custom
    );
    foreach ( $list as $name => $default ) {

        // Set default value if option is empty
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;
    }

    // Sanitize data
    //$array['enable'] = esc_textarea( $array['enable'] );
    //$array['hidden_scrollto'] = esc_textarea( $array['hidden_scrollto'] );
    //$array['snippets'] = esc_textarea( $array['snippets'] );

    // Modify data
    $array['enable'] = ( $array['enable'] == 'on' || $array['enable'] == '1' || $array['enable'] == 'true' ) ? true : false;

    // Return the processed data
    return $array;
}
