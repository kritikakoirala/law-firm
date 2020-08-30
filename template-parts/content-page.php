<!-- This is the content of the post -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h4 class="post_title mt-4"><?php the_title(); ?></h4>
    <p class="posted_details">
        <b><?php esc_html_e('Posted in', 'kriti_law_firm'); ?></b> <span> <?php echo get_the_date(); ?> </span><?php esc_html_e('by', 'kriti_law_firm'); ?> <?php the_author_posts_link(); ?>
    </p>
    <?php

    if (has_post_thumbnail())
        the_post_thumbnail('thumbnail'); ?>
    <p class="content"><?php the_content(); ?></p>
</article>