<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header ">
    <div class="site-header__container">

      <div class="site-header__logo">
        <a href="<?php echo site_url('/') ?>"> <img
            src="<?php echo get_theme_file_uri("images/Peter-A.-Silbermann.png") ?>"
            style="width: 80px; height: auto;"
            alt="Logo" /> 
        <div class="site-header__logoText">
          <h3 class="headline--small-plus ">
          <span class="">Peter-A.-Silbermann-Schule</span>
          </h3>
          <p><span class="">Staatliches Abendgymnasium für Berufstätige</span></p>
        </div></a>
      </div>

      <!-- <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
      <div class="site-header__nav">
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu">
          <nav class="site-header__nav ">
            <ul>
              <?php wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
              )) ?>
            </ul>
          </nav>
          <div class="site-header__btn">
            <a href="<?php echo site_url('/voraussetzungen-und-anmeldung') ?>" class="btn btn--medium btn--orange"><b>Anmeldung</b></a>
            <!-- <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
          </div>
        </div>
      </div>
    </div>
  </header>