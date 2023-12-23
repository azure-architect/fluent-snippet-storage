<?php
// <Internal Doc Start>
/*
*
* @description: This is a the blur class used in creative tim's bootstap 5 ui kit "soft". https://www.creative-tim.com/product/soft-ui-design-system-pro
* @tags: bootstrap,
* @group: BootStrap Enhancement Collection
* @name: Blur background
* @type: css
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
.blur {
  box-shadow: inset 0 0 2px #fefefed1;
  -webkit-backdrop-filter: saturate(200%) blur(30px);
  backdrop-filter: saturate(200%) blur(30px);
  background-color: hsla(0,0%,100%,.8) !important;
}