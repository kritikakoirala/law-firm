<?php

/**
 * This is the page of all the template functions of the website
 */


//  Function to show the related post

function show_related_posts()
{
  $show_related_posts = get_theme_mod('show_related_posts');
  $show_related_posts_title = get_theme_mod('show_related_post_title');

  global $post;
  $categories = get_the_category($post->ID);
  if ($categories) :
    $category_ids = array();
    foreach ($categories as $category)
      $category_id[] = $category->term_id;

    $args = array(
      'category__in' => $category_ids,
      'post__not_in' => array($post->ID),
      'posts_per_page' => 2,
      'ignore_sticky_posts' => 1
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) : ?>
      <div class="related_posts">
        <h5><?php echo esc_html($show_related_posts_title); ?></h5>
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="related-content">

                <?php
                while ($query->have_posts()) :
                  $query->the_post();

                  if ($show_related_posts) :
                ?>


                    <div class="card">
                      <div class="card-body">


                        <div class="relatedthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>

                          <div class="relatedcontent">
                            <h6><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h6>
                            <?php the_time('M j, Y') ?>
                          </div>

                        </div>
                      </div>
                    </div>


                <?php
                  endif;
                endwhile;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
    endif;
  endif;
  wp_reset_query();
}
?>