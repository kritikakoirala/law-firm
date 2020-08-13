<?php

/**
 * This template is for diplaying all the latest posts 
 */
get_header(); ?>
<!-- blog posts section begins -->
<div class="latest_posts">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 order-md-1 col-md-12 col-sm-12 ">
        <?php
        // if there are any posts
        if (have_posts()) :
          // while there are posts, return the post
          while (have_posts()) : the_post();

        ?>
            <?php get_template_part('template-parts/content'); ?>
            <hr>
            </hr>
          <?php
          endwhile;
        else :
          ?>
          <p>There are no posts yet.</p>

        <?php
        endif;
        ?>
      </div>

      <div class="col-lg-4 order-md-2 col-md-6 col-sm-6">
        <?php get_sidebar(); ?>
      </div>


    </div>
  </div>

</div>
<!-- blog posts section ends -->

<?php
get_footer();
?>