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


// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '/...';
}
add_filter('excerpt_more', 'new_excerpt_more');
