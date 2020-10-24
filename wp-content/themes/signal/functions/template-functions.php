<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package signal
 */

 
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function signal_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
		$classes[] = 'archive-view';
	}
	
	// Add a class telling us if the sidebar is in use.
	// Adapt conditions to exclude certain pages (which do not call for the sidebar template part) from getting unwanted sidebar css rules:
		if ( is_active_sidebar( 'sidebar-1' ) && ! is_page( ['home', 'contact'] ) ) {
		$classes[] = 'has-sidebar';
	} else {
		$classes[] = 'no-sidebar';
	}

	// Add a class telling us if the footer widget area is in use.
	if ( is_active_sidebar( 'footer-2' ) ) {
		$classes[] = 'has-footer-sidebar';
	}
	
	return $classes;
}
add_filter( 'body_class', 'signal_body_classes' );


/*
// Add classes to the navigation submenus to designate the submenu level
*/
function add_submenu_level_classes( $classes, $args, $depth ) {
	if ( 0 == $depth ) {
			$classes[] = 'level-1';
	}
	if ( 1 == $depth ) {
			$classes[] = 'level-2';
	}
	// ...
	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'add_submenu_level_classes', 10, 3 );


/**
 * Post summary excerpts
 */
// Change excerpt length
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Remove automatic 'read more' link because it doesn't display when a custom excerpt has been added in editor. I'll add my own in the summary template.
function remove_excerpt_more($more) {
	global $post;
	return;
}
add_filter('excerpt_more', 'remove_excerpt_more');

/**
 * Search form - footer product search
 */
// LIMIT SEARCH TO PRODUCTS ONLY
// function signal_search_filter($query) {
// 	if ( !is_admin() && $query->is_search ) {
// 	$query->set('post_type', 'product');
// 	}
// 	return $query;
// }	
