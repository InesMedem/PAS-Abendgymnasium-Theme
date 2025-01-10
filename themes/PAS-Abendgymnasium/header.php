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
            style="width: 65px; height: auto;"
            alt="Logo" /> 
        <div class="site-header__logoText">
          <h3 class="headline--small-plus ">
          <b>Peter-A.-Silbermann-Schule</b>
          </h3>
          <p>Staatliches Abendgymnasium für Berufstätige</p>
        </div></a>
      </div>

      <div class="site-header__nav">
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu">
          <nav class="site-header__nav ">
            <ul>
              <?php wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
              )) ?>
              <li class="menu-item-has-children">
                <a href="#">Interne 🔐</a>
                <ul class="sub-menu">
                  <li><a href="https://abendgymnasium.inesweb.tech/vertretungsplan/">Vertretungsplan 🔐    </a></li>
                  <li><a href="https://abendgymnasium.inesweb.tech/nachhilfe/">Informationen für Q 🔐</a></li>
                </ul>
              </li>
            </ul>
            
          </nav>
          <div class="site-header__btn ">
            <a href="<?php echo site_url('/voraussetzungen-und-anmeldung') ?>" class="btn btn--medium btn--blue"><b>Anmeldung</b></a>
          </div>
        </div>
      </div>
    </div>
  </header>