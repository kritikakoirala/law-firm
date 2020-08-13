<?php

/**
 * This page show the banner of the homepage
 */

// Theme mode options for Banner section
$banner_title = get_theme_mod('banner_title');
$banner_desc = get_theme_mod('banner_desc');
$banner_image = get_theme_mod('banner_image');
$banner_button = get_theme_mod('banner_button');
$banner_button_link = get_theme_mod('banner_link');
?>

<section class="hero-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

                <!-- hero contents -->
                <div class="hero-contents text-center">
                    <h2><?php echo esc_html_e($banner_title); ?></h2>
                    <p><?php echo  esc_html_e($banner_desc); ?></p>
                    <a href="<?php echo esc_url($banner_button_link) ?>" class="btn"><?php echo  esc_html_e($banner_button); ?></a>


                </div>
            </div>
        </div>
    </div>
</section>