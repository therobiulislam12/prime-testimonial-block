<?php

/**
 * Plugin Name:       Prime Testimonial Block
 * Description:       Easily display customer testimonials on your WordPress site to build trust and credibility.
 * Plugin URI:        https://techtuzzle.com
 * Version:           1.0.0
 * Author:            Robiul Islam
 * Author URI:        https://robiul.net/about
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path:       /languages
 * Text Domain:       prime-testimonial-block
 * Requires at least: 6.7
 * Requires PHP:      7.4
 */

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// init hook
add_action( 'init', 'prime_tb_block_init' );

// function check
if ( !function_exists( 'prime_tb_block_init' ) ) {
    function prime_tb_block_init() {

        // call metadata
        if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
            wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
            return;
        }

        if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
            wp_register_block_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
        }

        /**
         * Registers the block type(s) in the `blocks-manifest.php` file.
         */
        $manifest_data = require __DIR__ . '/build/blocks-manifest.php';
        foreach ( array_keys( $manifest_data ) as $block_type ) {
            register_block_type( __DIR__ . "/build/{$block_type}" );
        }
    }
}