<?php
function mtdev_enqueue_styles() {
    wp_enqueue_style(
        'mtdev-google-fonts',
        'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Red+Hat+Display:wght@400;500;700&display=swap',
        array(),
        null
    );
    wp_enqueue_style('mtdev-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mtdev_enqueue_styles');

