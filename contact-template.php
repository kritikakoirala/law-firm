<?php

/**
 * Template Name: Contact Template
 * This Page is the contact page of your website
 */

/* Get all the required theme mod options for the page*/

$section_title = get_theme_mod('contact_section_title');
$secton_description = get_theme_mod('contact_section_description');
$phone_number = get_theme_mod('phone_number');
$email = get_theme_mod('email');
$address = get_theme_mod('address');

get_header();
?>
<!-- contact details -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mt-4 mb-4 text-center"><?php echo esc_html($section_title); ?></h5>
                        <p class="mb-4"><?php echo esc_html($secton_description); ?></p>
                    </div>
                    <div class="card-body">
                        <p> <span><?php esc_html_e('Phone Number', 'kriti_law_firm'); ?></span> <?php echo esc_html($phone_number); ?></p>

                        <p><span><?php esc_html_e(' Email', 'kriti_law_firm'); ?>:</span> <?php echo esc_html($email); ?></p>

                        <p><span><?php esc_html_e('Address', 'kriti_law_firm'); ?>:</span> <?php echo esc_html($address); ?></p>
                    </div>
                    <div class="card-footer">
                        <?php

                        printf(
                            '<p>' . __('You can also send us a message. <br> Please fill out the form below to mail us.', 'kriti_law_firm') . '</p>'
                        );
                        ?>

                    </div>
                </div>


            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <!-- iframe map -->

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.5887265169313!2d85.34910351453811!3d27.699103532462253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1986ea6e4ded%3A0x884b8d2f520224bb!2sPancha%20Kumari%20Temple!5e0!3m2!1sen!2snp!4v1593844069541!5m2!1sen!2snp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>

<div class="contact_form">
    <div class="container">
        <?php
        printf(
            '<h4>' . __(' Send us a message', 'kriti_law_firm') . '</h4>'
        );

        ?>

        <p class=" message pb-4"><?php _e('Leave us a message if you have any queries. We will try our best to reply as soon as possisble.', 'kriti_law_firm'); ?></p>
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">

                    <?php echo do_shortcode('[contact-form-7 id="54" title="Kriti Law Firm"]'); ?>


                </div>

            </div>
    </div>
    </form>
</div>
<?php get_footer(); ?>