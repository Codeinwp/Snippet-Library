<?php

/**
 * Add phone number input
 */
function wpmm_add_phone_number_input() {
    ?>
    <p class="col" style="width:100%;">
        <input type="text" placeholder="Phone number" data-rule-required="true" data-msg-required="This field is required." name="phone_number" class="name_input" />
    </p>
    <?php
}

add_action('wpmm_contact_form_before_message', 'wpmm_add_phone_number_input');

/**
 * Validate phone number input if necessary
 * 
 * (you are free to add your own validation method)
 * 
 * @param array $post
 * @throws Exception
 */
function wpmm_validate_phone_number_input($post) {
    $phone_number = isset($post['phone_number']) ? sanitize_text_field($post['phone_number']) : '';

    if (empty($phone_number)) {
        throw new Exception('Please enter a phone number.');
    }
}

add_action('wpmm_contact_validation', 'wpmm_validate_phone_number_input', 10, 1);

/**
 * Show phone number in the email template
 */
function wpmm_show_phone_number() {
    ?>
    <tr>
        <td height="30"></td>
        <td height="30"></td>
    </tr>
    <tr>
        <td width="20%" style="border-bottom:1px solid #e3e5e5;padding:0 0 30px 20px;text-align:left;font-size:14px;font-family:Lato, Helvetica, Arial, sans-serif;color:#747e7e;font-weight:bold;">
            Phone Number:
        </td>
        <td width="80%" style="border-bottom:1px solid #e3e5e5;padding:0 0 30px 20px;text-align:left;font-size:14px;font-family:Lato, Helvetica, Arial, sans-serif;color:#747e7e;">
            <?php echo sanitize_text_field($_POST['phone_number']); ?>
        </td>
    </tr>
    <?php
}

add_action('wpmm_contact_template_before_message', 'wpmm_show_phone_number');
