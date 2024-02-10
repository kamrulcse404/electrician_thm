<?php

global $electrician;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php language_attributes() ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- header-section-start -->
    <section class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <a href="#">
                        <div class="header-logo">
                            <!-- <h2>Electricians</h2>
                            <br>
                            <h3><span>24/7</span>LONDON</h3> -->
                            <a href="<?php echo home_url() ?>">
                                <img src="<?php echo $electrician['header-logo']['url'] ?>" alt="logo">
                            </a>
                        </div>
                    </a>
                </div>
                <!-- header-logo-end -->

                <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                    <div class="header-body">
                        <!-- <ul class="header-nav">
                            <li class="header-item">
                                <a href="#">HOME.</a>
                            </li>
                            <li class="header-item">
                                <a href="#">SERVICES.</a>
                            </li>
                            <li class="header-item">
                                <a href="#">TESTIMONIAL.</a>
                            </li>
                            <li class="header-item">
                                <a href="#">CONTACT.</a>
                            </li>
                        </ul> -->

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header_menu',
                            'container'      => 'ul',
                            'menu_class'     => 'links',
                        ));
                        ?>



                    </div>
                </div>
                <!-- header-link-end -->

                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="call-btn">
                        <a href="tel:<?php echo $electrician['header_contact_number']; ?>">
                            <?php echo $electrician['header_contact_text']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header-section-end -->