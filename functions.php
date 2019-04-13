<?php
// Child theme functions
function wooalign_enqueue_scripts() {
    // Enqueue a style sheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue the wooalign-public.js for Woo Align Buttons
    wp_enqueue_script( 'woo-align-buttons', get_stylesheet_directory_uri() . '/js/wooalign-public.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wooalign_enqueue_scripts' );
