<?php
/**
 * Plugin Name: My Custom Functions
 * Plugin URI: https://github.com/ArthurGareginyan/my-custom-functions
 * Description: Easily and safely add your own functions, snippets or any custom codes directly out of your WordPress Dashboard without need of an external editor.
 * Author: Arthur Gareginyan
 * Author URI: http://www.arthurgareginyan.com
 * Version: 2.2
 * License: GPL3
 * Text Domain: my-custom-functions
 * Domain Path: /languages/
 *
 * Copyright 2014-2016  Arthur "Berserkr" Gareginyan  (email : arthurgareginyan@gmail.com)
 *
 * This file is part of "My Custom Functions".
 *
 * "My Custom Functions" is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "My Custom Functions" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with "My Custom Functions".  If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Plugin constants
 *
 * @since 2.0
 */
defined('MCFUNC_DIR') or define('MCFUNC_DIR', dirname(plugin_basename(__FILE__)));
defined('MCFUNC_BASE') or define('MCFUNC_BASE', plugin_basename(__FILE__));
defined('MCFUNC_URL') or define('MCFUNC_URL', plugin_dir_url(__FILE__));
defined('MCFUNC_PATH') or define('MCFUNC_PATH', plugin_dir_path(__FILE__));

/**
 * Register text domain
 *
 * @since 2.2
 */
function MCFunctions_textdomain() {
	load_plugin_textdomain( 'my-custom-functions', false, MCFUNC_DIR . '/languages/' );
}
add_action( 'init', 'MCFunctions_textdomain' );

/**
 * Print direct link to Custom Functions admin page
 *
 * Fetches array of links generated by WP Plugin admin page ( Deactivate | Edit )
 * and inserts a link to the Custom Functions admin page
 *
 * @since  2.2
 * @param  array $links Array of links generated by WP in Plugin Admin page.
 * @return array        Array of links to be output on Plugin Admin page.
 */
function MCFunctions_settings_link( $links ) {
	$settings_page = '<a href="' . admin_url( 'themes.php?page=my-custom-functions.php' ) .'">' . __( 'Settings', 'my-custom-functions' ) . '</a>';
	array_unshift( $links, $settings_page );
	return $links;
}
add_filter( "plugin_action_links_".MCFUNC_BASE, 'MCFunctions_settings_link' );

/**
 * Register "Custom Functions" submenu in "Appearance" Admin Menu
 *
 * @since 2.2
 */
function MCFunctions_register_submenu_page() {
	add_theme_page( __( 'My Custom Functions', 'my-custom-functions' ), __( 'Custom Functions', 'my-custom-functions' ), 'edit_theme_options', basename( __FILE__ ), 'MCFunctions_render_submenu_page' );
}
add_action( 'admin_menu', 'MCFunctions_register_submenu_page' );

/**
 * Attach Settings Page
 *
 * @since 2.0
 */
require_once( MCFUNC_PATH . 'inc/settings_page.php' );

/**
 * Register settings
 *
 * @since 2.0
 */
function MCFunctions_register_settings() {
	register_setting( 'anarcho_cfunctions_settings_group', 'anarcho_cfunctions_settings' );
	register_setting( 'anarcho_cfunctions_settings_group', 'anarcho_cfunctions_pro_error' );
}
add_action( 'admin_init', 'MCFunctions_register_settings' );

/**
 * Enqueue the CodeMirror scripts and style sheet for setting's page
 *
 * @since 2.0
 */
function MCFunctions_enqueue_codemirror_scripts($hook) {

    // Return if the page is not a settings page of this plugin
    if ( 'appearance_page_my-custom-functions' != $hook ) {
        return;
    }

    // CodeMirror
    wp_enqueue_script('codemirror', MCFUNC_URL . 'inc/codemirror/codemirror-compressed.js');
    wp_enqueue_style('codemirror_style', MCFUNC_URL . 'inc/codemirror/codemirror.css');

    // JS functions
    wp_enqueue_script('js-functions', MCFUNC_URL . 'inc/js-functions.js', array(), false, true);

    // Style sheet
    wp_enqueue_style('styles', MCFUNC_URL . 'inc/style.css');
}
add_action( 'admin_enqueue_scripts', 'MCFunctions_enqueue_codemirror_scripts' );

/**
 * Execute My Custom Functions
 *
 * @since 1.4
 */
function MCFunctions_exec() {
     // Read from BD
     $options = get_option( 'anarcho_cfunctions_settings' );
     $content = $options['anarcho_cfunctions-content'];

     // Cleaning
     $content = trim( $content );
     $content = trim( $content, '<?php' );

     // Parsing and execute safe
     if ( !empty($content) ) {
        if( false === @eval( $content ) ) {
            //ERROR
            update_option( 'anarcho_cfunctions_error', '1' );
        } else {
            // Reset error value
            update_option( 'anarcho_cfunctions_error', '0' );
        }
     }
}
MCFunctions_exec();

/**
 * Delete Options on Uninstall
 *
 * @since 0.1
 */
function MCFunctions_uninstall() {
	delete_option( 'anarcho_cfunctions_settings' );
	delete_option( 'anarcho_cfunctions_error' );
}
register_uninstall_hook( __FILE__, 'MCFunctions_uninstall' );

?>