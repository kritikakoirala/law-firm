<?php

/**
 * This page is for the custom controls of areas of practice section on the homepage
 */


function law_firm_areas_of_practice_section($wp_customize)
{
  /*======== Areas of Practice Section ==========*/

  $wp_customize->add_section(
    'practice_section',
    array(
      'title' => __('Area of Practice Section', 'kriti_law_firm'),
      'capability' => 'edit_theme_options',
      'priority' => 90,
      'panel' => 'front_end'
    )
  );

  // Section Title
  $wp_customize->add_setting(
    'area_section_title',
    array(
      'priority' => 20,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'default' => __('Our range of Practice Areas', 'kriti_law_firm'),
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'area_section_title',
    array(
      'label' => __('Practice Area Section Title', 'kriti_law_firm'),
      'settings' => 'area_section_title',
      'section' => 'practice_section',
      'type' => 'text'
    )
  );

  // Section Description
  $wp_customize->add_setting(
    'area_section_description',
    array(
      'priority' => 30,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'

    )
  );

  $wp_customize->add_control(
    'area_section_description',
    array(
      'label' => __('Practice Area Description', 'kriti_law_firm'),
      'settings' => 'area_section_description',
      'section' => 'practice_section',
      'type' => 'textarea'
    )
  );

  $wp_customize->add_setting(
    'area_section_image',
    array(
      'priority' => 35,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'sanitize_callback' => 'kriti_law_firm_sanitize_file'

    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'area_section_image',
      array(
        'label' => __('Upload the Practice Area Image', 'kriti_law_firm'),
        'settings' => 'area_section_image',
        'section' => 'practice_section'
      )
    )

  );

  // Practice 1
  $wp_customize->add_setting(
    'practice_area_1',
    array(
      'priority' => 40,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'practice_area_1',
    array(
      'label' => __('Practice Area Title 1', 'kriti_law_firm'),
      'settings' => 'practice_area_1',
      'section' => 'practice_section',
      'type' => 'text'
    )
  );

  $wp_customize->add_setting(
    'practice_area_1_link',
    array(
      'default' => '#',
      'sanitize_callback' => 'esc_url_raw'
    )
  );

  $wp_customize->add_control(
    'practice_area_1_link',
    array(
      'label' => __('Practice Area 1 Link', 'kriti_law_firm'),
      'section' => 'practice_section',
      'settings' => 'practice_area_1_link',
      'type' => 'text'
    )
  );

  // Practice 2
  $wp_customize->add_setting(
    'practice_area_2',
    array(
      'priority' => 50,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'practice_area_2',
    array(
      'label' => __('Practice Area Title 2', 'kriti_law_firm'),
      'settings' => 'practice_area_2',
      'section' => 'practice_section',
      'type' => 'text'
    )
  );
  $wp_customize->add_setting(
    'practice_area_2_link',
    array(
      'default' => '#',
      'sanitize_callback' => 'esc_url_raw'
    )
  );

  $wp_customize->add_control(
    'practice_area_2_link',
    array(
      'label' => __('Practice Area 2 Link', 'kriti_law_firm'),
      'section' => 'practice_section',
      'settings' => 'practice_area_2_link',
      'type' => 'text'
    )
  );

  // Practice 3
  $wp_customize->add_setting(
    'practice_area_3',
    array(
      'priority' => 60,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'practice_area_3',
    array(
      'label' => __('Practice Area Title 3', 'kriti_law_firm'),
      'settings' => 'practice_area_3',
      'section' => 'practice_section',
      'type' => 'text'
    )
  );

  $wp_customize->add_setting(
    'practice_area_3_link',
    array(
      'default' => '#',
      'sanitize_callback' => 'esc_url_raw'
    )
  );

  $wp_customize->add_control(
    'practice_area_3_link',
    array(
      'label' => __('Practice Area 3 Link', 'kriti_law_firm'),
      'section' => 'practice_section',
      'settings' => 'practice_area_3_link',
      'type' => 'text'
    )
  );
  // Practice 4
  $wp_customize->add_setting(
    'practice_area_4',
    array(
      'priority' => 70,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize->add_control(
    'practice_area_4',
    array(
      'label' => __('Practice Area Title 4', 'kriti_law_firm'),
      'settings' => 'practice_area_4',
      'section' => 'practice_section',
      'type' => 'text'
    )
  );
  $wp_customize->add_setting(
    'practice_area_4_link',
    array(
      'default' => '#',
      'sanitize_callback' => 'esc_url_raw'
    )
  );

  $wp_customize->add_control(
    'practice_area_4_link',
    array(
      'label' => __('Practice Area 4 Link', 'kriti_law_firm'),
      'section' => 'practice_section',
      'settings' => 'practice_area_4_link',
      'type' => 'text'
    )
  );
}
add_action('customize_register', 'law_firm_areas_of_practice_section');
