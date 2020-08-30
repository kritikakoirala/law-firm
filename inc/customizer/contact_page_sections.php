<?php

/**
 * This page is for the custom controls of sections of the contact page
 */


function law_firm_contact_page_sections($wp_customize)
{
    /*================== Contact Details Section ==============*/

    $wp_customize->add_section(
        'contact_details',
        array(
            'title' => __('Contact Details', 'kriti_law_firm'),
            'priority' => 20,
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'panel' => 'contact_page_settings'
        )
    );

    // Section Title
    $wp_customize->add_setting(
        'contact_section_title',
        array(
            'priority' => 40,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'default' => __('Contact Details', 'kriti_law_firm'),
            'sanitize_callback' => 'wp_filter_nohtml_kses'

        )
    );

    $wp_customize->add_control(
        'section_title',
        array(
            'label' => __('Contact Details Section Title', 'kriti_law_firm'),
            'settings' => 'contact_section_title',
            'section' => 'contact_details',
            'type' => 'text'
        )
    );

    $wp_customize->add_setting(
        'contact_section_description',
        array(
            'priority' => 30,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'

        )
    );

    // Section Description
    $wp_customize->add_control(
        'section_description',
        array(
            'label' => __('Contact Details Section Description', 'kriti_law_firm'),
            'settings' => 'contact_section_description',
            'section' => 'contact_details',
            'type' => 'textarea'
        )
    );

    // Phone Number
    $wp_customize->add_setting(
        'phone_number',
        array(
            'priority' => 20,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'absint'

        )
    );

    $wp_customize->add_control(
        'phone_number',
        array(
            'label' => __('Contact Number', 'kriti_law_firm'),
            'settings' => 'phone_number',
            'section' => 'contact_details',
            'type' => 'number'
        )
    );

    // Email
    $wp_customize->add_setting(
        'email',
        array(
            'priority' => 30,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_email'

        )
    );

    $wp_customize->add_control(
        'email',
        array(
            'label' => __('Contact Email', 'kriti_law_firm'),
            'settings' => 'email',
            'section' => 'contact_details',
            'type' => 'email'
        )
    );

    // Address
    $wp_customize->add_setting(
        'address',
        array(
            'priority' => 40,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'

        )
    );

    $wp_customize->add_control(
        'address',
        array(
            'label' => __('Address', 'kriti_law_firm'),
            'settings' => 'address',
            'section' => 'contact_details',
            'type' => 'textarea'
        )
    );
}
add_action('customize_register', 'law_firm_contact_page_sections');
