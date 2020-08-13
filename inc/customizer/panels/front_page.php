<?php

/**
 * This page is for front page panel
 */

function front_page_panel($wp_customize)
{
    /** 
     * 
     * Front page Settings panel
     * 
     */

    $wp_customize->add_panel(
        'front_end',
        array(
            'title' => __('Front Page Setting', 'kriti_law_firm'),
            'priority' => 70,
            'capability' => 'edit_theme_options',
            'description' => __('Allows you to change your front end setting', 'kriti_law_firm')

        )
    );
}

add_action('customize_register', 'front_page_panel');
