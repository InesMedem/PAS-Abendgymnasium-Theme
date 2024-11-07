<?php

function PAS_files()
{
    wp_enqueue_style('font-awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google.fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('PAS-main-styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('PAS-extra-styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'PAS_files');


function PAS_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'PAS_features');
