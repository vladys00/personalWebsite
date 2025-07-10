<?php
function personalThemeAssets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/build/css/main.css', [], null);
}

add_action('wp_enqueue_scripts', 'personalThemeAssets');

?>