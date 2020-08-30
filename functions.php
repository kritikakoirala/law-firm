<?php

/*
This functions page includes all the basic things we need in the website
*/


// function to load the stylesheet and scripts


if (!function_exists('kriti_law_firm_setup')) :

	function kriti_law_firm_setup()
	{

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */

		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */

		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'kriti_law_firm_main_menu' => __('Main Menu', 'kriti_law_firm'),
				'kriti_law_firm_footer_menu' => __('Footer Menu', 'kriti_law_firm')
			)
		);

		/*
		* Switch default core markup for search form, comment form, and comments
	 	* to output valid HTML5.
	 	*/
		add_theme_support('html5', array(
			'comment-list',
			'gallery',
			'caption',
		));

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


		// Add theme support for customer header
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


		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');


		// Add theme support for post formats
		add_theme_support('post-formats', array('video, image'));


		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add custom image size
		add_image_size('search-thumbnail', 220, 200, false);
	}

endif;
add_filter('after_setup_theme', 'kriti_law_firm_setup');


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
	return 30;
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
require get_template_directory() . '/inc/template_functions.php';
