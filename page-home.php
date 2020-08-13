<?php

/**
 * This is the statis homepage of your website
 */

get_header(); ?>

<!-- Get all the theme mode options -->

<!-- landing-page section begins -->
<?php get_template_part('sections/banner'); ?>
<!-- landing page section ends -->

<!-- brief about section begins -->
<?php get_template_part('sections/about'); ?>
<!-- brief about section ends -->

<!-- Areas of practice sections begins -->
<?php get_template_part('sections/practice_areas'); ?>
<!-- Areas of practice sections ends -->

<!-- blog posts section begins -->
<?php get_template_part('sections/blog'); ?>
<!-- blog posts section ends -->


<?php get_footer(); ?>