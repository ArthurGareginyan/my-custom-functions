<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Delete options on uninstall
 *
 * @since 0.1
 */
function MCFunctions_uninstall() {
    delete_option( 'anarcho_cfunctions_settings' );
    delete_option( 'anarcho_cfunctions_error' );
}
register_uninstall_hook( __FILE__, 'MCFunctions_uninstall' );
