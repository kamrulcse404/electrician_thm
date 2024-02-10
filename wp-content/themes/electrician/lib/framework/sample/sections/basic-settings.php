<?php
defined('ABSPATH') || exit;

// Basic Settings //




// header logo 
Redux::setSection($opt_name, array(
    'title'            => __('Header Section', 'electrician'),
    'id'               => 'header-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'header-logo',
            'type'    => 'media',
            'title' => __('Website Logo', 'electrician'),
            'subtitle' => __('Upload Your Website Logo', 'electrician'),
            'default' => array(
                'url' => get_template_directory_uri() . '/image/logo/logo.png',
            )
        ),

        array(
            'id' => 'header_contact_text',
            'type' => 'text',
            'title' => __('Conatct Title', 'electrician'),
            'default' => 'CALL US NOW',
        ),

        array(
            'id' => 'header_contact_number',
            'type' => 'text',
            'title' => __('Conatct Number', 'electrician'),
            'default' => '(000)123-4567',
        ),
    )
));

Redux::setSection($opt_name, array(
    'title'            => __('Footer Section', 'electrician'),
    'id'               => 'footer-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'footer_contact_facebook',
            'type' => 'text',
            'title' => __('Facebook Url', 'electrician'),
            'default' => 'https://www.facebook.com/',
        ),

        array(
            'id' => 'footer_contact_instagram',
            'type' => 'text',
            'title' => __('Instagram Url', 'electrician'),
            'default' => 'https://www.instagram.com/',
        ),

        array(
            'id' => 'footer_contact_linkedin',
            'type' => 'text',
            'title' => __('Linkendin Url', 'electrician'),
            'default' => 'https://bd.linkedin.com/',
        ),

        array(
            'id' => 'footer_contact_twitter',
            'type' => 'text',
            'title' => __('Twitter Url', 'electrician'),
            'default' => 'https://twitter.com/',
        ),
        array(
            'id' => 'copy_right',
            'type' => 'text',
            'title' => __('Copyright', 'electrician'),
            'default' => 'Copyright © 2024 Electrician London. All right reserved.',
        ),
    )
));


Redux::setSection($opt_name, array(
    'title'            => __('Footer Content', 'electrician'),
    'id'               => 'footer-section-content',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'footer_c_email_title',
            'type' => 'text',
            'title' => __('Email Title', 'electrician'),
            'default' => 'Email Address',
        ),

        array(
            'id' => 'footer_c_email_add',
            'type' => 'text',
            'title' => __('Email Address', 'electrician'),
            'default' => 'example@electricianlondon.co.uk',
        ),


        array(
            'id' => 'footer_c_number_title',
            'type' => 'text',
            'title' => __('Number Title', 'electrician'),
            'default' => 'Phone Number',
        ),

        array(
            'id' => 'footer_c_number',
            'type' => 'text',
            'title' => __('Email Address', 'electrician'),
            'default' => '(000)123-4567',
        ),

        array(
            'id' => 'footer_c_link_title',
            'type' => 'text',
            'title' => __('Links Title', 'electrician'),
            'default' => 'Quick Links',
        ),
    )
));

