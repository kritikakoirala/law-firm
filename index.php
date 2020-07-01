<?php
require 'header.php';
?>

<!-- header begins-->
<header class="header">
  <!-- top header for contact info -->
  <div class="header-top text-right">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">

          <ul class="nav justify-content-end">
            <!-- nav item for phone number -->
            <li class="nav-item py-2">
              <a class="nav-phonenumber mr-4"><i class="fa fa-phone"></i> 9851087276 </a>

              <a class="nav-email ml-4"><i class="fa fa-envelope"></i> binkoirala@gmail.com</a>
            </li>
          </ul>

        </div>
      </div>
    </div>

  </div>
  <!-- top header ends -->

  <!-- header middle begins -->
  <div class="header-middle">


    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-5 col-md-4 col-sm-3">
          <!-- firm_logo -->
          <div class="firm-logo">
            <a href="index.php" class="navbar-brand">
              <h3>Kriti</h3>
              <span>Law Firm</span>
            </a>
          </div>
        </div>

        <div class="col-lg-7 col-md-8 col-sm-9">
          <!-- main-nav begins -->
          <nav class="navbar navbar-expand-md mobile-menu">
            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">AboutUs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>

            </ul>

          </nav>
          <!-- main-nav ends -->
        </div>
      </div>

      <div id="mobile-menu-wrap"></div>


    </div>
    <!-- header middle ends -->
</header>
<!-- header ends -->

<!-- landing-page section begins -->
<section class="hero-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">

        <!-- hero contents -->
        <div class="hero-contents text-center">
          <h1>Get advice</h1>
          <p>We have expertise and experience in family and corporate law.</p>
          <a href="" class="btn">Consult Us</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- landing page section ends -->

<!-- brief about section begins -->
<section class="about-us">
  <div class="container">
    <div class="row">
      <!-- about section image -->
      <div class="col-lg-4">
        <img data-original="img/hero-image.jpg" class="lazy" alt="about us image" width="320" height="300">
      </div>
      <!-- about section contents -->
      <div class="col-lg-6">
        <h6 class="pt-4">Our History</h6>
        <p class="text-left mt-4">
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

        </p>
        <a href="about-us.php" class="btn know-us-btn">Know Us</a>
      </div>
    </div>
  </div>
</section>
<!-- brief about section ends -->


<!-- blog posts section begins -->
<section class="blog-posts">
  <h5 class="text-center mt-4">Recent Posts</h5>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card-deck owl-carousel">

          <div class="card">
            <div class="card-body">
              <img src="img/hero-image.jpg" alt="">

              <div class="card-footer">
                <p>Post title</p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="img/hero-image.jpg" alt="">

              <div class="card-footer">
                <p>Post title</p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <img src="img/hero-image.jpg" alt="">

              <div class="card-footer">
                <p>Post title</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <img src="img/hero-image.jpg" alt="">

              <div class="card-footer">
                <p>Post title</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- blog posts section ends -->

<?php
require 'footer.php';
?>