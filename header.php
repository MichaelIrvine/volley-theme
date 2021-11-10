<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EQ
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://use.typekit.net/idf8dzt.css">

  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php bloginfo('template_directory'); ?>/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php bloginfo('template_directory'); ?>/favicons/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favicons/site.webmanifest">
  <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/favicons/safari-pinned-tab.svg" color="#000000">
  <meta name="msapplication-TileColor" content="#f0f0f0">

  <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <!-- Flickity CSS -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="custom-cursor"></div>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'Volley'); ?></a>

    <header id="volley-header" class="site-header">

      <nav id="site-navigation" class="main-navigation">

        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          )
        );
        ?>
      </nav>

      <div class="site-branding">
        <?php
        if (is_active_sidebar('header-branding')) :
          dynamic_sidebar('header-branding');
        else : ?>
        <div class="site-title__wrapper">
          <h1><?php echo get_bloginfo('name'); ?></h1>

        </div>
        <?php endif; ?>
      </div>


      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <span></span>
        <span></span>
      </button>

      <nav id="mobile-site-navigation" class="main-navigation--mobile">

        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-mobile',
            'menu_id'        => 'Mobile',
          )
        );
        ?>
      </nav>
    </header>