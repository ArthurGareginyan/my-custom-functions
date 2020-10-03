<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generator of the hidden option for saving plugin settings to database
 */
function spacexchimp_p001_control_hidden( $name, $value ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p001_plugin();

    // Generate a part of table
    $out = "<input
                type='hidden'
                name='" . $plugin['settings'] . "_settings[$name]'
                id='" . $plugin['settings'] . "_settings[$name]'
                value='$value'
                class='control-hidden $name'
            >";

    // Print the generated part of table
    echo $out;
}
