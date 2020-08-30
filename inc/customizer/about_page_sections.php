<?php

/**
 * This page is for the custom controls of sections of the about page
 */


function law_firm_about_page_sections($wp_customize)
{

    // Move Header Image to About Page Panel as banner
    $wp_customize->get_section('header_image')->panel                    = 'about_page_settings';
    $wp_customize->get_section('header_image')->title                    = __('Banner Section', 'kriti_law_firm');
    $wp_customize->get_section('header_image')->priority                 = 10;

    // Banner Title
    $wp_customize->add_setting(
        'about_banner_title',
        array(
            'priority' => 20,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control(
        'about_banner_title',
        array(
            'label' => __('Banner Title', 'kriti_law_firm'),
            'settings' => 'about_banner_title',
            'section' => 'header_image',
            'type' => 'text'
        )
    );

    // Banner Button
    $wp_customize->add_setting(
        'about_banner_button',
        array(
            'priority' => 30,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control(
        'about_banner_button',
        array(
            'label' => __('Banner Button', 'kriti_law_firm'),
            'settings' => 'about_banner_button',
            'section' => 'header_image',
            'type' => 'text'
        )
    );
}
add_action('customize_register', 'law_firm_about_page_sections');
