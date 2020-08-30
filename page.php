<?php

/**
 * This template is for diplaying all the pages 
 */
get_header(); ?>
<!-- blog posts section begins -->
<div class="latest_posts owl-carousel owl-theme">
    <div class="container">
        <div class="row">

            <?php
            // if there are any posts
            if (have_posts()) :
                // while there are posts, return the post
                while (have_posts()) : the_post();

            ?>
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <?php get_template_part('template-parts/content', 'page'); ?>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <?php get_sidebar(); ?>
                    </div>
                <?php
                endwhile;
            else :
                ?>
                <p><?php get_template_part('template-parts/content', 'none') ?></p>
            <?php
            endif;
            ?>

        </div>
    </div>

</div>
<!-- blog posts section ends -->

<?php

get_footer();
?>