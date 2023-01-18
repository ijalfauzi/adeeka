<?php

function adeeka_files() {
    wp_enqueue_style('adeeka_main_files', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'adeeka_files');