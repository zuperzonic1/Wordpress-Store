<?php

/*
* Plugin Name: Texture Store Post Type
*/


function stoxture_register_texture_post_type() {

   $labels = array(

      'name'                     => __( 'textures', 'STOXTURE' ),
      'singular_name'            => __( 'texture', 'STOXTURE' ),
      'add_new'                  => __( 'Add New', 'STOXTURE' ),
      'add_new_item'             => __( 'Add New texture', 'STOXTURE' ),
      'edit_item'                => __( 'Edit texture', 'STOXTURE' ),
      'new_item'                 => __( 'New texture', 'STOXTURE' ),
      'view_item'                => __( 'View texture', 'STOXTURE' ),
      'view_items'               => __( 'View textures', 'STOXTURE' ),
      'search_items'             => __( 'Search textures', 'STOXTURE' ),
      'not_found'                => __( 'No textures found.', 'STOXTURE' ),
      'not_found_in_trash'       => __( 'No textures found in Trash.', 'STOXTURE' ),
      'parent_item_colon'        => __( 'Parent textures:', 'STOXTURE' ),
      'all_items'                => __( 'All textures', 'STOXTURE' ),
      'archives'                 => __( 'texture Archives', 'STOXTURE' ),
      'attributes'               => __( 'texture Attributes', 'STOXTURE' ),
      'insert_into_item'         => __( 'Insert into texture', 'STOXTURE' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this texture', 'STOXTURE' ),
      'featured_image'           => __( 'Featured Image', 'STOXTURE' ),
      'set_featured_image'       => __( 'Set featured image', 'STOXTURE' ),
      'remove_featured_image'    => __( 'Remove featured image', 'STOXTURE' ),
      'use_featured_image'       => __( 'Use as featured image', 'STOXTURE' ),
      'menu_name'                => __( 'textures', 'STOXTURE' ),
      'filter_items_list'        => __( 'Filter texture list', 'STOXTURE' ),
      'filter_by_date'           => __( 'Filter by date', 'STOXTURE' ),
      'items_list_navigation'    => __( 'textures list navigation', 'STOXTURE' ),
      'items_list'               => __( 'textures list', 'STOXTURE' ),
      'item_published'           => __( 'texture published.', 'STOXTURE' ),
      'item_published_privately' => __( 'texture published privately.', 'STOXTURE' ),
      'item_reverted_to_draft'   => __( 'texture reverted to draft.', 'STOXTURE' ),
      'item_scheduled'           => __( 'texture scheduled.', 'STOXTURE' ),
      'item_updated'             => __( 'texture updated.', 'STOXTURE' ),
      'item_link'                => __( 'texture Link', 'STOXTURE' ),
      'item_link_description'    => __( 'A link to an texture.', 'STOXTURE' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company textures', 'STOXTURE' ),
      'public'                => true,
      'hierarchical'          => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => false,
      'show_in_admin_bar'     => false,
      'show_in_rest'          => true,
      'menu_position'         => null,
      'menu_icon'             => 'dashicons-art',
      'capability_type'       => 'post',
      'capabilities'          => array(),
      'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
      'taxonomies'            => array( 'category'),
      'has_archive'           => true,
      'rewrite'               => array( 'slug' => 'store_texture' ),
      'query_var'             => true,
      'can_export'            => true,
      'delete_with_user'      => false,
      'template'              => array(),
      'template_lock'         => false,

   );

   register_post_type( 'stoxture-texture', $args );

}
add_action( 'init', 'stoxture_register_texture_post_type' );
