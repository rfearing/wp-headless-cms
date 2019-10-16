<?php

// Register Custom Post Type
function products_func() {

	$labels = array(
		'name'                  => _x( 'Product', 'Post Type General Name', 'headless_cms' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'headless_cms' ),
		'menu_name'             => __( 'Products', 'headless_cms' ),
		'name_admin_bar'        => __( 'Product', 'headless_cms' ),
		'archives'              => __( 'Product Archives', 'headless_cms' ),
		'attributes'            => __( 'Product Attributes', 'headless_cms' ),
		'parent_item_colon'     => __( '', 'headless_cms' ),
		'all_items'             => __( 'All Products', 'headless_cms' ),
		'add_new_item'          => __( 'Add New Product', 'headless_cms' ),
		'add_new'               => __( 'Add New', 'headless_cms' ),
		'new_item'              => __( 'New Product', 'headless_cms' ),
		'edit_item'             => __( 'Edit Product', 'headless_cms' ),
		'update_item'           => __( 'Update Product', 'headless_cms' ),
		'view_item'             => __( 'View Product', 'headless_cms' ),
		'view_items'            => __( 'View Products', 'headless_cms' ),
		'search_items'          => __( 'Search Product', 'headless_cms' ),
		'not_found'             => __( 'Not found', 'headless_cms' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'headless_cms' ),
		'featured_image'        => __( 'Featured Image', 'headless_cms' ),
		'set_featured_image'    => __( 'Set featured image', 'headless_cms' ),
		'remove_featured_image' => __( 'Remove featured image', 'headless_cms' ),
		'use_featured_image'    => __( 'Use as featured image', 'headless_cms' ),
		'insert_into_item'      => __( 'Insert into Product', 'headless_cms' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'headless_cms' ),
		'items_list'            => __( 'Products list', 'headless_cms' ),
		'items_list_navigation' => __( 'Products list navigation', 'headless_cms' ),
		'filter_items_list'     => __( 'Filter Products list', 'headless_cms' ),
    );

	$args = array(
		'label'                 => __( 'Product', 'headless_cms' ),
		'description'           => __( 'Can be any sort of product', 'headless_cms' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );
}

add_action( 'init', 'products_func', 0 );
