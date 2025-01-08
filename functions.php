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
    // Verify the request method is POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        wp_die('Invalid request method');
    }

    // Sanitize the form inputs
    $full_name = sanitize_text_field($_POST['fullName']);
    $phone_number = sanitize_text_field($_POST['phoneNumber']);
    $email_address = sanitize_email($_POST['emailAddress']);
    $property_address = sanitize_text_field($_POST['propertyAddress']);
    $services = isset($_POST['services']) ? implode(', ', array_map('sanitize_text_field', (array) $_POST['services'])) : '';
    $message = sanitize_textarea_field($_POST['message']);

    // Send an email (WordPress's built-in mail function)
    $to = get_option('admin_email'); // Replace with your desired recipient email
    $subject = "New Service Form Submission from $full_name";
    $body = "Full Name: $full_name\n"
          . "Phone Number: $phone_number\n"
          . "Email Address: $email_address\n"
          . "Property Address: $property_address\n"
          . "Services Interested In: $services\n"
          . "Message: $message\n";
    $headers = ['Content-Type: text/plain; charset=UTF-8'];

    // Send the email
    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_redirect(home_url('/thank-you/')); // Redirect to a thank-you page
        exit;
    } else {
        wp_die('There was an issue sending your message. Please try again later.');
    }
}
add_action('admin_post_submit_service_form', 'handle_service_form_submission'); // For logged-in users
add_action('admin_post_nopriv_submit_service_form', 'handle_service_form_submission'); // For logged-out users