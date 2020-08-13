<?php

/**
 * This page is for footer panel
 */

function footer_panel($wp_customize)
{
    /** 
     * 
     * Footer Settings Panel
     * 
     */
    $wp_customize->add_panel(
        'footer_settings',
        array(
            'title' => __('Footer Settings', 'kriti_law_firm'),
            'priority' => 120,
            'capability' => 'edit_theme_options',
            'description' => __('Allows you to change your footer settings around the website', 'kriti_law_firm')

        )
    );
}
add_action('customize_register', 'footer_panel');
