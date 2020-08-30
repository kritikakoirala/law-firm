<?php

/**
 * Template Name: TeamMember Template
 * This template is for the service page
 * 
 * 
 * Get all the important theme mods */

get_header();
?>


<section class="team-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="banner-content text-center">
                    <h3><?php esc_html_e('Our Team', 'kriti_law_firm'); ?></h3>
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