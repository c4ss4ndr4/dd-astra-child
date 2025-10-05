<?php
/**
 * DD Astra Child Theme Functions
 *
 * @package DD_Astra_Child
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue parent theme styles
 */
function dd_daydream_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style( 'astra-parent-style', get_template_directory_uri() . '/style.css' );
    
    // Enqueue child theme style
    wp_enqueue_style( 'dd-astra-child-style', 
        get_stylesheet_directory_uri() . '/style.css',
        array( 'astra-parent-style' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'dd_daydream_enqueue_styles' );

/**
 * Add Daydream Project custom colors to Gutenberg editor
 */
function dd_daydream_gutenberg_colors() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'Daydream Blue', 'dd-astra-child' ),
            'slug'  => 'daydream-blue',
            'color' => '#00A0DF',
        ),
        array(
            'name'  => __( 'Daydream Dark Blue', 'dd-astra-child' ),
            'slug'  => 'daydream-dark-blue',
            'color' => '#0074A3',
        ),
        array(
            'name'  => __( 'Daydream Magenta', 'dd-astra-child' ),
            'slug'  => 'daydream-magenta',
            'color' => '#EF4DAE',
        ),
        array(
            'name'  => __( 'Daydream Heading', 'dd-astra-child' ),
            'slug'  => 'daydream-heading',
            'color' => '#1A1A1A',
        ),
        array(
            'name'  => __( 'Daydream Text', 'dd-astra-child' ),
            'slug'  => 'daydream-text',
            'color' => '#333333',
        ),
        array(
            'name'  => __( 'Daydream Secondary', 'dd-astra-child' ),
            'slug'  => 'daydream-secondary',
            'color' => '#5E6A71',
        ),
        array(
            'name'  => __( 'Daydream Border', 'dd-astra-child' ),
            'slug'  => 'daydream-border',
            'color' => '#E2E8F0',
        ),
        array(
            'name'  => __( 'Daydream Background', 'dd-astra-child' ),
            'slug'  => 'daydream-bg',
            'color' => '#F7FAFC',
        ),
    ) );
}
add_action( 'after_setup_theme', 'dd_daydream_gutenberg_colors' );

/**
 * Add Daydream Project CSS Variables
 */
function dd_daydream_css_variables() {
    ?>
    <style type="text/css">
        :root {
            /* Daydream Project Brand Colors */
            --daydream-blue: #00A0DF;
            --daydream-dark-blue: #0074A3;
            --daydream-magenta: #EF4DAE;
            --daydream-heading: #1A1A1A;
            --daydream-text: #333333;
            --daydream-secondary: #5E6A71;
            --daydream-border: #E2E8F0;
            --daydream-bg: #F7FAFC;
            --daydream-extra: #0E1A20;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'dd_daydream_css_variables' );
