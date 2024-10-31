<?php

//======================================================================
// REGISTER CASE STUDIES CPT
//======================================================================

function pigeon_casestudy_cpt() {

	$labels = array(
		'name' => __( 'Case Studies', 'Post Type General Name', 'case-studies' ),
		'singular_name' => __( 'Case Study', 'Post Type Singular Name', 'case-studies' ),
		'menu_name' => __( 'Case Studies', 'case-studies' ),
		'name_admin_bar' => __( 'Case Study', 'case-studies' ),
		'archives' => __( 'Case Study Archives', 'case-studies' ),
		'attributes' => __( 'Case Study Attributes', 'case-studies' ),
		'parent_item_colon' => __( 'Parent Case Study:', 'case-studies' ),
		'all_items' => __( 'All Case Studies', 'case-studies' ),
		'add_new_item' => __( 'Add New Case Study', 'case-studies' ),
		'add_new' => __( 'Add New', 'case-studies' ),
		'new_item' => __( 'New Case Study', 'case-studies' ),
		'edit_item' => __( 'Edit Case Study', 'case-studies' ),
		'update_item' => __( 'Update Case Study', 'case-studies' ),
		'view_item' => __( 'View Case Study', 'case-studies' ),
		'view_items' => __( 'View Case Studies', 'case-studies' ),
		'search_items' => __( 'Search Case Study', 'case-studies' ),
		'not_found' => __( 'Not found', 'case-studies' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'case-studies' ),
		'featured_image' => __( 'Featured Image', 'case-studies' ),
		'set_featured_image' => __( 'Set featured image', 'case-studies' ),
		'remove_featured_image' => __( 'Remove featured image', 'case-studies' ),
		'use_featured_image' => __( 'Use as featured image', 'case-studies' ),
		'insert_into_item' => __( 'Insert into Case Study', 'case-studies' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Case Study', 'case-studies' ),
		'items_list' => __( 'Case Studies list', 'case-studies' ),
		'items_list_navigation' => __( 'Case Studies list navigation', 'case-studies' ),
		'filter_items_list' => __( 'Filter Case Studies list', 'case-studies' ),
	);
	$args = array(
		'label' => __( 'Case Study', 'case-studies' ),
		'description' => __( 'Case study CPT', 'case-studies' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-editor-quote',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'post-formats', ),
    'taxonomies' => array('casestudytag', 'casestudytype', ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'casestudy', $args );
	flush_rewrite_rules();

}
add_action( 'init', 'pigeon_casestudy_cpt', 0 );

//------------------------------------------------------------
// Categories
//------------------------------------------------------------

function pigeon_casestudytype_tax() {

	$labels = array(
		'name'              => _x( 'Case Study Types', 'taxonomy general name', 'cs-project-types' ),
		'singular_name'     => _x( 'Case Study Type', 'taxonomy singular name', 'cs-project-types' ),
		'search_items'      => __( 'Search Case Study Types', 'cs-project-types' ),
		'all_items'         => __( 'All Case Study Types', 'cs-project-types' ),
		'parent_item'       => __( 'Parent Case Study Type', 'cs-project-types' ),
		'parent_item_colon' => __( 'Parent Case Study Type:', 'cs-project-types' ),
		'edit_item'         => __( 'Edit Case Study Type', 'cs-project-types' ),
		'update_item'       => __( 'Update Case Study Type', 'cs-project-types' ),
		'add_new_item'      => __( 'Add New Case Study Type', 'cs-project-types' ),
		'new_item_name'     => __( 'New Case Study Type Name', 'cs-project-types' ),
		'menu_name'         => __( 'Case Study Types', 'cs-project-types' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Category taxonomy', 'cs-project-types' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'casestudytype', array('casestudy', ), $args );

}
add_action( 'init', 'pigeon_casestudytype_tax' );

//------------------------------------------------------------
// Tags
//------------------------------------------------------------

function pigeon_casestudytag_tax() {

	$labels = array(
		'name'              => _x( 'Case Study Tags', 'taxonomy general name', 'cs-project-tags' ),
		'singular_name'     => _x( 'Case Study Tag', 'taxonomy singular name', 'cs-project-tags' ),
		'search_items'      => __( 'Search Case Study Tags', 'cs-project-tags' ),
		'all_items'         => __( 'All Case Study Tags', 'cs-project-tags' ),
		'parent_item'       => __( 'Parent Case Study Tag', 'cs-project-tags' ),
		'parent_item_colon' => __( 'Parent Case Study Tag:', 'cs-project-tags' ),
		'edit_item'         => __( 'Edit Case Study Tag', 'cs-project-tags' ),
		'update_item'       => __( 'Update Case Study Tag', 'cs-project-tags' ),
		'add_new_item'      => __( 'Add New Case Study Tag', 'cs-project-tags' ),
		'new_item_name'     => __( 'New Case Study Tag Name', 'cs-project-tags' ),
		'menu_name'         => __( 'Case Study Tags', 'cs-project-tags' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Tag taxonomy', 'cs-project-tags' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'casestudytag', array('casestudy', ), $args );

}
add_action( 'init', 'pigeon_casestudytag_tax' );
