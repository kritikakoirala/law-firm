<?php

/**
 * This page is for the custom controls of banner section on the homepage
 */


function law_firm_banner($wp_customize)
{
  /** =================== Add Banner section ==================*/
  $wp_customize->add_section(
    'banner_section',
    array(
      'title' => __('Banner Section', 'kriti_law_firm'),
      'priority' => 50,
      'capability' => 'edit_theme_options',
      'description' => __('Allows you to change the banner of the homepage of your website'),
      'panel' => 'front_end'
    )
  );

  // Banner Image
  $wp_customize->add_setting(
    'banner_image',
    array(
      'priority' => 10,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'banner_image_control',
      array(
        'label' => __('Banner Image', 'kriti_law_firm'),
        'settings' => 'banner_image',
        'section' => 'banner_section',
      )
    )
  );

  //	Banner Title
  $wp_customize->add_setting(
    'banner_title',
    array(
      'priority' => 20,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh'
    )
  );

  $wp_customize->add_control(
    'banner_text_control',
    array(
      'label' => __('Banner Title', 'kriti_law_firm'),
      'settings' => 'banner_title',
      'section' => 'banner_section',
      'type' => 'text'
    )
  );

  // Banner Description
  $wp_customize->add_setting(
    'banner_desc',
    array(
      'priority' => 30,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh'
    )
  );

  $wp_customize->add_control(
    'banner_desc_control',
    array(
      'label' => __('Banner Description', 'kriti_law_firm'),
      'settings' => 'banner_desc',
      'section' => 'banner_section',
      'type' => 'textarea'
    )
  );

  // Banner Button
  $wp_customize->add_setting(
    'banner_button',
    array(
      'priority' => 40,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'default' => __('consult us', 'kriti_law_firm')
    )
  );

  $wp_customize->add_control(
    'banner_button_control',
    array(
      'label' => __('Banner Button', 'kriti_law_firm'),
      'settings' => 'banner_button',
      'section' => 'banner_section',
      'type' => 'text'
    )
  );

  // Banner Button Link
  $wp_customize->add_setting(
    'banner_link',
    array(
      'default' => '#',
      'sanitize_callback' => 'esc_url_raw',
    )
  );

  $wp_customize->add_control(
    'banner_link',
    array(
      'label' => __('Banner Link', 'kriti_law_firm'),
      'section' => 'banner_section',
      'type' => 'text'
    )
  );
}
add_action('customize_register', 'law_firm_banner');
