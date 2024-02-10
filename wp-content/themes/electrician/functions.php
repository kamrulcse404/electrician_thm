<?php

/* --------------Post Thumbnails Add-------------- */

add_theme_support('post-thumbnails');
set_post_thumbnail_size(600, 337, true);
add_image_size('single-thumbnail', 600, 337, true);

// include title & js_css  
add_theme_support('title-tag');
require_once('enqueue/enqueue_css_js.php');

//cmb2
require_once('metabox/init.php');
require_once('metabox/functions.php');

// redux Framework //
require_once('lib/framework/ReduxCore/framework.php');
require_once('lib/framework/sample/config.php');


// header menus 
function register_header_menu()
{
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu', 'electrician')
        )
    );
}
add_action('after_setup_theme', 'register_header_menu');



function register_footer_menu()
{
    register_nav_menus(
        array(
            'footer_menu' => __('Footer Menu', 'electrician')
        )
    );
}
add_action('after_setup_theme', 'register_footer_menu');



function add_header_item_class($classes, $item, $args) {
    if ($args->theme_location == 'header_menu') {
        $classes[] = 'header-item';
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'add_header_item_class', 10, 3);


function add_footer_item_class($classes, $item, $args) {
    if ($args->theme_location == 'footer_menu') {
        $classes[] = 'link';
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'add_footer_item_class', 10, 3);






