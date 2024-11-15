<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header">
    <div class="site-header__container">
      <div class="site-header__logo">
        <img 
        src="<?php echo get_theme_file_uri("images/Peter-A.-Silbermann.png") ?>"
        style="width: 100px; height: auto;"
        alt="Logo"  
        /> 
        <div class="site-header__logoText">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url('/') ?>"><span>Peter-A.</span>-Silbermann-Schule</a>
        </h1>
        <p>Staatliches Abendgymnasium für Berufstätige</p>
        </div>
      </div>
      <!-- <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
      <div class="site-header__nav">
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <?php wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
              )) ?>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="<?php echo site_url('/voraussetzungen-und-anmeldung') ?>" class="btn btn--medium btn--orange float-left push-right">ANMELDUNG</a>
            <!-- <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span> -->
          </div>
        </div>
      </div>
    </div>
  </header>