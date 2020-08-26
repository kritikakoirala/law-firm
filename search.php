<?php

/**
 * The template for displaying search results pages
 *
 *
 */

get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">

      <header class="search-header">
        <?php if (have_posts()) : ?>
          <h1 class="page-title">
            <?php
            /* translators: Search query. */
            printf(__('Search Results for: %s', 'kriti_law_firm'), '<span>' . get_search_query() . '</span>');
            ?>
          </h1>
        <?php else : ?>
          <h1 class="page-title"><?php _e('Nothing Found', 'kriti_law_firm'); ?></h1>


          <?php
          get_search_form();
          ?>
          <!-- Search Pagination -->

        <?php endif;
        ?>
      </header><!-- .page-header -->
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="search-posts">
        <div class="container">
          <div class="row">
            <?php
            if (have_posts()) :
              // Start the Loop.
              while (have_posts()) :
                the_post();

                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */ ?>

                <div class="col-lg-4 col-md-4 col-sm-6">
                  <?php
                  get_template_part('template-parts/content', 'search'); ?>
                </div>



              <?php

              endwhile; // End the loop.

              the_posts_pagination(
                array(
                  'prev_text'          => '<span class="screen-reader-text">' . __('Previous page', 'kriti_law_firm') . '</span>',
                  'next_text'          => '<span class="screen-reader-text">' . __('Next page', 'kriti_law_firm') . '</span>',
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'kriti_law_firm') . ' </span>',
                )
              );

            else :
              ?>

              <p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'kriti_law_firm'); ?></p>
            <?php

            endif;
            get_search_form();
            ?>
          </div>
        </div>

      </div>
    </div>


  </div>
</div>

<?php
get_footer();
