<?php
// <Internal Doc Start>
/*
*
* @description: Disable XML-RPC
* @tags: 
* @group: 
* @name: Disable XML-RPC
* @type: PHP
* @status: draft
* @created_by: 
* @created_at: 
* @updated_at: 2023-12-20 03:37:59
* @is_valid: 
* @updated_by: 
* @priority: 10
* @run_at: all
* @condition: {"status":"no","run_if":"assertive","items":[[]]}
*/
?>
<?php if (!defined("ABSPATH")) { return;} // <Internal Doc End> ?>
<?php
add_filter( 'xmlrpc_enabled', '__return_false' );