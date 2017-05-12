<?php
/**
 * Plugin Name: My Custom Functions
 * Plugin URI: https://github.com/ArthurGareginyan/my-custom-functions
 * Description: Easily and safely add your custom functions (PHP code) directly out of your WordPress Dashboard without need of an external editor.
 * Author: Arthur Gareginyan
 * Author URI: http://www.arthurgareginyan.com
 * Version: 4.0.1
 * License: GPL3
 * Text Domain: my-custom-functions
 * Domain Path: /languages/
 *
 * Copyright 2014-2017 Arthur Gareginyan (email : arthurgareginyan@gmail.com)
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
 *
 *               █████╗ ██████╗ ████████╗██╗  ██╗██╗   ██╗██████╗
 *              ██╔══██╗██╔══██╗╚══██╔══╝██║  ██║██║   ██║██╔══██╗
 *              ███████║██████╔╝   ██║   ███████║██║   ██║██████╔╝
 *              ██╔══██║██╔══██╗   ██║   ██╔══██║██║   ██║██╔══██╗
 *              ██║  ██║██║  ██║   ██║   ██║  ██║╚██████╔╝██║  ██║
 *              ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═╝
 *
 *   ██████╗  █████╗ ██████╗ ███████╗ ██████╗ ██╗███╗   ██╗██╗   ██╗ █████╗ ███╗   ██╗
 *  ██╔════╝ ██╔══██╗██╔══██╗██╔════╝██╔════╝ ██║████╗  ██║╚██╗ ██╔╝██╔══██╗████╗  ██║
 *  ██║  ███╗███████║██████╔╝█████╗  ██║  ███╗██║██╔██╗ ██║ ╚████╔╝ ███████║██╔██╗ ██║
 *  ██║   ██║██╔══██║██╔══██╗██╔══╝  ██║   ██║██║██║╚██╗██║  ╚██╔╝  ██╔══██║██║╚██╗██║
 *  ╚██████╔╝██║  ██║██║  ██║███████╗╚██████╔╝██║██║ ╚████║   ██║   ██║  ██║██║ ╚████║
 *   ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═══╝
 *
 */


/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Define constants
 *
 * @since 3.6
 */
defined('MCFUNC_DIR') or define('MCFUNC_DIR', dirname(plugin_basename(__FILE__)));
defined('MCFUNC_BASE') or define('MCFUNC_BASE', plugin_basename(__FILE__));
defined('MCFUNC_URL') or define('MCFUNC_URL', plugin_dir_url(__FILE__));
defined('MCFUNC_PATH') or define('MCFUNC_PATH', plugin_dir_path(__FILE__));
defined('MCFUNC_TEXT') or define('MCFUNC_TEXT', 'my-custom-functions');
defined('MCFUNC_VERSION') or define('MCFUNC_VERSION', '4.0.1');

/**
 * Load the plugin modules
 *
 * @since 4.0
 */
require_once( MCFUNC_PATH . 'inc/php/core.php' );
require_once( MCFUNC_PATH . 'inc/php/enqueue.php' );
require_once( MCFUNC_PATH . 'inc/php/version.php' );
require_once( MCFUNC_PATH . 'inc/php/functional.php' );
require_once( MCFUNC_PATH . 'inc/php/page.php' );
require_once( MCFUNC_PATH . 'inc/php/messages.php' );
require_once( MCFUNC_PATH . 'inc/php/uninstall.php' );
