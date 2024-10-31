<?php

//======================================================================
// REGISTER PORTFOLIO CPT
//======================================================================

function pigeon_project_cpt() {

	$labels = array(
		'name' => __( 'Projects', 'Post Type General Name', 'portfolio' ),
		'singular_name' => __( 'Project', 'Post Type Singular Name', 'portfolio' ),
		'menu_name' => __( 'Projects', 'portfolio' ),
		'name_admin_bar' => __( 'Project', 'portfolio' ),
		'archives' => __( 'Project Archives', 'portfolio' ),
		'attributes' => __( 'Project Attributes', 'portfolio' ),
		'parent_item_colon' => __( 'Parent Project:', 'portfolio' ),
		'all_items' => __( 'All Projects', 'portfolio' ),
		'add_new_item' => __( 'Add New Project', 'portfolio' ),
		'add_new' => __( 'Add New', 'portfolio' ),
		'new_item' => __( 'New Project', 'portfolio' ),
		'edit_item' => __( 'Edit Project', 'portfolio' ),
		'update_item' => __( 'Update Project', 'portfolio' ),
		'view_item' => __( 'View Project', 'portfolio' ),
		'view_items' => __( 'View Projects', 'portfolio' ),
		'search_items' => __( 'Search Project', 'portfolio' ),
		'not_found' => __( 'Not found', 'portfolio' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'portfolio' ),
		'featured_image' => __( 'Featured Image', 'portfolio' ),
		'set_featured_image' => __( 'Set featured image', 'portfolio' ),
		'remove_featured_image' => __( 'Remove featured image', 'portfolio' ),
		'use_featured_image' => __( 'Use as featured image', 'portfolio' ),
		'insert_into_item' => __( 'Insert into Project', 'portfolio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'portfolio' ),
		'items_list' => __( 'Projects list', 'portfolio' ),
		'items_list_navigation' => __( 'Projects list navigation', 'portfolio' ),
		'filter_items_list' => __( 'Filter Projects list', 'portfolio' ),
	);
	$args = array(
		'label' => __( 'Project', 'portfolio' ),
		'description' => __( 'Registers custom post type', 'portfolio' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'post-formats', ),
		'taxonomies' => array('projecttype', ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'project', $args );
	flush_rewrite_rules();

}

	add_action( 'init', 'pigeon_project_cpt', 0 );

//======================================================================
// REGISTER PORTFOLIO TAXONOMIES
//======================================================================

//------------------------------------------------------------
// Categories
//------------------------------------------------------------

function pigeon_projecttype_tax() {

	$labels = array(
		'name'              => _x( 'Project Types', 'taxonomy general name', 'portfolio-project-types' ),
		'singular_name'     => _x( 'Project Type', 'taxonomy singular name', 'portfolio-project-types' ),
		'search_items'      => __( 'Search Project Types', 'portfolio-project-types' ),
		'all_items'         => __( 'All Project Types', 'portfolio-project-types' ),
		'parent_item'       => __( 'Parent Project Type', 'portfolio-project-types' ),
		'parent_item_colon' => __( 'Parent Project Type:', 'portfolio-project-types' ),
		'edit_item'         => __( 'Edit Project Type', 'portfolio-project-types' ),
		'update_item'       => __( 'Update Project Type', 'portfolio-project-types' ),
		'add_new_item'      => __( 'Add New Project Type', 'portfolio-project-types' ),
		'new_item_name'     => __( 'New Project Type Name', 'portfolio-project-types' ),
		'menu_name'         => __( 'Project Types', 'portfolio-project-types' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Used for Projects', 'portfolio-project-types' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'projecttype', array('project', ), $args );

}
add_action( 'init', 'pigeon_projecttype_tax' );

//------------------------------------------------------------
// Tags
//------------------------------------------------------------

function pigeon_projecttag_tax() {

	$labels = array(
		'name'              => _x( 'Project Tags', 'taxonomy general name', 'portfolio-project-tags' ),
		'singular_name'     => _x( 'Project Tag', 'taxonomy singular name', 'portfolio-project-tags' ),
		'search_items'      => __( 'Search Project Tags', 'portfolio-project-tags' ),
		'all_items'         => __( 'All Project Tags', 'portfolio-project-tags' ),
		'parent_item'       => __( 'Parent Project Tag', 'portfolio-project-tags' ),
		'parent_item_colon' => __( 'Parent Project Tag:', 'portfolio-project-tags' ),
		'edit_item'         => __( 'Edit Project Tag', 'portfolio-project-tags' ),
		'update_item'       => __( 'Update Project Tag', 'portfolio-project-tags' ),
		'add_new_item'      => __( 'Add New Project Tag', 'portfolio-project-tags' ),
		'new_item_name'     => __( 'New Project Tag Name', 'portfolio-project-tags' ),
		'menu_name'         => __( 'Project Tags', 'portfolio-project-tags' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Used for Projects', 'portfolio-project-tags' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'projecttag', array('project', ), $args );

}
add_action( 'init', 'pigeon_projecttag_tax' );
