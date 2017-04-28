<?php

/*
 * 
 * Standard set up for a custom post type.
 * Change the 'xpand_posts' for the name of the post type, i.e job
 * then change the singular and plural names.
 *
 * If you need additional parameters, check the WordPress documentation
 */

add_action('init', 'xpand_posts');

function xpand_posts() {
	
	$singular = 'Post';
	
	$plural = 'Posts';
	
	$labels = array(
		'name' 					=> _x($plural, 'post type general name', 'starter'),
		'singular-name' 		=> _x($singular, 'post type singular name', 'starter'),
		'menu_name' 			=> _x($plural, 'admin menu', 'starter'),
		'name_admin_bar' 		=> _x($singular, 'add new on admin bar', 'starter'),
		'add_new' 				=> _x('Add New', $singular, 'starter'),
		'add_new_item' 			=> __('Add New ' . $singular, 'starter'),
		'new_item' 				=> __('New ' . $singular, 'starter'),
		'edit_item' 			=> __('Edit ' . $singular, 'starter'),
		'view_item' 			=> __('View ' . $singular, 'starter'),
		'all_item' 				=> __('All ' . $plural, 'starter'),
		'search_items' 			=> __('Search ' . $singular, 'starter'),
		'parent_item_colon' 	=> __('Parent ' .  $singular . ':', 'starter'),
		'not_found' 			=> __('No ' . $plural . ' found', 'starter'),
		'not_found_in_trash'	=> __( 'No ' . $plural . ' found in Trash.', 'starter' )
	);
	
	$args = array(
		'labels' 		     => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'change_slug_here', 'with_front' => false ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 15,
		'menu_icon' 		 		 => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	
	register_post_type('name_of_post_type', $args);
}
