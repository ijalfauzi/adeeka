<?php

function adeeka_files() {
    wp_enqueue_style('adeeka_main_files', get_theme_file_uri('/assets/css/styles.css'));
    wp_enqueue_script('adeeka_main_js', get_theme_file_uri('/assets/js/main.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'adeeka_files');