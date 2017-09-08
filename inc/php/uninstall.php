<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Delete options on uninstall
 */
function spacexchimp_p001_uninstall() {
    delete_option( SPACEXCHIMP_P001_SETTINGS . '_settings' );
    delete_option( SPACEXCHIMP_P001_SETTINGS . '_error' );
}
register_uninstall_hook( __FILE__, 'spacexchimp_p001_uninstall' );
