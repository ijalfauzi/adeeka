<?php

function adeeka_files() {
    wp_enqueue_style('adeeka_main_files', get_theme_file_uri('/assets/css/styles.css'));
    wp_enqueue_script('adeeka_main_js', get_theme_file_uri('/assets/js/main.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'adeeka_files');

function adeeka_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'adeeka_features');