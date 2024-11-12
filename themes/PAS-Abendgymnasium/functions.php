<?php

function pageBanner($args = NULL) {
    // Set default title if none is provided in $args
    if (empty($args['title'])) {
        $args['title'] = get_the_title();
    }

    // Set subtitle based on the following logic:
    // If the post has an excerpt, use it; otherwise, use $args['subtitle'] if provided.
    if (empty($args['subtitle'])) {
        $args['subtitle'] = has_excerpt() ? get_the_excerpt() : '';
    }

    // Determine the background image:
    // Use post thumbnail if available; otherwise, fall back to $args['photo'] or a default image.
    if (empty($args['photo'])) {
        $args['photo'] = get_the_post_thumbnail_url(null, 'header-crop') ? get_the_post_thumbnail_url(null, 'header-crop') : get_theme_file_uri('images/priscilla-du-preez-XkKCui44iM0-unsplash.jpg');
    }
?>

<div class="page-banner">
    <div class="page-banner__bg-image" 
         style="background-image: url(<?php echo $args['photo']; ?>)">
    </div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php echo $args['title']; ?></h1>
        <div class="page-banner__intro">
            <p><?php echo $args['subtitle']; ?></p>
        </div>
    </div>
</div>

<?php 
}

function PAS_files()
{
    wp_enqueue_style('font-awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google.fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('PAS-main-styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('PAS-extra-styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('PAS-style.css', get_theme_file_uri('/style.css'));

}

add_action('wp_enqueue_scripts', 'PAS_files');


function PAS_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_post_type_support('page', 'excerpt');
    add_image_size('header-crop', 1400, 400, true);
}

add_action('after_setup_theme', 'PAS_features');