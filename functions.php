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
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

?>