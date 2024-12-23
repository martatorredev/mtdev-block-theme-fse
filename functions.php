<?php
// Theme setup
if ( ! function_exists( 'mtdev_theme_setup' ) ) {
    function mtdev_theme_setup() {
        // Enable support for block templates
        add_theme_support( 'block-templates' );

        // Add support for editor styles
        add_theme_support( 'editor-styles' );
        add_editor_style( 'style.css' );
    }
}
add_action( 'after_setup_theme', 'mtdev_theme_setup' );
function mtdev_enqueue_styles() {
    wp_enqueue_style(
        'mtdev-google-fonts',
        'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&display=swap',
        array(),
        null
    );
    wp_enqueue_style('mtdev-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mtdev_enqueue_styles');
