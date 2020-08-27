<?php

/**
 * This template is for diplaying your archives
 */
get_header(); ?>
<!-- blog posts section begins -->
<div class="latest_posts mt-4 pt-4">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-md-12 order-md-1 col-sm-12">
                <?php
                // if there are any posts
                if (have_posts()) :
                    // while there are posts, return the post
                    while (have_posts()) : the_post();

                ?>
                        <?php get_template_part('template-parts/content'); ?>
                        <hr>
                    <?php
                    endwhile;
                else :
                    ?>
                    <p>There are no posts yet.</p>

                <?php
                endif;
                ?>
            </div>
            <div class="col-lg-3 col-md-6 order-md-2  col-sm-6">
                <?php get_sidebar(); ?>
            </div>



        </div>

    </div>

</div>
<!-- blog posts section ends -->

<?php

get_footer();
?>