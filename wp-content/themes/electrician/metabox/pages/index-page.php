<?php

// metabox for index page banner content
function metabox_for_index_banner_content(array $index_banner_content)
{
    $index_banner_content[] = array(
        'id' => 'index_page_banner',
        'title' => 'Banner Content',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index_banner_image',
                'name' => 'Upload Image for Banner',
                'default' => get_template_directory_uri() . '/image/working.png',
                'type' => 'file',
            ),

            array(
                'id' => 'index_banner_title',
                'name' => 'Banner Title',
                'default' => "Licensed Electricians in London Offering Electrical Repair & Installation",
                'type' => 'textarea',
            ),

            array(
                'id' => 'index_banner_description',
                'name' => 'Banner Description',
                'default' => "Whether you need electrical services for your home or business in London, we at Electricians London have the ideal solution for you. Our expert electricians save London customers plenty of money. From installation to upgrades, we do it all.",
                'type' => 'textarea',
            ),


            array(
                'id' => 'index_banner_phone',
                'name' => 'Contact Number',
                'default' => "(000)123-4567",
                'type' => 'text',
            ),

            array(
                'id' => 'index_banner_service_title',
                'name' => 'Service Title',
                'default' => "Call Us  Now!",
                'type' => 'textarea_small',
            ),
        ),
    );

    return $index_banner_content;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_banner_content');




// function metabox_for_index_banner_sidebar(array $index_banner_sidebar)
// {
//     $index_banner_sidebar[] = array(
//         'id' => 'index_page_banner_sidebar',
//         'title' => 'Banner Sidebar',
//         'object_types' => array('page'),
//         'show_on' => array(
//             'key' => 'page-template',
//             'value' => 'index.php',
//         ),
//         'fields' => array(
//             array(
//                 'id' => 'index_banner_left_title',
//                 'name' => 'Banner Left Title',
//                 'default' => "TOP-RATED ELECTRICIAN LONDON",
//                 'type' => 'text',
//             ),

//             array(
//                 'id' => 'index_banner_right_title',
//                 'name' => 'Banner Right Title',
//                 'default' => "Facebook",
//                 'type' => 'text',
//             ),

//             array(
//                 'id' => 'index_banner_right_url',
//                 'name' => 'Banner Right Url',
//                 'default' => "https://www.facebook.com/",
//                 'type' => 'text_url',
//             ),
//         ),
//     );

//     return $index_banner_sidebar;
// }

// add_filter('cmb2_meta_boxes', 'metabox_for_index_banner_sidebar');


// repeater add more option for banner services  
function index_banner_service_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index_service_item_repeater',
        'title' => 'Option For Banner Service Items',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'banner_service_items',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Service Title One',
        'id' => 'banner_service_item_title_one',
        'type' => 'text',
    ));
    $cmb->add_group_field($add_more_option, array(
        'name' => 'Service Title Two',
        'id' => 'banner_service_item_title_two',
        'type' => 'text',
    ));
}

add_action('cmb2_admin_init', 'index_banner_service_metaboxes');



// service section 
function metabox_for_index_service_section(array $index_services)
{
    $index_services[] = array(
        'id' => 'index_page_services',
        'title' => 'Services Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(

            array(
                'id' => 'index_service_image',
                'name' => 'Upload Image for Service section',
                'default' => get_template_directory_uri() . '/image/mecanic.jpg',
                'type' => 'file',
            ),
            array(
                'id' => 'index_service_title',
                'name' => 'Service Title',
                'default' => "We are the Best Electrician London: Our Electrician  Services Include",
                'type' => 'textarea_small',
            ),
            // array(
            //     'id' => 'index_service_text_color',
            //     'name' => 'Text Color for Service Title',
            //     'type' => 'colorpicker',
            //     'default' => '#db4332',
            // ),

            array(
                'id' => 'index_service_description_one',
                'name' => 'Service First Description',
                'default' => "Every property owner depends on electricity...our London Electrician's job is to make sure you're safe and efficient!",
                'type' => 'textarea_small',
            ),

            array(
                'id' => 'index_service_description_two',
                'name' => 'Service Second Description',
                'default' => "Our team of heighy-skilled Electricians in London is here to provide you with reliable and professional service, 24/7. We offer a wide range of services, including:",
                'type' => 'textarea_small',
            ),

            array(
                'id' => 'index_service_and_more',
                'name' => 'And More Title',
                'default' => "And More...",
                'type' => 'text',
            ),
        ),
    );

    return $index_services;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_service_section');


// repeater add more option for banner services  
function index_service_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index_service_section_item_repeater',
        'title' => 'Option For Service Section Items',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'service_section_items',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Service Title',
        'id' => 'service_item_title',
        'type' => 'textarea',
    ));
}

add_action('cmb2_admin_init', 'index_service_metaboxes');


// choose us section 
function metabox_for_index_choose_section(array $index_choose)
{
    $index_choose[] = array(
        'id' => 'index_page_choose_us',
        'title' => 'Choose Us Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index_choose_title',
                'name' => 'Choose Title',
                'default' => "Why Choose Electricians London for Your Electrical Needs in London?",
                'type' => 'textarea_small',
            ),
            array(
                'id' => 'index_choose_description_one',
                'name' => 'Description One',
                'default' => "When choosing an electrician in London, there are many factors to consider. But a few things set Electricians London apart from the rest.",
                'type' => 'textarea_small',
            ),
            array(
                'id' => 'index_choose_description_two',
                'name' => 'Description Two',
                'default' => "Here are just a few of the reasons why you should choose us for all of your electric needs:",
                'type' => 'textarea_small',
            ),
        ),
    );

    return $index_choose;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_choose_section');


// repeater add more option for choose us  
function index_choose_us_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index_choose_section_item_repeater',
        'title' => 'Option For Choose Section Items',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'choose_items',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Upload Image For Option Item',
        'id' => 'choose_item_image',
        'type' => 'file',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Choose Item Title',
        'id' => 'choose_item_title',
        'type' => 'textarea_small',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Choose Item Short Description',
        'id' => 'choose_item_short_desc',
        'type' => 'textarea_small',
    ));
}

add_action('cmb2_admin_init', 'index_choose_us_metaboxes');


// emergency section 
function metabox_for_index_emergency_section(array $index_emergency)
{
    $index_emergency[] = array(
        'id' => 'index_page_emergency',
        'title' => 'Emergency Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index_emergency_image',
                'name' => 'Upload Background Image',
                'default' => get_template_directory_uri() . '/image/technician-switchboard.png',
                'type' => 'file',
            ),
            array(
                'id' => 'index_emergency_title',
                'name' => 'Title',
                'default' => "Emergency Electrician in London: We're Ready Whenever You Need Us",
                'type' => 'textarea',
            ),

            array(
                'id' => 'index_emergency_desc',
                'name' => 'Description',
                'default' => "Power outage? Flickering lights? Sparks? Don't panic! Electricians London is here to provide prompt and reliable emergency electrical services throughout London. We understand that electrical emergencies can happen at any time, day or night, which is why we offer 24/7 emergency service.",
                'type' => 'textarea',
            ),

            array(
                'id' => 'index_emergency_sub_title',
                'name' => 'Sub-Title',
                'default' => "Here's what you can expect  from our emergency electrical services:",
                'type' => 'textarea_small',
            ),

            array(
                'id' => 'index_emergency_short_note',
                'name' => 'Note',
                'default' => "Don't wait until an electrical emergency strikes to find a reliable electrician. Choose Elentricians London and rest assured that we will be there for you when you need us most.",
                'type' => 'textarea_small',
            ),
        ),
    );

    return $index_emergency;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_emergency_section');


// repeater add more option for emergency options 
function index_emergency_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index_emergency_repeater',
        'title' => 'Emergency Options',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'emergency_items',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Option Title',
        'id' => 'emergency_option_title',
        'type' => 'textarea_small',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Option Short Description',
        'id' => 'emergency_option_short_desc',
        'type' => 'textarea_small',
    ));
}

add_action('cmb2_admin_init', 'index_emergency_metaboxes');


// testimonial section 
function metabox_for_index_testimonial_section(array $index_testimonial)
{
    $index_testimonial[] = array(
        'id' => 'index_page_testimonial',
        'title' => 'Testimonial Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index_testimonial_title',
                'name' => 'Title',
                'default' => "See What Your Neighbours Say About Us!",
                'type' => 'textarea_small',
            ),
            // array(
            //     'id' => 'index_testimonial_text_color',
            //     'name' => 'Text Color for Title',
            //     'type' => 'colorpicker',
            //     'default' => '#db4332',
            // ),
        ),
    );

    return $index_testimonial;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_testimonial_section');


// repeater add more option for testimonial options 
function index_testimonial_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index_testimonial_repeater',
        'title' => 'Testimonials',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'testimonial_items',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Name',
        'id' => 'testimonial_item_name',
        'type' => 'text',
    ));
    $cmb->add_group_field($add_more_option, array(
        'name' => 'Designation',
        'id' => 'testimonial_item_designation',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Testimonial Description',
        'id' => 'testimonial_item_desc',
        'type' => 'textarea_small',
    ));
}

add_action('cmb2_admin_init', 'index_testimonial_metaboxes');



// area section 
function metabox_for_index_area_section(array $index_area)
{
    $index_area[] = array(
        'id' => 'index_page_area',
        'title' => 'Area Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index_area_title',
                'name' => 'Title',
                'default' => "Electrician London: We serve all of London!",
                'type' => 'textarea_small',
            ),

            array(
                'id' => 'index_area_short_desc',
                'name' => 'Short Description',
                'default' => "Our Electricians Serve London and Surrounding Areas with Best Electrical Solutions. Contact Us for Reliable Electrical Service at Your Doorstep.",
                'type' => 'textarea_small',
            ),
        ),
    );

    return $index_area;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_area_section');



// repeater add more option for area options 
function index_area_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index_area_repeater',
        'title' => 'Locations',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'area_locations',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Location Name',
        'id' => 'location_name',
        'type' => 'text',
    ));
}

add_action('cmb2_admin_init', 'index_area_metaboxes');