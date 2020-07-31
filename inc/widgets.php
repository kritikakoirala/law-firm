<?php

/**
 * 
 * This page registers all the sidebar and widgets required in the site
 */

function law_firm_widgets()
{
    //  name the sidebars you want to have

    $sidebars = array(
        'sidebar' => array(
            'name' => __('Sidebar', 'kriti_law_firm'),
            'id' => 'sidebar',
            'description' => __('Default Sidebar', 'kriti_law_firm')
        ),
        'contact_details' => array(
            'name' => __('Contact Details', 'kriti_law_firm'),
            'id' => 'contact_details',
            'description' => __('Contact Details in the footer', 'kriti_law_firm')
        ),
        'office_hours' => array(
            'name' => __('Office Hours', 'krit_law_firm'),
            'id' => 'office_hours',
            'description' => __('Office Hours in the footer', 'kriti_law_firm')
        )
    );

    // register each widget

    foreach ($sidebars as $sidebar) {
        register_sidebar(
            array(
                'name' => $sidebar['name'],
                'id' => $sidebar['id'],
                'description' => $sidebar['description'],
                'before_widget' => '<section id = "%1$s" class ="widget %2$s">',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
                'after_widget' => '</section>',

            )
        );
    }
}
add_action('widgets_init', 'law_firm_widgets');
