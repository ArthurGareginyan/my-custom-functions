<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Register text domain
 */
function spacexchimp_p001_textdomain() {
    load_plugin_textdomain( SPACEXCHIMP_P001_TEXT, false, SPACEXCHIMP_P001_DIR . '/languages/' );
}
add_action( 'init', 'spacexchimp_p001_textdomain' );

/**
 * Print direct link to plugin admin page
 *
 * Fetches array of links generated by WP Plugin admin page ( Deactivate | Edit )
 * and inserts a link to the plugin admin page
 *
 * @param  array $links Array of links generated by WP in Plugin Admin page.
 * @return array        Array of links to be output on Plugin Admin page.
 */
function spacexchimp_p001_settings_link( $links ) {
    $page = '<a href="' . admin_url( 'themes.php?page=' . SPACEXCHIMP_P001_SLUG . '.php' ) .'">' . __( 'Settings', SPACEXCHIMP_P001_TEXT ) . '</a>';
    array_unshift( $links, $page );
    return $links;
}
add_filter( 'plugin_action_links_' . SPACEXCHIMP_P001_BASE, 'spacexchimp_p001_settings_link' );

/**
 * Print link to My Custom Functions PRO page
 */
function spacexchimp_p001_upgrade_link( $links ) {
    $upgrade_page = '<a href="https://www.spacexchimp.com/plugins/my-custom-functions-pro.html" target="_blank"><b style="color:red;">' . __( 'Upgrade to PRO', SPACEXCHIMP_P001_TEXT ) . '</b></a>';
    array_unshift( $links, $upgrade_page );
    return $links;
}
add_filter( 'plugin_action_links_' . SPACEXCHIMP_P001_BASE, 'spacexchimp_p001_upgrade_link' );

/**
 * Print additional links to plugin meta row
 */
function spacexchimp_p001_plugin_row_meta( $links, $file ) {

    if ( strpos( $file, SPACEXCHIMP_P001_SLUG . '.php' ) !== false ) {

        $new_links = array(
                           'donate' => '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank"><span class="dashicons dashicons-heart"></span> ' . __( 'Donate', SPACEXCHIMP_P001_TEXT ) . '</a>',
                           'upgrage' => '<a href="https://www.spacexchimp.com/plugins/my-custom-functions-pro.html" target="_blank"><span class="dashicons dashicons-star-filled"></span> ' . __( 'Upgrade to PRO', SPACEXCHIMP_P001_TEXT ) . '</a>'
                           );
        $links = array_merge( $links, $new_links );
    }

    return $links;
}
add_filter( 'plugin_row_meta', 'spacexchimp_p001_plugin_row_meta', 10, 2 );

/**
 * Register plugin's submenu in the "Appearance" Admin Menu
 */
function spacexchimp_p001_register_submenu_page() {
    $menu_title = __( 'Custom Functions', SPACEXCHIMP_P001_TEXT );
    $capability = 'edit_theme_options';
    add_theme_page( SPACEXCHIMP_P001_NAME, $menu_title, $capability, SPACEXCHIMP_P001_SLUG, 'spacexchimp_p001_render_submenu_page' );
}
add_action( 'admin_menu', 'spacexchimp_p001_register_submenu_page' );

/**
 * Register settings
 */
function spacexchimp_p001_register_settings() {
    register_setting( SPACEXCHIMP_P001_SETTINGS . '_settings_group', SPACEXCHIMP_P001_SETTINGS . '_settings' );
    register_setting( SPACEXCHIMP_P001_SETTINGS . '_settings_group_si', SPACEXCHIMP_P001_SETTINGS . '_service_info' );
    register_setting( SPACEXCHIMP_P001_SETTINGS . '_settings_group', SPACEXCHIMP_P001_SETTINGS . '_error' );
}
add_action( 'admin_init', 'spacexchimp_p001_register_settings' );
