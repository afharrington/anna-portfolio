<?php
/* Register Custom Post Type */
function portfolio_item() {

	$labels = array(
		'name'                  => _x( 'Portfolio Items', 'Post Type General Name', 'html-to-wp' ),
		'singular_name'         => _x( 'Portfolio Item', 'Post Type Singular Name', 'html-to-wp' ),
		'menu_name'             => __( 'Portfolio Items', 'html-to-wp' ),
		'name_admin_bar'        => __( 'Portfolio Item', 'html-to-wp' ),
		'archives'              => __( 'Portfolio Item Archives', 'html-to-wp' ),
		'attributes'            => __( 'Portfolio Item Attributes', 'html-to-wp' ),
		'parent_item_colon'     => __( 'Parent Portfolio Item:', 'html-to-wp' ),
		'all_items'             => __( 'All Portfolio Items', 'html-to-wp' ),
		'add_new_item'          => __( 'Add New Portfolio Item', 'html-to-wp' ),
		'add_new'               => __( 'Add New', 'html-to-wp' ),
		'new_item'              => __( 'New Portfolio Item', 'html-to-wp' ),
		'edit_item'             => __( 'Edit Portfolio Item', 'html-to-wp' ),
		'update_item'           => __( 'Update Portfolio Item', 'html-to-wp' ),
		'view_item'             => __( 'View Portfolio Item', 'html-to-wp' ),
		'view_items'            => __( 'View Portfolio Items', 'html-to-wp' ),
		'search_items'          => __( 'Search Portfolio Items', 'html-to-wp' ),
		'not_found'             => __( 'Not found', 'html-to-wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'html-to-wp' ),
		'featured_image'        => __( 'Featured Image', 'html-to-wp' ),
		'set_featured_image'    => __( 'Set featured image', 'html-to-wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'html-to-wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'html-to-wp' ),
		'insert_into_item'      => __( 'Insert into resource', 'html-to-wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this portfolio item', 'html-to-wp' ),
		'items_list'            => __( 'Portfolio Items list', 'html-to-wp' ),
		'items_list_navigation' => __( 'Portfolio Items list navigation', 'html-to-wp' ),
		'filter_items_list'     => __( 'Filter portfolio items list', 'html-to-wp' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio Item', 'html-to-wp' ),
		'description'           => __( 'Portfolio Items', 'html-to-wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-feedback',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio-item', $args );

}
add_action( 'init', 'portfolio_item', 0 );
?>
