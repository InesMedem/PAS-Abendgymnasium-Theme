<footer class="site-footer">
  <div class=" container container--narrow">
    <div class="site-footer__flex-container--row">
      <nav class="site-footer__nav-list">
        <ul>
          <?php wp_nav_menu(array(
            'theme_location' => 'footerMenuLocation'
          )) ?>
        </ul>
      </nav>

      <nav>
        <ul class="min-list social-icons-list group">
          <li>
            <a href="https://www.facebook.com/Silbermannschule" class="btn btn--small btn--orange"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="https://www.youtube.com/@DasBerlinerAbendgymnasium" class="btn btn--small btn--orange"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#" class="btn btn--small btn--orange"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </li>
      </nav>
    </div>

  <!-- <section>
      <div class="container container--narrow">
        <p> © 2024 Peter-A.-Silbermann-Schule</p>
        <p>Made with ❤ by inesmedem.com </p>
      </div>
  </section> -->
  </footer>
<?php wp_footer(); ?>
</body>

</html>