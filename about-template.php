<?php
/*
Template Name: About Template
*/


get_header();

/* Get required theme mod options */

$banner_title = get_theme_mod('banner_title');
$banner_button = get_theme_mod('banner_button');
?>
<!-- container for header image -->
<div class="about_header_image">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <img alt="about page header image" src="<?php header_image(); ?>" class="about_banner">
        <div class="about-contents text-center">
          <!-- add the header image -->

          <h2><?php echo $banner_title; ?></h2>
          <a href="#about_us" class="btn mt-4"><?php echo $banner_button; ?>
            <i class="fa fa-arrow-down"></i>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- know about us section -->
<section class="about-us" id="about_us">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
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
        while ($qry->have_posts()) :
          $qry->the_post();

        ?>

          <h5 class="mt-4 text-center"><?php the_title(); ?></h5>
          <p class="page-content"><?php the_content(); ?></p>
        <?php
        endwhile;
        ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>