<!-- This is the content of the post -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if (has_post_thumbnail()) the_post_thumbnail('search-thumbnail'); ?>
    <h4 class="post_title mt-4"><a href="<?php echo esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h4>

    <?php
    $postType = get_post_type();
    if ($postType == 'post') { ?>
        <p class="posted_details">
            <b>Posted in</b> <span> <?php echo get_the_date(); ?> </span> by <?php the_author_posts_link(); ?>
        </p>
        <p class="cat"> <span> Categories: </span><?php the_category(', '); ?></p>
    <?php
    }
    ?>
    <p class="content"><?php the_excerpt(); ?></p>
</article>