<!-- This is the content of the post -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h4 class="post_title mt-4"><a href="<?php echo esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h4>
    <?php if (!is_front_page()) { ?>
        <p class="posted_details">
            <b>Posted in</b> <span> <?php echo get_the_date(); ?> </span> by <?php the_author_posts_link(); ?>
        </p>
    <?php
    }
    ?>

    <?php

    $args = array(
        'post-type' => 'page'
    );

    $query = new WP_Query($args);
    if (!$query) {
    ?>
        <p class="cat"> <?php the_category(', '); ?></p>
    <?php
    } else if (is_front_page() || is_home() || is_archive()) { ?>
        <p class="cat"><?php the_category(', '); ?></p>
    <?php
    }

    if (has_post_thumbnail()) the_post_thumbnail('thumbnail');
    ?>

    <p class="content"><?php the_excerpt(); ?></p>



</article>