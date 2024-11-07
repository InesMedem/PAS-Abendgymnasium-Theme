<?php

function PAS_files()
{
    wp_enqueue_style('PAS-main-styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'PAS_files');
