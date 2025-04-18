<?php

/**
 * Theme Support and Setup
 *
 * @package helium-fdn
 */

if (!function_exists('helium_fdn_theme_setup')) {
    function helium_fdn_theme_setup()
    {
        // Translation support
        load_theme_textdomain('helium-fdn', get_template_directory() . '/languages');

        // Other theme support (e.g., post thumbnails, menus)
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support('custom-logo', array(
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ));
        add_theme_support('custom-background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ));
        add_theme_support('custom-header', array(
            'default-image' => '',
            'width' => 1200,
            'height' => 300,
            'flex-height' => true,
        ));
        add_theme_support('responsive-embeds');
        add_theme_support('align-wide');
        add_theme_support('wp-block-styles');

        add_editor_style('editor-style.css');
    }
}
add_action('after_setup_theme', 'helium_fdn_theme_setup');


function helium_fdn_customizer($wp_customize)
{
    $wp_customize->add_setting('layout_style', array(
        'default' => 'default',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_key',
    ));

    $wp_customize->add_control('layout_style', array(
        'label' => __('Layout Style', 'helium-fdn'),
        'section' => 'layout_options',
        'type' => 'select',
        'choices' => array(
            'default' => 'Default',
            'sidebar' => 'Sidebar',
        )
    ));

    $wp_customize->add_section('layout_options', array(
        'title' => __('Layout Options', 'helium-fdn'),
        'priority' => 30,
    ));
}
add_action('customize_register', 'helium_fdn_customizer');


function helium_fdn_widgets_init()
{
    register_sidebar(array(
        'name' => __('Main Sidebar', 'helium-fdn'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'helium-fdn'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'helium_fdn_widgets_init');

// Prevent Direct Template Loading
function helium_fdn_force_page_template($template)
{
    if (is_page() && get_page_template_slug()) {
        $template = locate_template('page.php');
    }
    return $template;
}
add_filter('template_include', 'helium_fdn_force_page_template', 99);
