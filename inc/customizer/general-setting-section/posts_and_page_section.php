<?php

/**
 * This page is for the custom controls for posts and page
 */


function law_firm_posts_and_pages($wp_customize)
{

    /*=================== About section ====================*/
    $wp_customize->add_section(
        'posts_and_pages',
        array(
            'title' => __('Posts and Page Section', 'kriti_law_firm'),
            'capability' => 'edit_theme_options',
            'priority' => 10,
            'panel' => 'general_settings'
        )
    );

    // About section title
    $wp_customize->add_setting(
        'show_related_posts',
        array(
            'priority' => 10,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'default' => 0
        )
    );

    $wp_customize->add_control(
        'show_related_posts',
        array(
            'label' => __('Show Relates Posts', 'kriti_law_firm'),
            'section' => 'posts_and_pages',
            'settings' => 'show_related_posts',
            'type' => 'checkbox'
        )
    );

    // about section read more button

    $wp_customize->add_setting(
        'read_more_button',
        array(
            'priority' => 20,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'default' => __('Know Us', 'kriti_law_firm')
        )
    );

    $wp_customize->add_control(
        'read_more_button',
        array(
            'label' => __('Read more Button', 'kriti_law_firm'),
            'section' => 'about_section',
            'settings' => 'read_more_button',
            'type' => 'text'
        )
    );

    // read more button link
    $wp_customize->add_setting(
        'read_more_button_link',
        array(
            'priority' => 30,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'default' => __('#', 'kriti_law_firm'),
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'read_more_link',
        array(
            'label' => __('Read More Button Link', 'kriti_law_firm'),
            'section' => 'about_section',
            'settings' => 'read_more_button_link',
            'type' => 'text'
        )
    );
}
add_action('customize_register', 'law_firm_posts_and_pages');
