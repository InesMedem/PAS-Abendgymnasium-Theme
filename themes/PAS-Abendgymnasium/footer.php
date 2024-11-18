<footer class="site-footer">
  <div class=" container container--narrow">
    <div class="site-footer__flex-container">

      <div class="site-footer__col-one">
        <h1 class="school-logo-text school-logo-text--alt-color">
          <img src="<?php echo get_theme_file_uri("images/Peter-A.-Silbermann.png") ?>" /> <br>
          <a href="#"><strong>Peter-A.</strong>-Silbermann-Schul</a>
        </h1>
        <!-- <p>Staatliches Abendgymnasium für Berufstätige</p> -->
      </div>

      <div class="site-footer__col-two">
        <h3 class="headline headline--small"><b>Legal</b></h3>
        <nav class="nav-list">
          <ul>
            <?php wp_nav_menu(array(
              'theme_location' => 'footerMenuLocation'
            )) ?>
          </ul>
        </nav>
      </div>

      <div class="site-footer__col-three">
        <h3 class="headline headline--small"><b>Kontakt</b></h3>
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
            </li>
          </ul>
        </nav>

      </div>

      <div class="site-footer__col-four">
        <h3 class="headline headline--small"><b>Mit uns verbinden</b></h3>
        <nav>
          <ul class="min-list social-icons-list group">
            <li>
              <a href="https://www.facebook.com/Silbermannschule" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="https://www.youtube.com/@DasBerlinerAbendgymnasium" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <!-- <li class="site-footer__icon">
              <img src="<?php echo get_template_directory_uri(); ?>/images/time.svg" alt="Time Icon" />
              <p> <b>Öffnungszeiten:</b> <br> Mo, Di & Fr 16:00 bis 20:00</p>
            </li> -->

          </ul>
        </nav>
      </div>
    </div>

  </div>
  <div class="site-footer__buttom-container">
    <p> © 2024 Peter-A.-Silbermann-Schule</p>
    <p>Made with ❤ by inesmedem.com </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>