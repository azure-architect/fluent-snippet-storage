<?php
// <Internal Doc Start>
/*
*
* @description: Adds alt tags automatically to generate blocks image blocks.
* @tags: image, alt, tag
* @group: The Snippet Club
* @name: Auto Alt Tags
* @type: PHP
* @status: published
* @created_by: 
* @created_at: 
* @updated_at: 2023-12-19 23:01:31
* @is_valid: 
* @updated_by: 
* @priority: 10
* @run_at: all
* @condition: {"status":"no","run_if":"assertive","items":[[]]}
*/
?>
<?php if (!defined("ABSPATH")) { return;} // <Internal Doc End> ?>
<?php
add_filter('render_block', 'lk_add_alt_tags', 10, 2);
function lk_add_alt_tags($content, $block){
	$block_name = $block['blockName'];

    $target_blocks = [
        'core/image',
        'generateblocks/image'
    ];

	if( !in_array($block_name, $target_blocks) ) return $content;

    switch($block_name){
        case 'generateblocks/image':
            $id = $block['attrs']['mediaId'];
            break;
        default:
            $id = $block['attrs']['id'];
            break;
    }

	$alt = get_post_meta( $id, '_wp_attachment_image_alt', true );

	if( empty( $alt ) ) return $content;

	// Empty alt
	if( false !== strpos( $content, 'alt=""' ) ) {
		$content = str_replace( 'alt=""', 'alt="' . $alt . '"', $content );

	// No alt
	} elseif( false === strpos( $content, 'alt="' ) ) {
		$content = str_replace( 'src="', 'alt="' . $alt . '" src="', $content );
	}

	return $content;
}