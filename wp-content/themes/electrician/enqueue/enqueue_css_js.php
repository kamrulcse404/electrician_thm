<?php

function enqueue_custom_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    // Enqueue your custom style CSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css');

    // Enqueue Remixicon CSS
    wp_enqueue_style('remixicon', 'https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css');

    // Enqueue Swiper CSS
    wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');



function enqueue_custom_scripts() {
    // Enqueue Bootstrap script
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);

    // Enqueue main.js script
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);

    // Enqueue Swiper script
    wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

    // Enqueue your custom script
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('swiper'), null, true);

}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

