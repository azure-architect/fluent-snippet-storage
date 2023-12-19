<?php
// <Internal Doc Start>
/*
*
* @description: Add Attributes to form fields Fluent Forms. Also can be used for these fields:

https://snippetclub.com/add-custom-attributes-to-fluent-form-fields/
* @tags: fluent forms, attributes, fields
* @group: The Snippet Club
* @name: Add Attributes to form fields Fluent Forms
* @type: PHP
* @status: draft
* @created_by: 
* @created_at: 
* @updated_at: 2023-12-19 23:00:49
* @is_valid: 
* @updated_by: 
* @priority: 10
* @run_at: all
* @condition: {"status":"no","run_if":"assertive","items":[[]]}
*/
?>
<?php if (!defined("ABSPATH")) { return;} // <Internal Doc End> ?>
<?php
/**
 * Modify text input field attributes for Fluent Form rendering.
 *
 * This function adds the 'autocomplete' attribute to text input fields with the value 'country'
 * when rendering a Fluent Form.
 *
 * @since     27/11/2023
 * @author    @mikeymyco
 *
 * @param array $field The field properties.
 * @param array $form  The form properties.
 * @return array The modified field properties.
 */
add_filter( 'fluentform/rendering_field_data_input_text', 'lk_add_country_autocomplete', 10, 2 );
function lk_add_country_autocomplete( $field, $form ) {
    $form_id = 1; // Change to your form ID
    $target_field = 'my_field'; // Change to the name attribute of your field

    // Check if our form is equal to $form_id
    if($form->id != $form_id) {
        return $field;
    }

    // Check if our field is equal to $target_field
    if (\FluentForm\Framework\Helpers\ArrayHelper::get($data, 'attributes.name') != $target_field) {
        return $field;
    }

    $field['attributes']['autocomplete'] = 'country';
    return $field;
}