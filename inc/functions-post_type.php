<?php

// Register Post Type
function webt_post_type()
{
    // Change variables base on post type you are registering
    // $labels = array(
	// 	'name'               => __( 'Plural Name', 'webt' ),
	// 	'singular_name'      => __( 'Singular Name', 'webt' ),
	// 	'add_new'            => _x( 'Add New Singular Name', 'webt', 'webt' ),
	// 	'add_new_item'       => __( 'Add New Singular Name', 'webt' ),
	// 	'edit_item'          => __( 'Edit Singular Name', 'webt' ),
	// 	'new_item'           => __( 'New Singular Name', 'webt' ),
	// 	'view_item'          => __( 'View Singular Name', 'webt' ),
	// 	'search_items'       => __( 'Search Plural Name', 'webt' ),
	// 	'not_found'          => __( 'No Plural Name found', 'webt' ),
	// 	'not_found_in_trash' => __( 'No Plural Name found in Trash', 'webt' ),
	// 	'parent_item_colon'  => __( 'Parent Singular Name:', 'webt' ),
	// 	'menu_name'          => __( 'Plural Name', 'webt' ),
	// );

	// $args = array(
	// 	'labels'              => $labels,
	// 	'hierarchical'        => false,
	// 	'description'         => 'description',
	// 	'taxonomies'          => array(),
	// 	'public'              => true,
	// 	'show_ui'             => true,
	// 	'show_in_menu'        => true,
	// 	'show_in_admin_bar'   => true,
	// 	'menu_position'       => null,
	// 	'menu_icon'           => null,
	// 	'show_in_nav_menus'   => true,
	// 	'publicly_queryable'  => true,
	// 	'exclude_from_search' => false,
	// 	'has_archive'         => true,
	// 	'query_var'           => true,
	// 	'can_export'          => true,
	// 	'rewrite'             => true,
	// 	'capability_type'     => 'post',
	// 	'supports'            => array(
	// 		'title',
	// 		'editor',
	// 		'author',
	// 		'thumbnail',
	// 		'excerpt',
	// 		'custom-fields',
	// 		'trackbacks',
	// 		'comments',
	// 		'revisions',
	// 		'page-attributes',
	// 		'post-formats',
	// 	),
	// );
	// register_post_type( 'slug', $args );

}
add_action( 'init', 'webt_post_type' );


// Register Taxonomy
function webt_taxonomy()
{
	// Taxonomy
	// $labels = array(
	// 	'name'              => _x( 'Plural Name', 'taxonomy general name', 'webt' ),
	// 	'singular_name'     => _x( 'Singular Name', 'taxonomy singular name', 'webt' ),
	// 	'search_items'      => __( 'Search Plural Name', 'webt' ),
	// 	'all_items'         => __( 'All Plural Name', 'webt' ),
	// 	'parent_item'       => __( 'Parent Singular Name', 'webt' ),
	// 	'parent_item_colon' => __( 'Parent Singular Name:', 'webt' ),
	// 	'edit_item'         => __( 'Edit Singular Name', 'webt' ),
	// 	'update_item'       => __( 'Update Singular Name', 'webt' ),
	// 	'add_new_item'      => __( 'Add New Singular Name', 'webt' ),
	// 	'new_item_name'     => __( 'New Singular Name Name', 'webt' ),
	// 	'menu_name'         => __( 'Singular Name', 'webt' ),
	// );

	// $args = array(
	// 	'hierarchical'      => true,
	// 	'labels'            => $labels,
	// 	'show_ui'           => true,
	// 	'show_admin_column' => true,
	// 	'query_var'         => true,
	// 	'rewrite'           => array( 'slug' => 'cat-slug' ),
	// );

	// register_taxonomy( 'cat-slug', array( 'post_type-slug' ), $args );

}
add_action( 'init', 'webt_taxonomy');