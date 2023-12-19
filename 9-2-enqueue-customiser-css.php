<?php
// <Internal Doc Start>
/*
*
* @description: https://snippetclub.com/how-to-enqueue-styles-and-scripts-in-generatepress/#2-enqueue-customiser-css-to-editor-iframe
* @tags: 
* @group: The Snippet Club
* @name: 2. Enqueue Customiser CSS to editor iframe
* @type: PHP
* @status: published
* @created_by: 
* @created_at: 
* @updated_at: 2023-12-19 23:00:03
* @is_valid: 
* @updated_by: 
* @priority: 10
* @run_at: all
* @condition: {"status":"no","run_if":"assertive","items":[[]]}
*/
?>
<?php if (!defined("ABSPATH")) { return;} // <Internal Doc End> ?>
<?php
/* Enqueue Customiser CSS to editor iframe */
add_filter( 'block_editor_settings_all', 'lk_customiser_styles', 10, 2);
function lk_customiser_styles($editor_settings, $editor_context) {
    $custom_css_post = wp_get_custom_css_post();
    if ($custom_css_post) {
        $customiser_css = $custom_css_post->post_content;
	    $editor_settings['styles'][] = array( 'css' => $customiser_css );
	}
    return $editor_settings;
};