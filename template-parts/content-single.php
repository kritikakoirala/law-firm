<!-- This is the content of the post -->
<article id="post-<?php the_ID(); ?> single-post" <?php post_class(); ?>>
    <h4 class="post_title mt-4"><?php the_title(); ?></h4>
    <?php
    if (!is_page()) {
    ?>

        <p class="posted_details">
            <b><?php esc_html_e('Posted in', 'kriti_law_firm'); ?></b> <span> <?php echo get_the_date(); ?> </span><?php esc_html_e('by', 'kriti_law_firm'); ?> <?php the_author_posts_link(); ?>
        </p>
    <?php
    }
    ?>
    <p class="cat"><?php the_category(', '); ?></p>
    <p class="content"><?php the_content(); ?></p>

    <?php

    if (has_post_thumbnail())
        the_post_thumbnail('thumbnail');


    ?>

    <!-- <div class="post-comments">
        <a href="<?php comments_link(); ?>"><?php comments_number(0, 1, '%'); ?></a>
    </div> -->

</article>