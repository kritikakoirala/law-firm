<?php

/**
 * Template Name: Service Template
 * This template is for the service page
 * 
 * 
 * Get all the important theme mods */

$section_title = get_theme_mod('area_section_title');
$section_description = get_theme_mod('area_section_description');
$image = get_theme_mod('area_section_image');
$area_1 = get_theme_mod('practice_area_1');
$area_2 = get_theme_mod('practice_area_2');
$area_3 = get_theme_mod('practice_area_3');
$area_4 = get_theme_mod('practice_area_4');
$practice_area_1_link = get_theme_mod('practice_area_1_link');
$practice_area_2_link = get_theme_mod('practice_area_2_link');
$practice_area_3_link = get_theme_mod('practice_area_3_link');
$practice_area_4_link = get_theme_mod('practice_area_4_link');
get_header();
?>


<section class="service-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner-content text-center">
                    <h3> <?php esc_html_e('Areas of Practice', 'kriti_law_firm'); ?></h3>
                    <a class="service_banner_arrow" href="#area_section"><i class="fa fa-angle-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="areas_of_practice" id="area_section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <h5 class="text-center mb-4"><?php echo esc_html($section_title); ?></h5>
                <p><?php echo esc_html($section_description); ?></p>
                <div class="area_section text-center">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center align-self-stretch">
                            <div class="icon active d-flex justify-content-center align-items-center mb-2">
                                <i class="fa fa-balance-scale"></i>

                            </div>
                            <div class="service-body">
                                <h6 class="heading text-center"><a href="<?php echo esc_url($practice_area_1_link); ?>"><?php echo esc_html($area_1); ?></a></h6>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 text-center align-self-stretch">
                            <div class="icon active d-flex justify-content-center align-items-center mb-2">
                                <i class="fa fa-balance-scale"></i>

                            </div>
                            <div class="service-body">
                                <h6 class="heading text-center"><a href="<?php echo esc_url($practice_area_2_link); ?>"><?php esc_html($area_2); ?></a></h6>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 text-center align-self-stretch">
                            <div class="icon active d-flex justify-content-center align-items-center mb-2">
                                <i class="fa fa-balance-scale"></i>

                            </div>
                            <div class="service-body">
                                <h6 class="heading text-center"><a href="<?php echo esc_url($practice_area_3_link); ?>"><?php esc_html($area_3); ?></a></h6>

                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 text-center align-self-stretch">
                            <div class="icon active d-flex justify-content-center align-items-center mb-2">
                                <i class="fa fa-balance-scale"></i>

                            </div>
                            <div class="service-body">
                                <h6 class="heading text-center"><a href="<?php echo esc_url($practice_area_4_link); ?>"><?php esc_html($area_4); ?></a></h6>

                            </div>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>