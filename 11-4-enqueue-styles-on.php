<?php
// <Internal Doc Start>
/*
*
* @description: https://snippetclub.com/how-to-enqueue-styles-and-scripts-in-generatepress/#4-enqueue-styles-on-the-frontend
* @tags: 
* @group: 
* @name: 4. Enqueue styles on the frontend
* @type: PHP
* @status: draft
* @created_by: 
* @created_at: 
* @updated_at: 
* @is_valid: 
* @updated_by: 
* @priority: 10
* @run_at: all
* @condition: {"status":"no","run_if":"assertive","items":[[]]}
*/
?>
<?php if (!defined("ABSPATH")) { return;} // <Internal Doc End> ?>
<?php
/* Frontend custom styles */
add_action('wp_enqueue_scripts', 'lk_enqueue_custom_styles', 20);
function tct_enqueue_custom_styles(){
	wp_register_style( 'lk-child-custom', get_stylesheet_directory_uri(). '/custom/custom-style.css' );
	wp_enqueue_style( 'lk-child-custom' );
}