<?php

/*
This functions page includes all the basic things we need in the website
*/


// function to load the stylesheet and scripts

use function PHPSTORM_META\map;

function load_script()
{

	// load the stylesheets

	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0', 'all');
	wp_enqueue_style('slicknav.min', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0', 'all');
	wp_enqueue_style('flaticon.min', get_template_directory_uri() . '/css/flaticon.css', array(), '1.0', 'all');
	wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');

	// load the scripts
	wp_enqueue_script('jquery', get_template_directory_uri() . 'js/jquery-3.5.1.min.js', array(), '3.5.1', true, 'all');

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.0', true, 'all');

	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.3.4', true, 'all');

	wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), '2.3.4', true, 'all');

	wp_enqueue_script('lazyload', 'http://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js', array(), '1.9.1', true, 'all');

	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true, 'all');
}

add_action('wp_enqueue_scripts', 'load_script');


// all the configuration of the site
function law_firm_config()
{
	// register menu
	register_nav_menus(
		array(
			'kriti_law_firm_main_menu' => __('Main Menu', 'kriti_law_firm'),
			'kriti_law_firm_footer_menu' => __('Footer Menu', 'kriti_law_firm')
		)
	);

	// add theme support for the site


	// theme support for customer header
	$defaults = array(
		'default-image' => get_template_directory_uri() . '/img/about_img.jpg',
		'width' => 1349,
		'height' => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'default-text-color' => '',
		'header-text' => true,
		'admin-preview-callback' => '',
		'uploads' => true
	);
	add_theme_support('custom-header', $defaults);

	// theme support for post thumbnail
	add_theme_support('post-thumbnails');

	// theme support for post formats
	add_theme_support('post-formats', array('video, image'));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support('html5', array(
		'comment-list',
		'gallery',
		'caption',
	));

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support('custom-logo', array(
		'height'      => 70,
		'width'       => 70,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array('site-title', 'site-description')
	));
}

add_action('after_setup_theme', 'law_firm_config', 0);

// customize register
function law_firm_customize_register($wp_customize)
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

	/*================= Top Header Section ==================*/
	$wp_customize->add_section(
		'header',
		array(
			'title' => __('Top Header', 'kriti_law_firm'),
			'priority' => 10,
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'panel' => 'front_end'
		)
	);

	/** Phone Number */

	$wp_customize->add_setting(
		'header_phone',
		array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'
		)
	);


	$wp_customize->add_control(
		'phone_number',
		array(
			'label' => __('Phone Number', 'kriti_law_firm'),
			'settings' => 'header_phone',
			'priority' => 10,
			'section' => 'header'
		)
	);

	/** Email */

	$wp_customize->add_setting(
		'header_email',
		array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(
		'email',
		array(
			'label' => __('Email', 'kriti_law_firm'),
			'settings' => 'header_email',
			'priority' => 20,
			'section' => 'header'
		)
	);

	/** =================== Add Banner section ==================*/
	$wp_customize->add_section(
		'banner_section',
		array(
			'title' => __('Banner Section', 'kriti_law_firm'),
			'priority' => 50,
			'capability' => 'edit_theme_options',
			'description' => __('Allows you to change the banner of the homepage of your website'),
			'panel' => 'front_end'
		)
	);

	// Banner Image
	$wp_customize->add_setting(
		'banner_image',
		array(
			'priority' => 10,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'banner_image_control',
			array(
				'label' => __('Banner Image', 'kriti_law_firm'),
				'settings' => 'banner_image',
				'section' => 'banner_section',
			)
		)
	);

	//	Banner Title
	$wp_customize->add_setting(
		'banner_title',
		array(
			'priority' => 20,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(
		'banner_text_control',
		array(
			'label' => __('Banner Title', 'kriti_law_firm'),
			'settings' => 'banner_title',
			'section' => 'banner_section',
			'type' => 'text'
		)
	);

	// Banner Description
	$wp_customize->add_setting(
		'banner_desc',
		array(
			'priority' => 30,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(
		'banner_desc_control',
		array(
			'label' => __('Banner Description', 'kriti_law_firm'),
			'settings' => 'banner_desc',
			'section' => 'banner_section',
			'type' => 'textarea'
		)
	);

	// Banner Button
	$wp_customize->add_setting(
		'banner_button',
		array(
			'priority' => 40,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'default' => __('consult us', 'kriti_law_firm')
		)
	);

	$wp_customize->add_control(
		'banner_button_control',
		array(
			'label' => __('Banner Button', 'kriti_law_firm'),
			'settings' => 'banner_button',
			'section' => 'banner_section',
			'type' => 'text'
		)
	);

	// Banner Button Link
	$wp_customize->add_setting(
		'banner_link',
		array(
			'default' => '#',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'banner_link',
		array(
			'label' => __('Banner Link', 'kriti_law_firm'),
			'section' => 'banner_section',
			'type' => 'text'
		)
	);

	/*=================== About section ====================*/
	$wp_customize->add_section(
		'about_section',
		array(
			'title' => __('About Section', 'kriti_law_firm'),
			'capability' => 'edit_theme_options',
			'priority' => 70,
			'panel' => 'front_end'
		)
	);

	// About section title
	$wp_customize->add_setting(
		'about_section_title',
		array(
			'priority' => 10,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'default' => __('Our story', 'kriti_law_firm')
		)
	);

	$wp_customize->add_control(
		'about_section_control',
		array(
			'label' => __('About Section Title', 'kriti_law_firm'),
			'section' => 'about_section',
			'settings' => 'about_section_title',
			'type' => 'text'
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
		'read_more',
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
			'default' => __('Latest Posts', 'kriti_law_firm')
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

	// about section read more button

	$wp_customize->add_setting(
		'read_more_posts',
		array(
			'priority' => 20,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'default' => __('Read More', 'kriti_law_firm')
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

	/*======== Areas of Practice Section ==========*/

	$wp_customize->add_section(
		'practice_section',
		array(
			'title' => __('Area of Practice Section', 'kriti_law_firm'),
			'capability' => 'edit_theme_options',
			'priority' => 90,
			'panel' => 'front_end'
		)
	);

	$wp_customize->add_setting(
		'area_section_title',
		array(
			'priority' => 20,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'default' => __('Our range of Practice Areas', 'kriti_law_firm')
		)
	);
	$wp_customize->add_control(
		'area_section_title',
		array(
			'label' => __('Practice Area Section Title', 'kriti_law_firm'),
			'settings' => 'area_section_title',
			'section' => 'practice_section',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'area_section_description',
		array(
			'priority' => 30,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'

		)
	);
	$wp_customize->add_control(
		'area_section_description',
		array(
			'label' => __('Practice Area Description', 'kriti_law_firm'),
			'settings' => 'area_section_description',
			'section' => 'practice_section',
			'type' => 'textarea'
		)
	);

	$wp_customize->add_setting(
		'practice_area_1',
		array(
			'priority' => 40,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'practice_area_1',
		array(
			'label' => __('Practice Area Title 1', 'kriti_law_firm'),
			'settings' => 'practice_area_1',
			'section' => 'practice_section',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'practice_area_2',
		array(
			'priority' => 50,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'practice_area_2',
		array(
			'label' => __('Practice Area Title 2', 'kriti_law_firm'),
			'settings' => 'practice_area_2',
			'section' => 'practice_section',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'practice_area_3',
		array(
			'priority' => 60,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'practice_area_3',
		array(
			'label' => __('Practice Area Title 3', 'kriti_law_firm'),
			'settings' => 'practice_area_3',
			'section' => 'practice_section',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'practice_area_4',
		array(
			'priority' => 70,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'practice_area_4',
		array(
			'label' => __('Practice Area Title 4', 'kriti_law_firm'),
			'settings' => 'practice_area_4',
			'section' => 'practice_section',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'read_more',
		array(
			'priority' => 80,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'default' => __('Read More', 'kriti_law_firm')
		)
	);

	$wp_customize->add_control(
		'read_more',
		array(
			'label' => __('Read more Button', 'kriti_law_firm'),
			'section' => 'practice_section',
			'settings' => 'read_more',
			'type' => 'text'
		)
	);

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
			'section' => 'practice_section',
			'settings' => 'read_more_button_link',
			'type' => 'text'
		)
	);



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

	// Contact Details Section
	$wp_customize->add_section(
		'contactDetail_footer_widget',
		array(
			'title' => __('Contact Details', 'kriti_law_firm'),
			'priority' => 10,
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'panel' => 'footer_settings'
		)
	);

	$wp_customize->add_setting(
		'contact_widget_title',
		array(
			'priority' => 20,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'default' => __('Contact Details', 'kriti_law_firm')
		)
	);
	$wp_customize->add_control(
		'contact_details',
		array(
			'label' => __('Contact Details Title', 'kriti_law_firm'),
			'settings' => 'contact_widget_title',
			'section' => 'contactDetail_footer_widget',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'phone_number',
		array(
			'priority' => 20,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'

		)
	);
	$wp_customize->add_control(
		'phone_number',
		array(
			'label' => __('Contact Number', 'kriti_law_firm'),
			'settings' => 'phone_number',
			'section' => 'contactDetail_footer_widget',
			'type' => 'textarea'
		)
	);
	$wp_customize->add_setting(
		'email',
		array(
			'priority' => 30,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'

		)
	);
	$wp_customize->add_control(
		'email',
		array(
			'label' => __('Contact Email', 'kriti_law_firm'),
			'settings' => 'email',
			'section' => 'contactDetail_footer_widget',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'address',
		array(
			'priority' => 40,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'

		)
	);
	$wp_customize->add_control(
		'address',
		array(
			'label' => __('Address', 'kriti_law_firm'),
			'settings' => 'address',
			'section' => 'contactDetail_footer_widget',
			'type' => 'textarea'
		)
	);

	// Opening Hours Section
	$wp_customize->add_section(
		'openingHours_footer_widget',
		array(
			'title' => __('Opening Hours', 'kriti_law_firm'),
			'priority' => 10,
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'panel' => 'footer_settings'
		)
	);
	$wp_customize->add_setting(
		'opening_hours_title',
		array(
			'priority' => 40,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'default' => __('Opening Hours', 'kriti_law_firm')

		)
	);
	$wp_customize->add_control(
		'opening_hours_title',
		array(
			'label' => __('Opening Hours Title', 'kriti_law_firm'),
			'settings' => 'opening_hours_title',
			'section' => 'openingHours_footer_widget',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'opening_time',
		array(
			'priority' => 40,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'

		)
	);
	$wp_customize->add_control(
		'opening_time',
		array(
			'label' => __('Opening Time', 'kriti_law_firm'),
			'settings' => 'opening_time',
			'section' => 'openingHours_footer_widget',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'opening_day',
		array(
			'priority' => 40,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'

		)
	);
	$wp_customize->add_control(
		'opening_day',
		array(
			'label' => __('Opening Day', 'kriti_law_firm'),
			'settings' => 'opening_day',
			'section' => 'openingHours_footer_widget',
			'type' => 'text'
		)
	);

	// Footer Bottom Section
	$wp_customize->add_section(
		'footer_bottom',
		array(
			'title' => __('Footer Bottom', 'kriti_law_firm'),
			'priority' => '30',
			'capability' => 'edit_theme_options',
			'panel' => 'footer_settings'
		)
	);
	$wp_customize->add_setting(
		'copyright_message',
		array(
			'priority' => 40,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'

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


	/**
	 * 
	 * About Page Settings Panel
	 */

	$wp_customize->add_panel(
		'about_page_settings',
		array(
			'title' => __('About Page Settings', 'kriti_law_firm'),
			'priority' => 120,
			'capability' => 'edit_theme_options',
			'description' => __('Allows you to change your footer settings around the website', 'kriti_law_firm')

		)
	);

	$wp_customize->get_section('header_image')->panel                    = 'about_page_settings';
	$wp_customize->get_section('header_image')->title                    = __('Banner Section', 'kriti_law_firm');
	$wp_customize->get_section('header_image')->priority                 = 10;

	$wp_customize->add_setting(
		'banner_title',
		array(
			'priority' => 20,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'banner_title',
		array(
			'label' => __('Banner Title', 'kriti_law_firm'),
			'settings' => 'banner_title',
			'section' => 'header_image',
			'type' => 'text'
		)
	);

	$wp_customize->add_setting(
		'banner_button',
		array(
			'priority' => 30,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'
		)
	);
	$wp_customize->add_control(
		'banner_button',
		array(
			'label' => __('Banner Button', 'kriti_law_firm'),
			'settings' => 'banner_button',
			'section' => 'header_image',
			'type' => 'text'
		)
	);

	/** 
	 * 
	 * Contact Page Settings Panel
	 * 
	 */

	$wp_customize->add_panel(
		'contact_page_settings',
		array(
			'title' => __('Contact Page Settings', 'kriti_law_firm'),
			'priority' => 120,
			'capability' => 'edit_theme_options',
			'description' => __('Allows you to change your contact page settings in the website', 'kriti_law_firm')

		)
	);

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
	$wp_customize->add_setting(
		'contact_section_title',
		array(
			'priority' => 40,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh',
			'default' => __('Contact Details', 'kriti_law_firm')

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
			'transport' => 'refresh'

		)
	);
	$wp_customize->add_control(
		'section_description',
		array(
			'label' => __('Contact Details Section Description', 'kriti_law_firm'),
			'settings' => 'contact_section_description',
			'section' => 'contact_details',
			'type' => 'textarea'
		)
	);

	$wp_customize->add_setting(
		'phone_number',
		array(
			'priority' => 20,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'

		)
	);
	$wp_customize->add_control(
		'phone_number',
		array(
			'label' => __('Contact Number', 'kriti_law_firm'),
			'settings' => 'phone_number',
			'section' => 'contact_details',
			'type' => 'textarea'
		)
	);
	$wp_customize->add_setting(
		'email',
		array(
			'priority' => 30,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'

		)
	);
	$wp_customize->add_control(
		'email',
		array(
			'label' => __('Contact Email', 'kriti_law_firm'),
			'settings' => 'email',
			'section' => 'contact_details',
			'type' => 'text'
		)
	);
	$wp_customize->add_setting(
		'address',
		array(
			'priority' => 40,
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh'

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

add_action('customize_register', 'law_firm_customize_register');


// custom functions

function custom_functions()
{
?>

	<!-- styles to banner image of the homepage -->
	<style type="text/css">
		.hero-section {
			background-color: #111111;
			background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
				url("<?php echo get_theme_mod('banner_image'); ?>");
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 540px;
			position: relative;
		}
	</style>
<?php
}

add_action('wp_head', 'custom_functions');

/**
 * function for excerpts
 */

// funtion for excerpt length
function excerpt_length($length)
{
	// dont make any changes inside the /wp-admin

	if (is_admin()) {
		return $length;
	}
	// set excerpt lenth to 50
	return 50;
}
add_filter('excerpt_length', 'excerpt_length', '999');

// function for except text
function excerpt_text($more)
{
	return is_admin() ? $more : ' &hellip; ';
}
add_filter('excerpt_more', 'excerpt_text', 999);



// include all the required files

require get_template_directory() . '/inc/widgets.php';
