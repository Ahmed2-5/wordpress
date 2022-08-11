<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package beorx
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function beorx_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'beorx_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function beorx_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'beorx_pingback_header' );


/**
 * Add span tag in archive list count number
 */
function beorx_add_span_archive_count($links) {
	$links = str_replace('</a>&nbsp;(', '</a> <span class="post-count-number">(', $links);
	$links = str_replace(')', ')</span>', $links);
	return $links;
}

add_filter('get_archives_link', 'beorx_add_span_archive_count');


/**
 * Add span tag in category list count number
 */

function beorx_add_span_category_count($links) {
	$links = str_replace('</a> (', '</a> <span class="post-count-number">(', $links);
	$links = str_replace(')', ')</span>', $links);
	return $links;
}

add_filter('wp_list_categories', 'beorx_add_span_category_count');
