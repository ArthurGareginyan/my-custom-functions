<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Delete options on uninstall
 *
 * @since 4.1
 */
function MCFunctions_uninstall() {
    delete_option( MCFUNC_SETTINGS . '_settings' );
    delete_option( MCFUNC_SETTINGS . '_error' );
}
register_uninstall_hook( __FILE__, MCFUNC_PREFIX . '_uninstall' );
