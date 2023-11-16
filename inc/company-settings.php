<?php

//Define a section in the site settings for Company Info
function wp_framework_initialize_company_info() {
    if ( get_option( 'company_contact_info_options' ) == false ) {	
        add_option( 'company_contact_info_options' );
    }

    add_settings_section(
        'company_contact_section',
        'Company Contact Info',
        'wp_framework_company_info_callback',
        'company_contact_info_options'
    );

    add_settings_field(
        'company_name',
        'Company Name',
        'wp_framework_company_name_callback',
        'company_contact_info_options',
        'company_contact_section'
    );

    add_settings_field(
        'company_address1',
        'Company Address Line 1',
        'wp_framework_company_address1_callback',
        'company_contact_info_options',
        'company_contact_section'
    );

    add_settings_field(
        'company_address2',
        'Company Address Line 2',
        'wp_framework_company_address2_callback',
        'company_contact_info_options',
        'company_contact_section'
    );

    add_settings_field(
        'company_phone',
        'Company Phone Number',
        'wp_framework_company_phone_callback',
        'company_contact_info_options',
        'company_contact_section'
    );

    add_settings_field(
        'company_email',
        'Company Email Number',
        'wp_framework_company_email_callback',
        'company_contact_info_options',
        'company_contact_section'
    );

    register_setting(
        'company_contact_info_options',
        'company_contact_info_options'
    );
}
add_action('admin_init', 'wp_framework_initialize_company_info');


/*---------------------
Callback Functions
---------------------*/

//Render description for Company Info section
function wp_framework_company_info_callback() {
    echo '<p>General information about the company</p>';
}

//Render Company Name field
function wp_framework_company_name_callback() {
    $options = get_option('company_contact_info_options');

    echo '<input type="text" name="company_contact_info_options[company_name]" value="' . $options['company_name'] . '" class="regular-text"/>';
}

//Render Company Address Line 1 field
function wp_framework_company_address1_callback() {
    $options = get_option('company_contact_info_options');

    echo '<input type="text" name="company_contact_info_options[company_address1]" value="' . $options['company_address1'] . '" class="regular-text"/>';
}

//Render Company Address Line 2 field
function wp_framework_company_address2_callback() {
    $options = get_option('company_contact_info_options');

    echo '<input type="text" name="company_contact_info_options[company_address2]" value="' . $options['company_address2'] . '" class="regular-text"/>';
}

//Render Company Phone Number field
function wp_framework_company_phone_callback() {
    $options = get_option('company_contact_info_options');

    echo '<input type="text" name="company_contact_info_options[company_phone]" value="' . $options['company_phone'] . '" class="regular-text"/>';
}

//Render Company Email field
function wp_framework_company_email_callback() {
    $options = get_option('company_contact_info_options');

    echo '<input type="text" name="company_contact_info_options[company_email]" value="' . $options['company_email'] . '" class="regular-text"/>';
}

?>