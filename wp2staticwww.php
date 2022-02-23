<?php
/**
 * Plugin Name: WP2StaticWWW
 * Plugin URI:  https://wp2static.com
 * Description: Custom functions for WP2Static.com
 * Version:     0.0.1
 * Author:      Leon Stafford
 * Author URI:  https://ljs.dev
 * Text Domain: wp2staticwww
 *
 * @package     WP2StaticWWW    
 */

// remove all tags from header
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );

function wp2staticwwwrm_wp_version_number() {
    return '';
}

add_filter('the_generator', 'wp2staticwwwrm_wp_version_number');

function wp2staticwwwremove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}

add_action( 'wp_enqueue_scripts', 'wp2staticwwwremove_wp_block_library_css', 100 );

// test comment
