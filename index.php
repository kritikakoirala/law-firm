<?php

/**
 * This template is for diplaying all the latest posts 
 */
get_header(); ?>
<!-- blog posts section begins -->
<div class="latest_posts">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 order-md-1 col-md-12 col-sm-12 ">
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
          ?>
          <nav class="paging-navigation" role="navigation">
            <div class="nav-links">
              <?php if (get_next_posts_link()) : ?>
                <div class="nav-previous"><?php next_posts_link(__('<span class = "meta-nav">&larr;</span> Older Posts', 'kriti_law_firm')) ?></div>
              <?php endif; ?>

              <?php if (get_previous_posts_link()) : ?>
                <div class="nav-next"><?php previous_posts_link(__('<span class = "meta-nav">&rarr;</span> Newer Posts', 'kriti_law_firm')) ?></div>
              <?php endif; ?>
            </div>
          </nav>
        <?php
        else :
        ?>
          <p>There are no posts yet.</p>

        <?php
        endif;
        ?>

      </div>

      <div class="col-lg-3 order-md-2 col-md-6 col-sm-6">
        <?php get_sidebar(); ?>
      </div>


    </div>
  </div>

</div>
<!-- blog posts section ends -->

<?php
get_footer();
?>