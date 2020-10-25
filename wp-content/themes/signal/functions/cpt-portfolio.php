<?php

// Register Custom Post Type
function register_portfolio_custom_post_type() {

	$labels = array(
		'name'                  => 'Portfolio',
		'singular_name'         => 'Portfolio Project',
		'menu_name'             => 'Portfolio',
		'name_admin_bar'        => 'Portfolio',
		'archives'              => 'Portfolio',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Projects',
		'add_new_item'          => 'Add New Project',
		'add_new'               => 'Add Project',
		'new_item'              => 'New Project',
		'edit_item'             => 'Edit Project',
		'update_item'           => 'Update Project',
		'view_item'             => 'View Project',
		'view_items'            => 'View Projects',
		'search_items'          => 'Search Projects',
		'not_found'             => 'No portfolio projects found',
		'not_found_in_trash'    => 'No portfolio projects found in Trash',
	);
	$args = array(
		'label'                 => 'Portfolio',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
    'public'                => true,
    'capability_type'       => 'post',
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false, // change to true if client wants dynamic archive of all projects by date instead of a manually composed Portfolio page
		'show_in_rest'          => true,
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'register_portfolio_custom_post_type', 0 );

$portfolio_categories_taxonomy_args = array(
	'label' => __( 'Portfolio Categories' ),
	'labels' => array(
		'singular_name' => __( 'Portfolio Category' ),
	),
	'public' => true,
	'hierarchical' => true,
	'show_in_nav_menus' => true,
	'show_in_rest' => true,
	'show_admin_column' => true,		
	'rewrite' => array(
		'slug' => 'portfolio/category',
		'with_front' => false,
	),
);
register_taxonomy( 'ct_portfolio_category', 'portfolio', $portfolio_categories_taxonomy_args );

// if single-{cpt_name}.php won't load even after visiting Permalinks in admin, this shuld do it:
// function theme_prefix_rewrite_flush() {
//   flush_rewrite_rules();
// }
// add_action( 'after_switch_theme', 'theme_prefix_rewrite_flush' ); 