<?php
/**
 * Plugin Name: Planet 4 GPCH Gutenberg Blocks
 * Plugin URI: https://github.com/greenpeace/planet4-gpch-gutenberg-blocks
 * Description: Provides Gutenberg editing for Planet4 blocks
 * Version: 0.1
 * License: MIT
 * Text Domain: planet4-gutenberg-blocks
 * Domain Path: /languages/
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

define( 'BASE_PATH', plugin_dir_path( __FILE__ ) );
define( 'BASE_URL', plugin_dir_url( __FILE__ ) );

// include the Composer autoload file
require BASE_PATH . 'vendor/autoload.php';

use Greenpeace\Planet4GPCHGutenbergBlocks;

// Load Base Plugin
$p4_gpch_gutenberg_blocks = Planet4GPCHGutenbergBlocks\Planet4_Gpch_Gutenberg_Blocks::get_instance();
