<?php

/**
 * This page is for the custom controls of top header section on the homepage
 */


function law_firm_header_top($wp_customize)
{

  /*================= Top Header Section ==================*/
  $wp_customize->add_section(
    'top_header',
    array(
      'title' => __('Top Header', 'kriti_law_firm'),
      'priority' => 10,
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'panel' => 'front_end'
    )
  );

  /** Phone Number */

  $wp_customize->add_setting(
    'header_phone',
    array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh'
    )
  );

  $wp_customize->add_control(
    'header_phone_number',
    array(
      'label' => __('Phone Number', 'kriti_law_firm'),
      'settings' => 'header_phone',
      'priority' => 10,
      'section' => 'top_header'
    )
  );

  /** Email */

  $wp_customize->add_setting(
    'header_email',
    array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh'
    )
  );

  $wp_customize->add_control(
    'header_email',
    array(
      'label' => __('Email', 'kriti_law_firm'),
      'settings' => 'header_email',
      'priority' => 20,
      'section' => 'top_header'
    )
  );
}
add_action('customize_register', 'law_firm_header_top');
