<?php

get_header(); ?>


<div class="page-banner overlay">
  <div class="page-banner__bg-image"
  
  style="background-image: url(<?php 
        $thumbnail_url = get_the_post_thumbnail_url(null, 'header-crop'); 
        if ($thumbnail_url) {
            echo $thumbnail_url;
        } else {
            echo get_theme_file_uri('images/Friedrich-Ebert-Schule_Front.jpg');
        }
    ?>)">

</div>
  <div class="page-banner__content container t-center c-white container--hero">
    <h1 class="headline headline--large"><?php the_title(); ?></h1>
    <h3 class="headline headline--small container--narrow"><?php the_excerpt(); ?></h3>
    <a href="#" class="btn btn--large btn--blue">Jetzt Anmelden</a>
  </div>
</div>

  <div class="container container--narrow page-section">
  <div class="generic-content">
    <?php the_content(); ?>
  </div>
</div>


    <div class="container container--narrow page-section">
      <?php
  // Custom query to get only 5 posts
  $args = array(
    'posts_per_page' => 5, // Limit to 5 posts
  );
  $query = new WP_Query($args);

  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>
  <div class="event-summary">
    <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
      <span class="event-summary__month"><?php echo get_the_date('M'); ?></span>
      <span class="event-summary__day"><?php echo get_the_date('d'); ?></span>
    </a>
    <div class="event-summary__content">
      <h5 class="event-summary__title headline headline--tiny">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h5>
      <p>
        <?php echo wp_trim_words(get_the_content(), 18); ?>
        <a href="<?php the_permalink(); ?>" class="nu gray"> Weiterlesen </a>
      </p>
    </div>
  </div>

<?php 
    endwhile; 
  endif;

  wp_reset_postdata(); 
?>

<p class="t-center no-margin">
  <a href="<?php echo site_url('/aktuelles'); ?>" class="btn btn--blue">Aktuelles</a>
</p>

</div>

<?php
get_footer();

?>

