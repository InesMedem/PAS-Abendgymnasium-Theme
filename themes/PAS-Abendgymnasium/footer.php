<footer class="site-footer">
  <div class="site-footer__inner container container--narrow">
    <div class="group">

      <div class="site-footer__col-one">
        <h1 class="school-logo-text school-logo-text--alt-color">
        <img src="<?php echo get_theme_file_uri("images/Peter-A.-Silbermann.png")?>"/> <br>
        <a href="#"><strong>Peter-A.</strong>-Silbermann-Schul</a>
        </h1>
        <p class="headline headline--large">Staatliches Abendgymnasium Charlottenburg-Wilmersdorf</p>
        <p class="headline headline--small">
        © 2024 Peter-A.-Silbermann-Schule</p>
      </div>

      <div class="site-footer__col-two-three-group">
        <div class="site-footer__col-two">
        <h3 class="headline headline--small">Legal</h3>
          <nav class="nav-list">
            <ul>
              <?php wp_nav_menu(array(
                'theme_location' => 'footerMenuLocation'
              )) ?>
            </ul>
          </nav>         
        </div>

        <div class="site-footer__col-three">
        <h3 class="headline headline--small">Kontakt</h3>
          <nav class="nav-list">
            <ul>
            <li><a href="#"><i> <div class="fa fa-phone"></div></i> +49 (0)30 / 897 451 60</a></li>
            <li><a href="#"><i> <div class="fa fa-envelope"></div></i> info@abendgymnasium.de</a></li>
            <li><a href="#"> <div class="fa fa-clock-o"></div> Mo, Di & Fr 16:00 bis 20:00 </a></li>              
            <li><a href="#"><i> <div class="fa fa-map"></div></i> Blissestraße 22, 10713 Berlin-Wilmersdorf</a></li>            
          </ul>
          </nav>
        </div>
      </div>

      <div class="site-footer__col-four">
        <h3 class="headline headline--small">Mit uns verbinden</h3>
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
            <!-- <li>
              <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li> -->
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>