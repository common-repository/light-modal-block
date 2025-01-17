<?php
/**
 * Plugin Name:       Light Modal Block
 * Description:       Lightweight, customizable modal block for the WordPress block editor
 * Requires at least: 6.2
 * Requires PHP:      7.0
 * Version:           1.3.2
 * Author:            CloudCatch LLC
 * Author URI:        https://cloudcatch.io
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       light-modal-block
 *
 * @package           CloudCatch\LightModalBlock
 */

/**
 * Register the block.
 *
 * @return void
 */
function cloudcatch_light_modal_block_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'cloudcatch_light_modal_block_block_init' );
