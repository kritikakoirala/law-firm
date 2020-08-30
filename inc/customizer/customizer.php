<?php

/**
 * This page includes all the custom controls on the site
 */


/* ================== Include the sanitization page ==================== */
require get_template_directory() . '/inc/customizer/sanitization.php';

/* ================== Include all the panels first ==================== */

require get_template_directory() . '/inc/customizer/panels/footer.php';
require get_template_directory() . '/inc/customizer/panels/front_page.php';
require get_template_directory() . '/inc/customizer/panels/about_page.php';
require get_template_directory() . '/inc/customizer/panels/contact_page.php';
require get_template_directory() . '/inc/customizer/panels/general_settings.php';


/* ================== Include the sections ==================== */

// Footer Sections
require get_template_directory() . '/inc/customizer/footer-sections/contact_details.php';
require get_template_directory() . '/inc/customizer/footer-sections/opening_hours.php';
require get_template_directory() . '/inc/customizer/footer-sections/footer_bottom.php';

// Front Page sections
require get_template_directory() . '/inc/customizer/front-page-sections/top_header.php';
require get_template_directory() . '/inc/customizer/front-page-sections/banner.php';
require get_template_directory() . '/inc/customizer/front-page-sections/about.php';
require get_template_directory() . '/inc/customizer/front-page-sections/areas_of_practice.php';
require get_template_directory() . '/inc/customizer/front-page-sections/blog_posts.php';

// About Page Sections
require get_template_directory() . '/inc/customizer/about_page_sections.php';

// Contact Page Sections
require get_template_directory() . '/inc/customizer/contact_page_sections.php';

require get_template_directory() . '/inc/customizer/general-setting-section/posts_and_page_section.php';
