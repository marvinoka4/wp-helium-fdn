<?php

/**
 * Single Post Content
 *
 * @package helium-fdn
 */
?>
<div class="grid-x">
    <div class="cell">
        <div class="content padding-vertical-4">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer class="entry-footer">
                    <?php if (has_tag()) : ?>
                        <div class="tags-links">
                            <?php the_tags(__('Tagged: ', 'helium-fdn'), ', ', ''); ?>
                        </div>
                    <?php endif; ?>
                </footer>
            </article>
        </div>
    </div>
</div>