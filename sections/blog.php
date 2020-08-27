<?php

/**
 * This page show the blog section at the homepage
 */
?>

<!-- get required theme mod options -->
<?php
// Theme mode options for Blog section
$title_text = get_theme_mod('blog_section_title');
$read_more_button = get_theme_mod('read_more_posts');
$read_more_button_link = get_theme_mod('read_more_posts_link');
?>
<div class="latest_posts" id="homepage_blog">
  <h3 class="pt-4 text-center section_heading"><?php echo $title_text; ?></h3>
  <div class="container">
    <div class="row">

      <?php
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '3'
      );
      $qry = new WP_Query($args);
      // if there are any posts
      if ($qry->have_posts()) :
        // while there are posts, return the post
        while ($qry->have_posts()) : $qry->the_post();

      ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">

              <div class="card-body">


                <?php get_template_part('template-parts/content'); ?>
              </div>
              <div class="card-footer">


                <a href="<?php esc_url(the_permalink()); ?>" class="btn"><?php echo "$read_more_button"; ?></a>
              </div>
            </div>
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