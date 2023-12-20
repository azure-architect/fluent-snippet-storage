<?php
// <Internal Doc Start>
/*
*
* @description: https://snippetclub.com/how-to-enqueue-styles-and-scripts-in-generatepress/#3-enqueue-styles-to-gutenberg-editor-head
* @tags: styles, enqueue,
* @group: The Snippet Club
* @name: 3. Enqueue styles to Gutenberg editor head
* @type: PHP
* @status: published
* @created_by: 
* @created_at: 
* @updated_at: 2023-12-19 23:21:17
* @is_valid: 
* @updated_by: 
* @priority: 10
* @run_at: all
* @condition: {"status":"no","run_if":"assertive","items":[[]]}
*/
?>
<?php if (!defined("ABSPATH")) { return;} // <Internal Doc End> ?>
<?php
/* Enqueue custom script to editor */
add_action( 'enqueue_block_editor_assets', 'tct_enqueue_block_editor_assets' );
function tct_enqueue_block_editor_assets() {
    $theme_dir = get_stylesheet_directory_uri();

	wp_register_style( 'tct-editor-styles', $theme_dir . '/editor/editor-style.css' );
	wp_enqueue_style( 'tct-editor-styles' );

    // Editor script
    wp_enqueue_script(
        'tct-editor-script',
        $theme_dir . '/editor/editor-script.js',
        array( 'wp-hooks' ),
        time(),
        true
    );
}