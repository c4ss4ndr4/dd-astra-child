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

// Enqueue child theme styles
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'astra-child', get_stylesheet_uri(), array( 'astra-theme-css' ), '1.0' );
});

// Gutenberg editor palette
add_action( 'after_setup_theme', function () {
	add_theme_support( 'editor-color-palette', array(
		array( 'name' => 'Brand',       'slug' => 'brand',       'color' => '#00A0DF' ),
		array( 'name' => 'Alt Brand',   'slug' => 'alt-brand',   'color' => '#EF4DAE' ),
		array( 'name' => 'Heading',     'slug' => 'heading',     'color' => '#1A1A1A' ),
		array( 'name' => 'Text',        'slug' => 'text',        'color' => '#333333' ),
		array( 'name' => 'Primary',     'slug' => 'primary',     'color' => '#0074A3' ),
		array( 'name' => 'Secondary',   'slug' => 'secondary',   'color' => '#5E6A71' ),
		array( 'name' => 'Border',      'slug' => 'border',      'color' => '#E2E8F0' ),
		array( 'name' => 'Subtle BG',   'slug' => 'subtle-bg',   'color' => '#F7FAFC' ),
		array( 'name' => 'Extra',       'slug' => 'extra',       'color' => '#0E1A20' ),
	) );
} );

/**
 * Add Daydream Project CSS Variables
 */
function dd_daydream_css_variables() {
    ?>
    <style type="text/css">
        :root {
            /* Daydream Project Brand Colors */
            --brand: #00A0DF;
            --alt-brand: #EF4DAE;
            --heading: #1A1A1A;
            --text: #333333;
            --primary: #0074A3;
            --secondary: #5E6A71;
            --border: #E2E8F0;
            --subtle-bg: #F7FAFC;
            --extra: #0E1A20;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'dd_daydream_css_variables' );
