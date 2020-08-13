<!-- This is the content of the post -->
<article id="post-<?php the_ID(); ?> single-post" <?php post_class(); ?>>
    <h4 class="post_title mt-4"><?php the_title(); ?></h4>
    <?php
    if (!is_page()) {
    ?>

        <p class="posted_details">
            <b>Posted in</b> <span> <?php echo get_the_date(); ?> </span> by <?php the_author_posts_link(); ?>
        </p>
    <?php
    }
    ?>
    <p class="content"><?php the_content(); ?></p>

    <?php

    if (has_post_thumbnail())
        the_post_thumbnail('thumbnail'); ?>

    <p class="cat"> <span> Categories: </span><?php the_category(', '); ?></p>
</article>