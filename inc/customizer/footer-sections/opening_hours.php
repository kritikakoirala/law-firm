<?php

/**
 * This page is for the custom controls of opening hours section of the footer
 */


function law_firm_opening_hours_section($wp_customize)
{
    /*=================== Opening Hours section ====================*/
    $wp_customize->add_section(
        'openingHours_footer_widget',
        array(
            'title' => __('Opening Hours', 'kriti_law_firm'),
            'priority' => 10,
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'panel' => 'footer_settings'
        )
    );

    // Section Title
    $wp_customize->add_setting(
        'opening_hours_title',
        array(
            'priority' => 40,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'default' => __('Opening Hours', 'kriti_law_firm'),
            'sanitize_callback' => 'wp_filter_nohtml_kses'

        )
    );

    $wp_customize->add_control(
        'opening_hours_title',
        array(
            'label' => __('Opening Hours Title', 'kriti_law_firm'),
            'settings' => 'opening_hours_title',
            'section' => 'openingHours_footer_widget',
            'type' => 'text'
        )
    );

    // Opening Time
    $wp_customize->add_setting(
        'opening_time',
        array(
            'priority' => 40,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'

        )
    );

    $wp_customize->add_control(
        'opening_time',
        array(
            'label' => __('Opening Time', 'kriti_law_firm'),
            'settings' => 'opening_time',
            'section' => 'openingHours_footer_widget',
            'type' => 'text'
        )
    );

    // Opening Day
    $wp_customize->add_setting(
        'opening_day',
        array(
            'priority' => 40,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh'

        )
    );

    $wp_customize->add_control(
        'opening_day',
        array(
            'label' => __('Opening Day', 'kriti_law_firm'),
            'settings' => 'opening_day',
            'section' => 'openingHours_footer_widget',
            'type' => 'text'
        )
    );
}
add_action('customize_register', 'law_firm_opening_hours_section');
