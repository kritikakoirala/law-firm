<?php
// This is the about section in the front page
?>

<!-- get required theme mod options -->
<?php
$title_text = get_theme_mod('about_section_title');
$read_more_button = get_theme_mod('read_more_button');
$read_more_button_link = get_theme_mod('read_more_button_link');
?>
<section class="about-us">
  <h3 class="pt-4 text-center"><?php echo $title_text; ?></h3>
  <div class="container-fluid">

    <div class="row">

      <!-- about section image -->
      <div class="col-lg-4 col-md-6 col-sm-12 text-center">
        <?php
        $args = array(
          'post_type' => 'page',

          'meta_query' => array(
            array(
              'key' => '_wp_page_template',
              'value' => 'about-template.php'
            )
          )
        );

        $qry = new WP_Query($args);
        while ($qry->have_posts()) {
          $qry->the_post();
        ?>
          <div class="about_section_thumbnail">
            <?php

            if (has_post_thumbnail()) {
            ?>
              <img data-original="<?php the_post_thumbnail_url(); ?>" class="about_section_image img_fluid" alt="about us image" src="<?php the_post_thumbnail_url(); ?>" style="">
            <?php
            }
            ?>

          </div>

      </div>
      <!-- about section contents -->
      <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="about-content">



          <p class="text-left mt-4">
          <?php

          echo the_excerpt();
        }

          ?>

          </p>
          <a href="<?php esc_url(the_permalink()); ?>" class="btn know-us-btn"><?php echo $read_more_button; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>