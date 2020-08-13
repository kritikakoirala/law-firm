<?php

/**
 * This page is for contact page panel
 */

function contact_page_panel($wp_customize)
{

    /** 
     * 
     * Contact Page Settings Panel
     * 
     */

    $wp_customize->add_panel(
        'contact_page_settings',
        array(
            'title' => __('Contact Page Settings', 'kriti_law_firm'),
            'priority' => 90,
            'capability' => 'edit_theme_options',
            'description' => __('Allows you to change your contact page settings in the website', 'kriti_law_firm')

        )
    );
}
add_action('customize_register', 'contact_page_panel');
