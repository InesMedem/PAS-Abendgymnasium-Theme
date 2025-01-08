<?php get_header(); ?>

<div class="hero-banner">
  <div class="hero-banner__bg-image" style="background-image: url(<?php
    $thumbnail_url = get_the_post_thumbnail_url(null, 'header-crop');
    if ($thumbnail_url) {
      echo $thumbnail_url;
    } else {
      echo get_theme_file_uri('images/Friedrich-Ebert-Schule_Front.jpg');
    }
  ?>)">
  </div>
  <div class="hero-banner__content">
    <!-- <h1 class=" headline headline--large "><?php the_title(); ?></h1> -->
    <h2 class="headline "> Charlottenburg-Wilmersdorf</h2>

    <h1 class=" headline headline--large">Staatliche Abendschule für Berufstätige</h1>
<div class="hero-banner__headlineInner">  
  <h3 class=" headline headline--small">
      <!-- <span class="highlight"><?php echo strip_tags(get_the_excerpt(), '<h3>'); ?></span> -->
      <span class="highlight"> Das Abitur (oder den schulischen Teil der Fachhochschulreife) <br>und MSA kostenlos und flexibel nachholen</span>
    </h3>
    </div>  
    <a href="<?php echo site_url('/voraussetzungen-und-anmeldung') ?>" class="btn btn--large btn--yellow">Jetzt anmelden</a>
    
  </div>
</div>



<!-- first section -->

<div class="front-text">
  <div class="aktuelles__headline container container--narrow">
    <h3 class="headline headline--small-plus"> Am ältesten Abendgymnasium Deutschlands können Sie <span>kostenlos</span> das Abitur, die Hochschulreife oder die Fachhochschulreife nachholen und ab der Qualifikationsphase BAföG beantragen.</h3>
  </div>
</div>


<div class="container page-section container--narrow">
  <div class="generic-content">
    <?php the_content(); ?>
  </div>
</div>


<!--*** OUR BLOG  ***-->

<div class="container container--narrow aktuelles-summary__outer ">

  <div class="aktuelles">
    <div class="aktuelles__headline container">

      <span class="headline headline--large">Neues und Aktuelles </span>
      <!-- <span class="headline headline--small"> <span class="highlight"> Neues aus dem Abendgymnasium </span></span> -->

    </div>
  </div>

  <?php
  $args = array(
    'posts_per_page' => 5, // Limit to 5 posts
  );
  $query = new WP_Query($args);

  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
  ?>
      <div class="aktuelles-summary container--narrower">
        <a class="aktuelles-summary__date " href="<?php the_permalink(); ?>">
          <span class="aktuelles-summary__month"><?php echo get_the_date('M'); ?></span>
          <span class="aktuelles-summary__day"><?php echo get_the_date('d'); ?></span>
          <span class="aktuelles-summary__year"><?php echo get_the_date('Y'); ?></span>

        </a>
        <div class="aktuelles-summary__content">
          <h5 class="aktuelles-summary__title headline headline--small">
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

</div>


<?php get_footer(); ?>