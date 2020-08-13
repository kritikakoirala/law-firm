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


	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.0', true, 'all');

	wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), '2.3.4', true, 'all');

	wp_enqueue_script('lazyload', 'http://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js', array(), '1.9.1', true, 'all');

	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true, 'all');
}

add_action('wp_enqueue_scripts', 'load_script');


// all the configuration of the site
function law_firm_config()
{
	//register menu
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

require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/custom_functions.php';
require get_template_directory() . '/inc/widgets.php';
