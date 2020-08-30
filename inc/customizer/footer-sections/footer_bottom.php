<?php

/**
 * This page is for the custom controls of bottom footer section of the footer
 */


function law_firm_footer_bottom_section($wp_customize)
{
    /*=================== Footer Bottom section ====================*/
    $wp_customize->add_section(
        'footer_bottom',
        array(
            'title' => __('Footer Bottom', 'kriti_law_firm'),
            'priority' => '30',
            'capability' => 'edit_theme_options',
            'panel' => 'footer_settings'
        )
    );

    // Copyright Message
    $wp_customize->add_setting(
        'copyright_message',
        array(
            'priority' => 40,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'

        )
    );
    $wp_customize->add_control(
        'copyright_message',
        array(
            'label' => __('Copyright Message', 'kriti_law_firm'),
            'settings' => 'copyright_message',
            'section' => 'footer_bottom',
            'type' => 'textarea'
        )
    );
}
add_action('customize_register', 'law_firm_footer_bottom_section');
