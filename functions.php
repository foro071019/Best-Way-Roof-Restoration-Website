<?php
function my_theme_enqueue_styles() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap-5.3.3-dist/css/bootstrap.min.css');

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

    // Theme Styles
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('global', get_template_directory_uri() . '/assets/css/global.css');
    wp_enqueue_style('home-page', get_template_directory_uri() . '/assets/css/home_page.css');
    wp_enqueue_style('home-page-header', get_template_directory_uri() . '/assets/css/home_page_header.css');
    wp_enqueue_style('home-page-footer', get_template_directory_uri() . '/assets/css/home_page_footer.css');


    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap-5.3.3-dist/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


function handle_service_form_submission() {
    // Check if the form is submitted
    if (isset($_POST['fullName'], $_POST['phoneNumber'], $_POST['emailAddress'], $_POST['propertyAddress'])) {
        // Sanitize form data
        $fullName = sanitize_text_field($_POST['fullName']);
        $phoneNumber = sanitize_text_field($_POST['phoneNumber']);
        $emailAddress = sanitize_email($_POST['emailAddress']);
        $propertyAddress = sanitize_text_field($_POST['propertyAddress']);
        $message = sanitize_textarea_field($_POST['message']);
        $services = isset($_POST['services']) ? implode(', ', $_POST['services']) : 'None';

        // Construct the email message
        $email_message = "Full Name: $fullName\n";
        $email_message .= "Phone Number: $phoneNumber\n";
        $email_message .= "Email Address: $emailAddress\n";
        $email_message .= "Property Address: $propertyAddress\n";
        $email_message .= "Services: $services\n";
        $email_message .= "Message: $message\n";

        // Send the email using WP Mail SMTP
        wp_mail('youremail@example.com', 'New Service Form Submission', $email_message);

        // Redirect to a thank you page or show a success message
        wp_redirect(home_url('/thank-you/'));
        exit;
    }
}

// Hook the function to admin_post (for logged-in users) and admin_post_nopriv (for non-logged-in users)
add_action('admin_post_service_form', 'handle_service_form_submission');
add_action('admin_post_nopriv_service_form', 'handle_service_form_submission');
