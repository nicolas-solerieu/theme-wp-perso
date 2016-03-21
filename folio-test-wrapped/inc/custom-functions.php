<?php
/**
 * Custom functions
 */


/**
 * Thumbnails support
 */
add_theme_support( 'post-thumbnails' );

/**
 * Excerpt support
 */
add_post_type_support('page', 'excerpt');

/**
 * Excerpt edit
 */
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
