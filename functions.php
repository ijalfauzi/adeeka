<?php

function adeeka_files() {
    wp_enqueue_style('adeeka_main_files', get_theme_file_uri('/assets/css/styles.css'));
}

add_action('wp_enqueue_scripts', 'adeeka_files');