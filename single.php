<?php

/**
 * The single post template file
 *
 * @package helium-fdn
 */
get_header(); ?>
<?php
while (have_posts()) :
    the_post();
    get_template_part('template-parts/layouts/layout', 'default');
    wp_link_pages(array(
        'before' => '<div class="page-links">' . esc_html__('Pages:', 'helium-fdn'),
        'after'  => '</div>',
    ));
    if (comments_open() || get_comments_number()) :
        comments_template();
    endif;
endwhile;
?>
<?php get_footer(); ?>