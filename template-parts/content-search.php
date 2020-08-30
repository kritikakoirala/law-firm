<!-- This is the content of the post -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if (has_post_thumbnail()) the_post_thumbnail('search-thumbnail'); ?>
    <h4 class="post_title mt-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

    <?php
    $postType = get_post_type();
    if ($postType == 'post') { ?>
        <p class="posted_details">
            <b><?php esc_html_e('Posted in', 'kriti_law_firm'); ?></b> <span> <?php echo get_the_date(); ?> </span><?php esc_html_e('by', 'kriti_law_firm'); ?> <?php the_author_posts_link(); ?>
        </p>
        <p class="cat"><?php the_category(', '); ?></p>
    <?php
    }
    ?>
    <p class="content"><?php the_excerpt(); ?></p>
</article>