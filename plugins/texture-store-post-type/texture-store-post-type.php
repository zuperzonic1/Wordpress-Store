<?php

/*
* Plugin Name: Texture Store Post Type
*/


function stoxture_register_texture_post_type() {

   $labels = array(

      'name'                     => __( 'textures', 'TEXTDOMAINHERE' ),
      'singular_name'            => __( 'texture', 'TEXTDOMAINHERE' ),
      'add_new'                  => __( 'Add New', 'TEXTDOMAINHERE' ),
      'add_new_item'             => __( 'Add New texture', 'TEXTDOMAINHERE' ),
      'edit_item'                => __( 'Edit texture', 'TEXTDOMAINHERE' ),
      'new_item'                 => __( 'New texture', 'TEXTDOMAINHERE' ),
      'view_item'                => __( 'View texture', 'TEXTDOMAINHERE' ),
      'view_items'               => __( 'View textures', 'TEXTDOMAINHERE' ),
      'search_items'             => __( 'Search textures', 'TEXTDOMAINHERE' ),
      'not_found'                => __( 'No textures found.', 'TEXTDOMAINHERE' ),
      'not_found_in_trash'       => __( 'No textures found in Trash.', 'TEXTDOMAINHERE' ),
      'parent_item_colon'        => __( 'Parent textures:', 'TEXTDOMAINHERE' ),
      'all_items'                => __( 'All textures', 'TEXTDOMAINHERE' ),
      'archives'                 => __( 'texture Archives', 'TEXTDOMAINHERE' ),
      'attributes'               => __( 'texture Attributes', 'TEXTDOMAINHERE' ),
      'insert_into_item'         => __( 'Insert into texture', 'TEXTDOMAINHERE' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this texture', 'TEXTDOMAINHERE' ),
      'featured_image'           => __( 'Featured Image', 'TEXTDOMAINHERE' ),
      'set_featured_image'       => __( 'Set featured image', 'TEXTDOMAINHERE' ),
      'remove_featured_image'    => __( 'Remove featured image', 'TEXTDOMAINHERE' ),
      'use_featured_image'       => __( 'Use as featured image', 'TEXTDOMAINHERE' ),
      'menu_name'                => __( 'textures', 'TEXTDOMAINHERE' ),
      'filter_items_list'        => __( 'Filter texture list', 'TEXTDOMAINHERE' ),
      'filter_by_date'           => __( 'Filter by date', 'TEXTDOMAINHERE' ),
      'items_list_navigation'    => __( 'textures list navigation', 'TEXTDOMAINHERE' ),
      'items_list'               => __( 'textures list', 'TEXTDOMAINHERE' ),
      'item_published'           => __( 'texture published.', 'TEXTDOMAINHERE' ),
      'item_published_privately' => __( 'texture published privately.', 'TEXTDOMAINHERE' ),
      'item_reverted_to_draft'   => __( 'texture reverted to draft.', 'TEXTDOMAINHERE' ),
      'item_scheduled'           => __( 'texture scheduled.', 'TEXTDOMAINHERE' ),
      'item_updated'             => __( 'texture updated.', 'TEXTDOMAINHERE' ),
      'item_link'                => __( 'texture Link', 'TEXTDOMAINHERE' ),
      'item_link_description'    => __( 'A link to an texture.', 'TEXTDOMAINHERE' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company textures', 'TEXTDOMAINHERE' ),
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
      'menu_icon'             => 'dashicons-megaphone',
      'capability_type'       => 'post',
      'capabilities'          => array(),
      'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
      'taxonomies'            => array(),
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
