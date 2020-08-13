<?php

/**
 * This page is for the custom controls of about section on the homepage
 */


function law_firm_about_section($wp_customize)
{

  /*=================== About section ====================*/
  $wp_customize->add_section(
    'about_section',
    array(
      'title' => __('About Section', 'kriti_law_firm'),
      'capability' => 'edit_theme_options',
      'priority' => 70,
      'panel' => 'front_end'
    )
  );

  // About section title
  $wp_customize->add_setting(
    'about_section_title',
    array(
      'priority' => 10,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'default' => __('Our story', 'kriti_law_firm')
    )
  );

  $wp_customize->add_control(
    'about_section_control',
    array(
      'label' => __('About Section Title', 'kriti_law_firm'),
      'section' => 'about_section',
      'settings' => 'about_section_title',
      'type' => 'text'
    )
  );

  // about section read more button

  $wp_customize->add_setting(
    'read_more_button',
    array(
      'priority' => 20,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'default' => __('Know Us', 'kriti_law_firm')
    )
  );

  $wp_customize->add_control(
    'read_more_button',
    array(
      'label' => __('Read more Button', 'kriti_law_firm'),
      'section' => 'about_section',
      'settings' => 'read_more_button',
      'type' => 'text'
    )
  );

  // read more button link
  $wp_customize->add_setting(
    'read_more_button_link',
    array(
      'priority' => 30,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'default' => __('#', 'kriti_law_firm'),
      'sanitize_callback' => 'esc_url_raw',
    )
  );

  $wp_customize->add_control(
    'read_more_link',
    array(
      'label' => __('Read More Button Link', 'kriti_law_firm'),
      'section' => 'about_section',
      'settings' => 'read_more_button_link',
      'type' => 'text'
    )
  );
}
add_action('customize_register', 'law_firm_about_section');
