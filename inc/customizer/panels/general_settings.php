<?php

/**
 * This page is for about general settings panel
 */

function general_settings_panel($wp_customize)
{
    /**
     * 
     *  General Settings Panel
     */

    $wp_customize->add_panel(
        'general_settings',
        array(
            'title' => __('General Settings', 'kriti_law_firm'),
            'priority' => 100,
            'capability' => 'edit_theme_options',
            'description' => __('Allows you to change the general settings around the website', 'kriti_law_firm')

        )
    );
}
add_action('customize_register', 'general_settings_panel');
