<?php

/**
 * This page is for the custom controls of blog section on the homepage
 */


function law_firm_blog_section($wp_customize)
{

	/*==================== Blog posts section==================*/

	$wp_customize->add_section(
		'blog_section',
		array(
			'title' => __('Blog Section', 'kriti_law_firm'),
			'capability' => 'edit_theme_options',
			'priority' => 80,
			'panel' => 'front_end'
		)
	);

	// Blog section title
	$wp_customize->add_setting(
		'blog_section_title',
		array(
			'priority' => 10,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'default' => __('Latest Posts', 'kriti_law_firm'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'blog_section',
		array(
			'label' => __('Blog Section Title', 'kriti_law_firm'),
			'section' => 'blog_section',
			'settings' => 'blog_section_title',
			'type' => 'text'
		)
	);

	// blog section read more button

	$wp_customize->add_setting(
		'read_more_posts',
		array(
			'priority' => 20,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'default' => __('Read More', 'kriti_law_firm'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'read_more',
		array(
			'label' => __('Read more Button', 'kriti_law_firm'),
			'section' => 'blog_section',
			'settings' => 'read_more_posts',
			'type' => 'text'
		)
	);
}
add_action('customize_register', 'law_firm_blog_section');
