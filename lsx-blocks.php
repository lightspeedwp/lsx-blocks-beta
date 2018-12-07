<?php
/**
 * Plugin Name: LSX Blocks
 * Plugin URI: https://github.com/ahmadawais/create-guten-block/
 * Description: LSX Blocks is a Gutenberg plugin created via create-guten-block.
 * Author: lightspeed
 * Author URI: https://AhmadAwais.com/
 * Version: 1.0.1
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
function lsx_blocks_loader() {
	require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
}
add_action( 'plugins_loaded', 'lsx_blocks_loader' );

/**
 * Load the plugin textdomain
 */
function lsx_blocks_init() {
	load_plugin_textdomain( 'lsx-blocks', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'init', 'lsx_blocks_init' );
