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

<section class="beigeBg">
<div class="container container--narrow page-section ">
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
</section>

<section class="contact">
  <div class="container container--narrow page-section t-center ">
    <h2 class="headline headline--large-medium">Wir helfen gerne</h2>
    <h3 class="headline headline--smaller container--narrow">      If you are interested in registering or have a specific question, please contact us by phone or using our contact form.
    </h3>
    <p>
    </p>
    <div class="contact__details">
      <div class="contact__info">
        <nav class="nav-list">

            <ul class="site-footer__icon-list">

              <li class="site-footer__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/phone.svg" alt="Telephone Icon" />
                <a href="tel:+493089745160" target="_blank">
                  <p>+49 (0)30 / 897 451 60</p>
                </a>
              </li>

              <li class="site-footer__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/mail.svg" alt="Mail Icon" />
                <a href="mailto:info@abendgymnasium.de" target="_blank">
                  <p>info@abendgymnasium.de</p>
                </a>
              </li>

              <li class="site-footer__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/map.svg" alt="Pin Icon" />
                <a href="https://maps.app.goo.gl/VPGC7Uc4kcSgC9P28" target="_blank">
                  <p>Blissestraße 22, 10713 Berlin-Wilmersdorf</p>
                </a>
          
            </ul>
            </nav>
      </div>

      <div class="contact__map">
        <iframe
          class="contact__map-iframe"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2411.479590949341!2d13.401347616235152!3d52.55028357980796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a849d9dc3890b1%3A0x5a90f71e7c0ec5d8!2sDriesener%20Str.%2022%2C%2010439%20Berlin%2C%20Germany!5e0!3m2!1sen!2sde!4v00000000000"
          width="100%"
          height="250"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>
    <div class="">
      <h3 class="headline headline--small">Bürozeiten des Sekretariats:       </h3>
      <p class="headline headline--tiny"> <b>äglich von 16:00 Uhr bis 20:00 Uhr, am Mittwoch von 16:00 Uhr bis 18:00 Uhr. </b></p>
      <p>
      Sekretariat Frau Bartzsch <br>Bitte beachten Sie die Bürozeiten, wenn Sie Ihre Bewerbungsunterlagen persönlich abgeben wollen. 
      Für ausführlichere Beratungen vereinbaren Sie bitte telefonisch einen Termin.
      </p>
    </div>
  </div>
</section>


<?php
get_footer();

?>