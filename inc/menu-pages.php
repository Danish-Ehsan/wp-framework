<?php

//Create menu page
function wp_framework_create_company_info_menu_page() {

    add_menu_page(
        'Company Info',
        'Company Info',
        'administrator',
        'company_info',
        'wp_framework_company_info_menu_page_display',
        'dashicons-info-outline'
    );

}
add_action('admin_menu', 'wp_framework_create_company_info_menu_page');

//Render menu page
function wp_framework_company_info_menu_page_display() {
?>
    <div class="wrap">
        <h2>Company Info</h2>

        <!-- Make a call to the WordPress function for rendering errors when settings are saved. -->
        <?php settings_errors(); ?>

        <!-- Create the form that will be used to render our options -->
		<form method="post" action="options.php">
			<?php settings_fields( 'company_contact_info_options' ); ?>
			<?php do_settings_sections( 'company_contact_info_options' ); ?>			
			<?php submit_button(); ?>
		</form>
    </div>
<?php
}

?>