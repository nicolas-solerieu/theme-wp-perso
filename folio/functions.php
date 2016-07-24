<?php
/**
 * folio functions and definitions.
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package folio
 */


/**
 * Includes
 */
require get_template_directory() . '/inc/custom-admin.php';
require get_template_directory() . '/inc/custom-theme-options.php';
require get_template_directory() . '/inc/custom-functions.php';
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Enqueue scripts and styles.
 */
function ns_scripts() {

	wp_enqueue_style( 'ns-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ns-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '00001', true );
	wp_enqueue_script( 'ns-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '00001', true );
	wp_enqueue_script( 'ns-typed', get_template_directory_uri() . '/js/typed.js', array(), '00001', true );
	wp_enqueue_script( 'ns-main', get_template_directory_uri() . '/js/main.js', array(), '00001', true );
	wp_enqueue_script('jquery');

}
add_action( 'wp_enqueue_scripts', 'ns_scripts' );