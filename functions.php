<?php

function promoteapp_assets() {

    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );

}

add_action('wp_enqueue_scripts', 'promoteapp_assets');

?>