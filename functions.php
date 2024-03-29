<?php

// Load Stylesheet and JavaScript

function adeeka_files() {
    wp_enqueue_style('adeeka_main_files', get_theme_file_uri('/assets/css/styles.css'));
    wp_enqueue_script('adeeka_main_js', get_theme_file_uri('/assets/js/main.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'adeeka_files');

// Add Document Title Tag

function adeeka_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'adeeka_features');

// Remove Gutenberg Block Library CSS from Loading the Frontend

function adeeka_remove_wp_block_library() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wp-blocks-style' ); // Remove WooCommerce block CSS
}

add_action('wp_enqueue_scripts', 'adeeka_remove_wp_block_library');

// Remove Dashicons in Frontend for Unauthenticated Users

function adeeka_remove_dashicons() {
    if ( ! is_user_logged_in() ) {
        wp_deregister_style( 'dashicons' );
    }
}

add_action('wp_enqueue_scripts', 'adeeka_remove_dashicons');

// Remove WordPress Classic Theme CSS

function adeeka_remove_classic_theme() {
    wp_deregister_style('classic-theme-styles');
    wp_dequeue_style('classic-theme-styles');
}

add_filter('wp_enqueue_scripts', 'adeeka_remove_classic_theme');

//filter function to disable TinyMCE emojicons

function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
      return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
      return array();
    }
}
  
function disable_wp_emojicons() {
  
    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  
    // filter to remove TinyMCE emojis
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );

}

add_action( 'init', 'disable_wp_emojicons' ); // hook into init and remove actions