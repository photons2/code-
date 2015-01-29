<?php
/**
 * @package Test Plugin
 * @version 1.0
 */
/*
Plugin Name:roller poduct 

*/
//error_reporting(0);
// Define of include your main plugin class
register_activation_hook(__FILE__,'ln1_plugin_install');

function ln1_plugin_install() {
   // createa_tables();
  }
  $table_name = $wpdb->prefix."addprodct";

function category() {  
    include('add_category.php');  
}
function product() {  
    include('addprodut.php');  
} 
function viewproduct() {  
    include('viewproduct.php');  
}
 function edit_product()
{
	include('edit_product.php');
}
function edit_product_name()
{
	include('edit_product_name.php');
}
 
  	function add_prduct_menu_action() 
	
{  
   add_menu_page("Product", "Part Number", 1, "Product", "Product");
   add_submenu_page("Product","Add product Name","Add product Name", 2,"category","category");
   add_submenu_page("Product","View prodct","View Product", 3,"viewproduct","viewproduct");
   add_submenu_page("null", "edit", "edit", 4, "edit_product", "edit_product");
   add_submenu_page("null", "edit_product", "edit_product", 5, "edit_product_name", "edit_product_name");
   //add_submenu_page("null","edit","edit", 5,"edit_product","edit_product");
 }  
  
add_action('admin_menu', 'add_prduct_menu_action'); 
?>
