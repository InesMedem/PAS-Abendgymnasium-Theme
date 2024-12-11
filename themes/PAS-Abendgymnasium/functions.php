<?php

add_filter('wpcf7_form_elements', function($content) {
    // Replace "Select option" with your desired text
    $content = str_replace('Please choose an option', 'Bitte wählen', $content);
    return $content;
});


//******************************* Syles page

function assign_styles_template($template) {
    if (is_page('styles')) { // Check if it's the "Styles" page by slug
        $new_template = locate_template(array('page-styles.php')); // The template file
        if (!empty($new_template)) {
            return $new_template;
        }
    }
    return $template;
}

add_filter('template_include', 'assign_styles_template');


//******************************* Page Banner

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
    <div class="page-banner__content ">
        <h1 class=" headline headline--large "><?php echo $args['title']; ?></h1>
        <h3 class=" headline headline--small ">
           <span class="highlight"><?php echo $args['subtitle']; ?></span> 
        </h3>
    </div>
</div>

<?php 
}

//******************************* 

function PAS_files()
{
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('font-awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // wp_enqueue_style('custom-google.fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    // wp_enqueue_style('custom-google.fonts', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('roboto-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i');
    wp_enqueue_style('poppins-font', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    

    // wp_enqueue_style('PAS-main-styles', get_theme_file_uri('/build/style-index.css'));
    // wp_enqueue_style('PAS-extra-styles', get_theme_file_uri('/build/index.css'));
    // wp_enqueue_style('PAS-style.css', get_theme_file_uri('/style.css'));

    wp_enqueue_style('PAS-style.css', get_theme_file_uri('/style.css'));
    wp_enqueue_style('PAS-main-styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('PAS-extra-styles', get_theme_file_uri('/build/index.css'));

}



add_action('wp_enqueue_scripts', 'PAS_files');

function PAS_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_post_type_support('page', 'excerpt');
    add_image_size('header-crop', 2000, 900, true);
}

add_action('after_setup_theme', 'PAS_features');

//******************************* SVG Support

function allow_svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter( 'upload_mimes', 'allow_svg_upload' );

