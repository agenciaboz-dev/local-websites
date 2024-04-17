<?php
/**
 * Agência Boz Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Agência Boz
 * @since 1.0.0
 */

/**
 * Define Constants
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define( 'CHILD_THEME_AGENCIA_BOZ_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'agencia-boz-theme-css', get_stylesheet_directory_uri() . '/style.css', array('hello-elementor-theme-style'), CHILD_THEME_AGENCIA_BOZ_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
