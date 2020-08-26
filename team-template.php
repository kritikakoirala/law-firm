<?php

/**
 * Template Name: TeamMember Template
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


<section class="team-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner-content text-center">
                    <h3>Our Team</h3>
                    <a class="team_banner_arrow" href="#team_members"><i class="fa fa-angle-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team_members" id="team_members">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-sm-8">
                <?php echo do_shortcode('[tmm name="law-firm"]'); ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>