<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kriti Law Firm</title>
  <?php wp_head(); ?>


</head>

<body class="<?php body_class(); ?>">
  <?php wp_body_open(); ?>


  <header class="header">
    <!-- top header for contact info -->
    <div class="header-top text-right">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">

            <ul class="nav justify-content-end">
              <!-- nav item for phone number -->
              <li class="nav-item py-2">
                <a class="nav-phonenumber mr-4"><i class="fa fa-phone"></i>
                  <?php
                  if (get_theme_mod('header_phone'))
                    echo esc_html_e(get_theme_mod('header_phone'));
                  ?>
                </a>

                <a class="nav-email ml-4"><i class="fa fa-envelope"></i>
                  <?php
                  if (get_theme_mod('header_email'))
                    echo esc_html_e(get_theme_mod('header_email'));
                  ?>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </div>

    </div>
    <!-- top header ends -->

    <!-- header middle begins -->
    <div class="header-middle" id="header_middle">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-3">
            <!-- firm_logo -->
            <div class="firm-logo">

              <?php

              // display logo of the site has custom logo
              if (has_custom_logo()) {
                the_custom_logo();
              }
              ?>
            </div>


            <!-- site title and site description -->
            <div class="site-brand ">
              <?php
              if (is_home() || is_front_page()) {
              ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo bloginfo('name'); ?></a></h1>
              <?php
              } else {
              ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo bloginfo('name'); ?></a></h1>
              <?php
              }

              $description = get_bloginfo('description');
              if ($description || is_customize_preview()) { ?>
                <p class="site-description"> <?php echo $description; ?></p>

              <?php
              }
              ?>

              </a>
            </div>
          </div>

          <div class="col-lg-9 col-md-9 col-sm-9 d-flex justify-content-center">
            <!-- main-nav begins -->
            <nav class="navbar navbar-expand-md mobile-menu">
              <!-- Links -->
              <?php
              wp_nav_menu(array(
                'theme_location' => 'kriti_law_firm_main_menu',
                'menu' => 'kriti_law_firm_main_menu',
                'menu_class' => 'navbar-nav',
                'container' => 'ul',
                'container_class' => 'navbar',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'

              )); ?>

            </nav>
            <!-- main-nav ends -->
          </div>
        </div>

        <div id="mobile-menu-wrap"></div>
      </div>
    </div>
    <!-- header middle ends -->
  </header>