<?php

/**
 * This page is for the custom controls of contact section of the footer
 */


function law_firm_contact_section($wp_customize)
{
  /*=================== Contact Detail section ====================*/
  $wp_customize->add_section(
    'contactDetail_footer_widget',
    array(
      'title' => __('Contact Details', 'kriti_law_firm'),
      'priority' => 10,
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'panel' => 'footer_settings'
    )
  );

  // Section Title
  $wp_customize->add_setting(
    'contact_widget_title',
    array(
      'priority' => 20,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'default' => __('Contact Details', 'kriti_law_firm')
    )
  );

  $wp_customize->add_control(
    'contact_details',
    array(
      'label' => __('Contact Details Title', 'kriti_law_firm'),
      'settings' => 'contact_widget_title',
      'section' => 'contactDetail_footer_widget',
      'type' => 'text'
    )
  );

  // Phone Number
  $wp_customize->add_setting(
    'footer_phone_number',
    array(
      'priority' => 30,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh'
    )
  );

  $wp_customize->add_control(
    'footer_phone_number',
    array(
      'label' => __('Contact Number', 'kriti_law_firm'),
      'settings' => 'footer_phone_number',
      'section' => 'contactDetail_footer_widget',
      'type' => 'textarea'
    )
  );

  // Email
  $wp_customize->add_setting(
    'footer_email',
    array(
      'priority' => 40,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh'

    )
  );

  $wp_customize->add_control(
    'footer_email',
    array(
      'label' => __('Contact Email', 'kriti_law_firm'),
      'settings' => 'footer_email',
      'section' => 'contactDetail_footer_widget',
      'type' => 'text'
    )
  );

  // Address
  $wp_customize->add_setting(
    'footer_address',
    array(
      'priority' => 50,
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh'

    )
  );

  $wp_customize->add_control(
    'footer_address',
    array(
      'label' => __('Address', 'kriti_law_firm'),
      'settings' => 'footer_address',
      'section' => 'contactDetail_footer_widget',
      'type' => 'textarea'
    )
  );
}
add_action('customize_register', 'law_firm_contact_section');
