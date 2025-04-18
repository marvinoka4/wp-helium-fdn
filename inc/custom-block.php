<?php

function helium_fdn_register_block_patterns()
{
    register_block_pattern(
        'helium-fdn/content-section',
        array(
            'title' => __('Content Section', 'helium-fdn'),
            'description' => __('A styled content section with heading, paragraph, and button.', 'helium-fdn'),
            'content' => '<!-- wp:group {"className":"padding-vertical-4"} -->
                <div class="wp-block-group padding-vertical-4">
                    <!-- wp:heading -->
                    <h2>Welcome to Helium-Fdn</h2>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>This is a sample content section styled with Helium-Fdn spacing utilities.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->',
            'categories' => array('text'),
        )
    );
}
add_action('init', 'helium_fdn_register_block_patterns');


function helium_fdn_register_block_styles()
{
    register_block_style(
        'core/button',
        array(
            'name' => 'helium-fdn-primary',
            'label' => __('Helium-Fdn Primary', 'helium-fdn'),
            'inline_style' => '.wp-block-button.is-style-helium-fdn-primary .wp-block-button__link { background-color: #1779ba; color: #fff; }',
        )
    );
}
add_action('init', 'helium_fdn_register_block_styles');
