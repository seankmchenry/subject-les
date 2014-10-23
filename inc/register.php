<?php
/**
 * Register post types and taxonomies
 *
 * @package _s
 */

/* Slides */
function _s_register_cpt_slides() {
	$labels = array(
		'name'					=> _x( 'Slides', 'post type general name', '_s' ),
		'singular_name'			=> _x( 'Slide', 'post type singular name', '_s' ),
		'menu_name'				=> _x( 'Slides', 'admin menu', '_s' ),
		'name_admin_bar'		=> _x( 'Slide', 'add new on admin bar', '_s' ),
		'add_new'				=> _x( 'Add New', 'slide', '_s' ),
		'add_new_item'			=> __( 'Add New Slide', '_s' ),
		'new_item'				=> __( 'New Slide', '_s' ),
		'edit_item'				=> __( 'Edit Slide', '_s' ),
		'view_item'				=> __( 'View Slide', '_s' ),
		'all_items'				=> __( 'All Slides', '_s' ),
		'search_items'			=> __( 'Search Slides', '_s' ),
		'parent_item_colon'		=> __( 'Parent Slides:', '_s' ),
		'not_found'				=> __( 'No Slides found.', '_s' ),
		'not_found_in_trash'	=> __( 'No Slides found in Trash.', '_s' )
	);
	$args = array(
		'labels'				=> $labels,
		'public'				=> true,
		'publicly_queryable'	=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'query_var'				=> true,
		'rewrite'				=> false,
		'capability_type'		=> 'post',
		'has_archive'			=> false,
		'hierarchical'			=> false,
		'menu_position'			=> null,
		'supports'				=> array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'			=> array(),
	);
	register_post_type( 'slide', $args );
}
add_action( 'init', '_s_register_cpt_slides' );

/* Slide Categories *//*
function _s_register_tax_slides() {
	$labels = array(
		'name'				=> _x( 'Slide Categories', 'taxonomy general name' ),
		'singular_name'		=> _x( 'Slide Category', 'taxonomy singular name' ),
		'search_items'		=> __( 'Search Slide Categories' ),
		'all_items'			=> __( 'All Slide Categories' ),
		'parent_item'		=> __( 'Parent Slide Category' ),
		'parent_item_colon'	=> __( 'Parent Slide Category:' ),
		'edit_item'			=> __( 'Edit Slide Category' ),
		'update_item'		=> __( 'Update Slide Category' ),
		'add_new_item'		=> __( 'Add New Slide Category' ),
		'new_item_name'		=> __( 'New Slide Category Name' ),
		'menu_name'			=> __( 'Slide Categories' ),
	);
	$args = array(
		'hierarchical'		=> true,
		'labels'			=> $labels,
		'show_ui'			=> true,
		'show_admin_column'	=> true,
		'query_var'			=> true,
		'rewrite'			=> array( 'slug' => 'slide-category' ),
	);
	register_taxonomy( 'slide_category', array( 'slide' ), $args );
}
add_action( 'init', '_s_register_tax_slides' ); */