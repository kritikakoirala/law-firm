<?php

/**
 * This page is for about page panel
 */

function about_page_panel($wp_customize)
{
    /**
     * 
     * About Page Settings Panel
     */

    $wp_customize->add_panel(
        'about_page_settings',
        array(
            'title' => __('About Page Settings', 'kriti_law_firm'),
            'priority' => 80,
            'capability' => 'edit_theme_options',
            'description' => __('Allows you to change your footer settings around the website', 'kriti_law_firm')

        )
    );
}
add_action('customize_register', 'about_page_panel');
