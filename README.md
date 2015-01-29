<?php

/*
 Plugin Name: Additional Tools
 
 Version: 1.0
*/

if($_GET['action']=='edit') {
 $new_post_type = get_post_type( $_GET['post']);
}
add_action( 'init', 'Mds_Additional_Tools_programs' );
function Mds_Additional_Tools_programs() {
 $labels = array(
    'name'=> __( 'Additional Tools', 'Additional Tools' ),
        'singular_name'=> __( 'Additional Tools', 'Additional Tools' ),
        'add_new'=> __( 'Add Additional Tools', 'Additional Tools' ),
        'add_new_item'=> __( 'Add Additional Tools', 'Additional Tools' ),
        'edit_item' => __( 'Edit Additional Tools', 'Additional Tools' ),
        'new_item' => __( 'New Additional Tools', 'Additional Tools ' ),
        'view_item'=> __( 'View Additional Tools', 'Additional Tools' ),
        'search_items'       => __( 'Search Additional Tools', 'Additional Tools' ),
        'not_found'          => __( 'No Additional Tools', 'Additional Tools' ),
        'not_found_in_trash' => __( 'No Additional Tools in Trash', 'Additional Tools' ),
        'parent_item_colon'  => '','menu_name' => __( 'Additional Tools', 'Additional Tools' ));
  $supports = array('title','thumbnail','excerpt','editor');
     register_post_type( 'mds_Additional_Tools',array('labels' => $labels,'public' => true,'supports' => $supports));
}
add_action( 'init', 'Additional_Tools_category' );
function Additional_Tools_category() {
$labels = array(
   'name'              => __( 'Additional Tools Category', 'Additional Tools' ),
   'singular_name'     => __( 'Additional Tools Category', 'Additional Tools' ),
   'search_items'      => __( 'Search Additional Tools Category', 'Additional Tools' ),
   'popular_items'     => __( 'Popular Additional Tools Category', 'Additional Tools' ),
   'all_items'         => __( 'All Additional Tools Category', 'Additional Tools' ),
   'parent_item'       => __( 'Parent Additional Tools Category', 'Additional Tools' ),
   'parent_item_colon' => __( 'Parent Additional Tools Category:', 'Additional Tools' ),
   'edit_item'         => __( 'Edit Additional Tools Category', 'Additional Tools' ),
   'update_item'       => __( 'Update Additional Tools Category', 'Additional Tools' ),
   'add_new_item'      => __( 'Add New Additional Tools Category', 'Additional Tools' ),
   'new_item_name'     => __( 'New Additional Tools Category Name', 'Additional Tools' ),
   'menu_name'         => __( 'Additional Tools Category', 'Additional Tools' )

  );
  $args = array(
   'labels'            => $labels,
   'public'            => true,
   'show_in_nav_menus' => false,
   'show_ui'           => true,
   'show_tagcloud'     => false,
   'hierarchical'      => true,
   'rewrite'           => array( 'slug' => 'state' )
  );
  register_taxonomy( 'additional_tools_category', 'mds_additional_tools', $args );
  
 
}
