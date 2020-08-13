<?php

/**
 * This page is for the custom functions of the website
 */

function custom_functions()
{
?>
    <!-- styles to banner image of the homepage, and hero image of the about page -->
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

        .about_header_image {
            background-color: rgba(0, 0, 0, 0.8);
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                url("<?php header_image(); ?>");
            margin: 0 0 4em 0;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 400px;
            position: relative;
        }
    </style>
<?php
}

add_action('wp_head', 'custom_functions');
