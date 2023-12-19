<?php
// <Internal Doc Start>
/*
*
* @description: https://snippetclub.com/how-to-enqueue-styles-and-scripts-in-generatepress/#1-enqueue-styles-to-editor-iframe
* @tags: styles, enqueque, gp, gb,
* @group: The Snippet Club
* @name: 1. Enqueue styles to editor iframe
* @type: PHP
* @status: published
* @created_by: 
* @created_at: 
* @updated_at: 2023-12-19 22:59:41
* @is_valid: 
* @updated_by: 
* @priority: 10
* @run_at: all
* @condition: {"status":"no","run_if":"assertive","items":[[]]}
*/
?>
<?php if (!defined("ABSPATH")) { return;} // <Internal Doc End> ?>
<?php
/* Enqueue styles to editor iframe */
add_filter( 'generate_editor_styles', 'lk_editor_iframe_styles', 50);
function lk_editor_iframe_styles($editor_styles ) {
    $editor_styles[] = '/style.css';

    return $editor_styles;
};