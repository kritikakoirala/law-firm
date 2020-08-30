<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
  return;
}
?>

<div id="comments" class="comments-area">

  <div class="comments-wrap">

    <?php
    if (have_comments()) :
    ?>
      <h4 class="comments-title">
        <?php
        $comments_number = get_comments_number();
        if ('1' === $comments_number) {
          /* translators: %s: Post title. */
          printf(_x('Comment On &ldquo;%s&rdquo;', 'comments title', 'kriti_law_firm'), get_the_title());
        } else {
          printf(
            /* translators: 1: Number of comments, 2: Post title. */
            _nx(
              '%1$s Comments on &ldquo;%2$s&rdquo;',
              '%1$s Comments on &ldquo;%2$s&rdquo;',
              $comments_number,
              'comments title',
              'kriti_law_firm'
            ),
            number_format_i18n($comments_number),
            get_the_title()
          );
        }
        ?>
      </h4>

      <ol class="comment-list">
        <?php
        wp_list_comments(
          array(
            'avatar_size' => 100,
            'style'       => 'ol',
            'short_ping'  => true,
            'reply_text'  =>  __('Reply', 'kriti_law_firm'),
          )
        );
        ?>
      </ol>

    <?php
      the_comments_pagination(
        array(
          'prev_text' => '<span class="screen-reader-text">' . __('Previous', 'kriti_law_firm') . '</span>',
          'next_text' => '<span class="screen-reader-text">' . __('Next', 'kriti_law_firm') . '</span>',
        )
      );

    endif; // Check for have_comments().

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
    ?>

      <p class="no-comments"><?php _e('Comments are closed.', 'kriti_law_firm'); ?></p>
    <?php
    endif;

    comment_form();
    ?>
  </div>
  <!-- #comment-wrap-->

</div><!-- #comments -->