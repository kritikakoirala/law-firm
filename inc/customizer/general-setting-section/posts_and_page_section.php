<?php

/**
 * This page is for the custom controls for posts and page
 */


function law_firm_posts_and_pages($wp_customize)
{

    /*=================== Posts and page section ====================*/
    $wp_customize->add_section(
        'posts_and_pages',
        array(
            'title' => __('Posts and Page Section', 'kriti_law_firm'),
            'capability' => 'edit_theme_options',
            'priority' => 10,
            'panel' => 'general_settings'
        )
    );

    // Show related posts checkbox
    $wp_customize->add_setting(
        'show_related_posts',
        array(
            'priority' => 10,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'default' => 0,
            'sanitize_callback' => 'kriti_law_firm_sanitize_checkbox'
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

    // show related posts title

    $wp_customize->add_setting(
        'show_related_post_title',
        array(
            'priority' => 20,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
            'default' => __('Related Posts', 'kriti_law_firm'),
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );

    $wp_customize->add_control(
        'show_related_post_title',
        array(
            'label' => __('Read more Button', 'kriti_law_firm'),
            'section' => 'posts_and_pages',
            'settings' => 'show_related_post_title',
            'type' => 'text'
        )
    );
}
add_action('customize_register', 'law_firm_posts_and_pages');
