<?php

/**
 * 
 * This page is for the widgets of the website
 */

if (is_active_sidebar('sidebar')) : ?>

    <aside id="secondary" class="sidebar widget-area" role="complementary">
        <?php dynamic_sidebar('sidebar'); ?>
    </aside><!-- .sidebar .widget-area -->
<?php endif; ?>