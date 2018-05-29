<?php
/**
 * Child theme functions.
 *
 * @link https://codex.wordpress.org/Child_Themes
 *
 * @author Cami Mostajo
 * @license MIT
 * @version 1.0.0
 */

/**
 * Following hook will load parent theme (Twenty Seventeen) CSS styles.
 * @since 1.0.0
 */
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
} );

// ----------------------------------------------------------
//
// POST GALLERY HOOKS AND CUSTOMIZATION
//
// ----------------------------------------------------------

/**
 * Enqueues lightgallery lightbox.
 * @since 1.0.0
 *
 * @hook post_gallery_enqueue
 */
add_action( 'post_gallery_enqueue', function() {
    // CSS
    wp_enqueue_style(
        'lightgallery', // Name / slug
        get_stylesheet_directory_uri() . '/node_modules/lightgallery/dist/css/lightgallery.min.css', // File location
        [], // Dependency
        '1.6.11' // Version
    );
    // js
    wp_enqueue_script(
        'lightgallery', // Name / slug
        get_stylesheet_directory_uri() . '/node_modules/lightgallery/dist/js/lightgallery-all.min.js', // File location
        ['jquery'], // Dependency
        '1.6.11' // Version
    );
    wp_enqueue_script(
        'lightbox-init', // Name / slug
        get_stylesheet_directory_uri() . '/js/lightbox-init.js', // File location
        ['lightgallery'], // Dependency
        '1.0.0' // Version
    );
} );