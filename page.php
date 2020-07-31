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
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <?php get_template_part('template-parts/content', 'page'); ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <?php get_sidebar(); ?>
                    </div>
                <?php
                endwhile;
            else :
                ?>
                <p>There are no posts yet.</p>
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