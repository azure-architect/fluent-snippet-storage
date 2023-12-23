<?php
// <Internal Doc Start>
/*
*
* @description: https://stackoverflow.com/questions/43744050/animated-light-reflection-on-image-in-css-or-jquery
* @tags: reflection, css 
* @group: css-tricks
* @name: Shiny wipe across an image
* @type: php_content
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
div {
  display: inline-block;
  position: relative;
}

div:after {
  content: "";
  position: absolute;
  top: -30%;
  right: -200%;
  width: 50%;
  height: 200%;
  opacity: 0;
  transform: rotate(30deg);
  background: rgba(255, 255, 255, 0.13);
  background: linear-gradient( to right, rgba(255, 255, 255, 0.13) 0%, rgba(255, 255, 255, 0.13) 77%, rgba(255, 255, 255, 0.5) 92%, rgba(255, 255, 255, 0.0) 100%);
  animation: shine 2s 1s;
}

@keyframes shine {
  to {
    opacity: 1;
    right: 210%;
  }
}
<div>
  <img src="http://kenwheeler.github.io/slick/img/fonz1.png">
</div>