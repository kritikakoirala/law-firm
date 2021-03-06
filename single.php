<?php

/**
 * This template is for diplaying all the single posts 
 */
get_header(); ?>
<!-- blog posts section begins -->
<div class="latest_posts">
  <div class="container">
    <div class="row">

      <?php
      // if there are any posts
      if (have_posts()) :
        // while there are posts, return the post
        while (have_posts()) : the_post();

      ?>

          <div class="col-lg-9 col-md-12 order-md-1 col-sm-12">
            <?php get_template_part('template-parts/content', 'single'); ?>
            <hr>

            <?php show_related_posts();

            if (comments_open() || get_comments_number()) :
              comments_template();
            endif;
            ?>
          </div>

          <div class="col-lg-3 col-md-6 order-md-2 col-sm-6">
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


<?php

get_footer();
?>