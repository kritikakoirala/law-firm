<?php
get_header();

?>
<!-- Get all the theme mode options -->
<?php
// Theme mode options for Banner section
$banner_title = get_theme_mod('banner_title');
$banner_desc = get_theme_mod('banner_desc');
$banner_image = get_theme_mod('banner_image');
$banner_button = get_theme_mod('banner_button');
$banner_button_link = get_theme_mod('banner_button_link');


?>
<!-- landing-page section begins -->
<section class="hero-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">

				<!-- hero contents -->
				<div class="hero-contents text-center">
					<h1><?php echo esc_html_e($banner_title); ?></h1>
					<p><?php echo  esc_html_e($banner_desc); ?></p>
					<a href="<?php echo esc_url_raw($banner_button_link) ?>" class="btn"><?php echo  esc_html_e($banner_button); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- landing page section ends -->

<!-- brief about section begins -->
<?php get_template_part('sections/about'); ?>
<!-- brief about section ends -->

<!-- Areas of practice sections begins -->
<?php get_template_part('sections/practice_areas'); ?>
<!-- Areas of practice sections ends -->

<!-- blog posts section begins -->
<?php get_template_part('sections/blog'); ?>
<!-- blog posts section ends -->




<?php


get_footer();
?>