<?php
/**
 * Plugin Name: Woo Plugin Setup
 * Plugin URI: https://github.com/psealock/woo-plugin-setup
 * Description: This is an example of an extension template to follow.
 * Version: 1.0.0
 * Author: WooCommerce
 * Author URI: https://woocommerce.com
 * Text Domain: woo-plugin-setup
 * Domain Path: /languages
 * Tested up to: 6.1
 * WC tested up to: 7.1
 * WC requires at least: 5.8
 *
 * Copyright: © 2022 WooCommerce.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package WooCommerce\Admin
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'WOO_PLUGIN_SETUP_PLUGIN_FILE' ) ) {
	define( 'WOO_PLUGIN_SETUP_PLUGIN_FILE', __FILE__ );
}

require_once __DIR__ . '/vendor/autoload.php';

use WooPluginSetup\Admin\Setup;

new Setup();
