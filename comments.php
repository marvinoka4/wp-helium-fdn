<?php

/**
 * The template for displaying comments
 *
 * @package helium-fdn
 */
if (post_password_required()) {
    return;
}
?>

<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div id="comments" class="comments-area">
            <?php if (have_comments()) : ?>
                <h2 class="comments-title">
                    <?php
                    printf(
                        esc_html(_nx('One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'helium-fdn')),
                        number_format_i18n(get_comments_number()),
                        '<span>' . get_the_title() . '</span>'
                    );
                    ?>
                </h2>

                <?php the_comments_navigation(); ?>

                <ol class="comment-list">
                    <?php
                    wp_list_comments(array(
                        'style' => 'ol',
                        'short_ping' => true,
                        'avatar_size' => 50,
                    ));
                    ?>
                </ol>

                <?php the_comments_navigation(); ?>

            <?php endif; ?>

            <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
                <p class="no-comments"><?php esc_html_e('Comments are closed.', 'helium-fdn'); ?></p>
            <?php endif; ?>

            <?php
            comment_form(array(
                'title_reply' => __('Leave a Comment', 'helium-fdn'),
                'class_submit' => 'button',
            ));
            ?>
        </div>
    </div>
</div>