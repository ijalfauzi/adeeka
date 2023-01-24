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

// Remove WordPress Classic Theme CSS

add_action('wp_enqueue_scripts', 'adeeka_remove_dashicons');

function adeeka_remove_classic_theme() {
    wp_deregister_style('classic-theme-styles');
    wp_dequeue_style('classic-theme-styles');
}

add_filter('wp_enqueue_scripts', 'adeeka_remove_classic_theme');