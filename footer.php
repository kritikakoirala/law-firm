<?php

/**
 * This page shows the footer of the website
 */

/* Get all the required theme mod options */

// Contact Details widget
$contact_widget_title = get_theme_mod('contact_widget_title');
$contact_number = get_theme_mod('phone_number');
$email = get_theme_mod('email');
$address = get_theme_mod('address');

// Opening Hours widget
$opening_hours_title = get_theme_mod('opening_hours_title');
$opening_time = get_theme_mod('opening_time');
$opening_day = get_theme_mod('opening_day');

// Footer Bottom
$copyright_message = get_theme_mod('copyright_message');
?>

<!-- footer section -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="widget widget_1">
					<div class="contact_info">
						<h5><?php echo $contact_widget_title; ?></h5>
						<ul class="list-group">
							<li class="list-group-item"><i class="fa fa-phone"></i> <?php echo $contact_number; ?></li>
							<li class="list-group-item"><i class="fa fa-envelope"></i> <?php echo $email; ?></li>
							<li class="list-group-item"><?php echo $address; ?></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="widget widget_2">
					<div class="footer_menu">
						<h5>Recent Posts</h5>
						<!-- main-nav begins -->
						<nav class="navbar navbar-expand-md mobile-menu">
							<!-- Links -->
							<?php wp_nav_menu(array(
								'theme_location' => 'kriti_law_firm_footer_menu',
								'menu' => 'kriti_law_firm_footer_menu',
								'menu_class' => 'navbar-nav',
								'container' => 'ul',
								'container_class' => 'navbar',
								'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</>'

							)); ?>


						</nav>
						<!-- main-nav ends -->
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="widget widget_3">
					<div class="office_hours">
						<h5><?php echo $opening_hours_title; ?></h5>
						<ul class="list-group">
							<li class="list-group-item"><i class="fa fa-clock-o"></i> <?php echo $opening_time; ?></li>
							<li class="list-group-item"><i class="fa fa-calendar-times-o"></i> <?php echo $opening_day; ?></li>

						</ul>
					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<?php
				if ($copyright_message) {
				?>
					<p class="footer-bottom text-center"><?php echo $copyright_message; ?></p>
				<?php
				} else {
				?>
					<p class="footer-bottom text-center">
						<?php
						esc_html_e('&copy; Copyright', 'kriti_law_firm');
						echo date_i18n(esc_html__('Y', 'kriti_law_firm'));
						echo ' <a href="' . esc_url(home_url('/')) . '">' . esc_html(get_bloginfo('name')) . '</a>. ';
						esc_html_e('All Rights Reserved. ', 'kriti_law_firm');
						?>
					</p>
				<?php
				}

				?>

			</div>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>
</body>

</html>