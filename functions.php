<?php
// Theme setup
function mtdev_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-spacing');
    add_theme_support('custom-line-height');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'mtdev_theme_setup');

// Enqueue styles and fonts
function mtdev_enqueue_styles() {
    // Enqueue theme stylesheet
    wp_enqueue_style('mtdev-style', get_stylesheet_uri());

    // Enqueue Google Fonts
    wp_enqueue_style('mtdev-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap', false);
}
add_action('wp_enqueue_scripts', 'mtdev_enqueue_styles');

// Register navigation menu
function mtdev_register_menus() {
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'mtdev-block-theme-fse')
        )
    );
}
add_action('after_setup_theme', 'mtdev_register_menus');


