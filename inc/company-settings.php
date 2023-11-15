<?php

//Define a section in the site settings for Company Info
function wp_framework_initialize_company_info() {
    add_settings_section(
        'company_info_section',
        'Company Info',
        'wp_framework_company_info_callback',
        'general'
    );

    add_settings_field(
        'company_name',
        'Company Name',
        'wp_framework_company_name_callback',
        'general',
        'company_info_section'
    );

    add_settings_field(
        'company_address1',
        'Company Address Line 1',
        'wp_framework_company_address1_callback',
        'general',
        'company_info_section'
    );

    add_settings_field(
        'company_address2',
        'Company Address Line 2',
        'wp_framework_company_address2_callback',
        'general',
        'company_info_section'
    );

    add_settings_field(
        'company_phone',
        'Company Phone Number',
        'wp_framework_company_phone_callback',
        'general',
        'company_info_section'
    );

    add_settings_field(
        'company_email',
        'Company Email Number',
        'wp_framework_company_email_callback',
        'general',
        'company_info_section'
    );

    register_setting(
        'general',
        'company_name'
    );

    register_setting(
        'general',
        'company_address1'
    );

    register_setting(
        'general',
        'company_address2'
    );

    register_setting(
        'general',
        'company_phone'
    );

    register_setting(
        'general',
        'company_email'
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
    echo '<input type="text" name="company_name" value="' . get_option('company_name') . '" class="regular-text"/>';
}

//Render Company Address Line 1 field
function wp_framework_company_address1_callback() {
    echo '<input type="text" name="company_address1" value="' . get_option('company_address1') . '" class="regular-text"/>';
}

//Render Company Address Line 2 field
function wp_framework_company_address2_callback() {
    echo '<input type="text" name="company_address2" value="' . get_option('company_address2') . '" class="regular-text"/>';
}

//Render Company Phone Number field
function wp_framework_company_phone_callback() {
    echo '<input type="text" name="company_phone" value="' . get_option('company_phone') . '" class="regular-text"/>';
}

//Render Company Email field
function wp_framework_company_email_callback() {
    echo '<input type="text" name="company_email" value="' . get_option('company_email') . '" class="regular-text"/>';
}

?>