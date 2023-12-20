<?php
// <Internal Doc Start>
/*
*
* @description: Disable WordPress REST API
* @tags: 
* @group: 
* @name: Disable WordPress REST API
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
add_filter(
	'rest_authentication_errors',
	function ( $access ) {
		return new WP_Error(
			'rest_disabled',
			__( 'The WordPress REST API has been disabled.' ),
			array(
				'status' => rest_authorization_required_code(),
			)
		);
	}
);