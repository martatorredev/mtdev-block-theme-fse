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
