<?php

/**
 * This is a section for areas of practice in the homepage
 * 
 */

/** Get all the important theme mods */

$section_title = get_theme_mod('area_section_title');
$section_description = get_theme_mod('area_section_description');
$area_1 = get_theme_mod('practice_area_1');
$area_2 = get_theme_mod('practice_area_2');
$area_3 = get_theme_mod('practice_area_3');
$area_4 = get_theme_mod('practice_area_4');
$readmore = get_theme_mod('read_more');
$readmore_link = get_theme_mod('read_more_button_link');

?>

<section class="areas_of_practice">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h5 class="text-center mb-4"><?php echo $section_title ?></h5>
        <p><?php echo $section_description; ?></p>
        <div class="area_section text-center">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 text-center align-self-stretch">
              <div class="icon active d-flex justify-content-center align-items-center mb-2">
                <i class="fa fa-balance-scale"></i>

              </div>
              <div class="service-body">
                <h6 class="heading text-center"><?php echo $area_1; ?></h6>

              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 text-center align-self-stretch">
              <div class="icon active d-flex justify-content-center align-items-center mb-2">
                <i class="fa fa-balance-scale"></i>

              </div>
              <div class="service-body">
                <h6 class="heading text-center"><?php echo $area_2; ?></h6>

              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 text-center align-self-stretch">
              <div class="icon active d-flex justify-content-center align-items-center mb-2">
                <i class="fa fa-balance-scale"></i>

              </div>
              <div class="service-body">
                <h6 class="heading text-center"><?php echo $area_3; ?></h6>

              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 text-center align-self-stretch">
              <div class="icon active d-flex justify-content-center align-items-center mb-2">
                <i class="fa fa-balance-scale"></i>

              </div>
              <div class="service-body">
                <h6 class="heading text-center"><?php echo $area_4; ?></h6>

              </div>
            </div>

          </div>
          <a class="btn readmore text-center" href="<?php echo $readmore_link ?>"><?php echo $readmore; ?></a>
        </div>


      </div>
    </div>
  </div>
</section>