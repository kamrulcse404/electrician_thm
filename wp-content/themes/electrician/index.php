<?php

/**
 * Template Name: home
 **/
get_header();

?>


<!-- intro-section-start done -->
<section class="intro">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
                <div class="intro-left">
                    <img src="<?php echo get_post_meta(get_the_ID(), 'index_banner_image', true);  ?>" alt="">
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <div class="intro-right">
                    <div class="intro-text">
                        <h2>
                            <?php echo get_post_meta(get_the_ID(), 'index_banner_title', true);  ?>
                        </h2>
                        <p>

                            <?php echo get_post_meta(get_the_ID(), 'index_banner_description', true);  ?>
                        </p>
                        <div class="contact">
                            <ul>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/image/logo/phone-call.png" alt=""></li>
                                <li>
                                    <?php echo get_post_meta(get_the_ID(), 'index_banner_phone', true);  ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- intro-section-end -->

<!-- service-section-start done -->
<section class="service">
    <div class="service-item">

        <?php
        $serviceItems = get_post_meta(get_the_ID(), "banner_service_items", true);
        if (count($serviceItems) > 0) {
            foreach ($serviceItems as $key => $serviceItem) {
                $title_one = $title_two =  '';
                if (isset($serviceItem['banner_service_item_title_one'])) {
                    $title_one = esc_html($serviceItem['banner_service_item_title_one']);
                }

                if (isset($serviceItem['banner_service_item_title_two'])) {
                    $title_two = esc_html($serviceItem['banner_service_item_title_two']);
                }
        ?>
                <div class="sercice-text">
                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/image/logo/star-logo.png" alt=""></li>
                        <li><?php echo $title_one; ?></li>
                    </ul>

                    <ul>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/image/logo/star-logo.png" alt=""></li>
                        <li><?php echo $title_two; ?></li>
                    </ul>
                </div>


        <?php
            }
        }
        ?>


        <!-- <div class="sercice-text">
            <ul>
                <li><img src="<?php // echo get_template_directory_uri(); 
                                ?>/image/logo/star-logo.png" alt=""></li>
                <li>Licensed & Experienced Electricians</li>
            </ul>
            <ul>
                <li><img src="<?php // echo get_template_directory_uri(); 
                                ?>/image/logo/star-logo.png" alt=""></li>
                <li>100% Satisfaction Guarantee</li>
            </ul>
        </div> -->
        <!-- <div class="sercice-text">
            <ul>
                <li><img src="<?php // echo get_template_directory_uri(); 
                                ?>/image/logo/star-logo.png" alt=""></li>
                <li>24/7 emergency service</li>
            </ul>
            <ul>
                <li><img src="<?php // echo get_template_directory_uri(); 
                                ?>/image/logo/star-logo.png" alt=""></li>
                <li>Competitive prices</li>
            </ul>
        </div> -->
        <!-- <div class="sercice-text">
            <ul>
                <li><img src="<?php //echo get_template_directory_uri(); 
                                ?>/image/logo/star-logo.png" alt=""></li>
                <li>Fast response times</li>
            </ul>
            <ul>
                <li><img src="<? php // echo get_template_directory_uri(); 
                                ?>/image/logo/star-logo.png" alt=""></li>
                <li>Local and reliable</li>
            </ul>
        </div> -->
    </div>
    <div class="service-call">
        <a href="tel:<?php echo get_post_meta(get_the_ID(), 'index_banner_phone', true);  ?>">

            <?php echo get_post_meta(get_the_ID(), 'index_banner_service_title', true);  ?>
        </a>
    </div>
</section>
<!-- service-section-end -->

<!-- ser-include-section-start done -->
<section class="ser-include">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="ser-include-top">
                    <h2>
                        <?php echo get_post_meta(get_the_ID(), 'index_service_title', true);  ?>
                    </h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/image/logo/arrow.png" alt="">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-5">
                <div class="ser-inc-left">
                    <img src="<?php echo get_post_meta(get_the_ID(), 'index_service_image', true);  ?>" alt="mecanic">
                </div>
            </div>
            <div class="col-md-7">
                <div class="inc-services">
                    <p>
                        <?php echo get_post_meta(get_the_ID(), 'index_service_description_one', true);  ?>
                    </p>
                    <p>
                        <?php echo get_post_meta(get_the_ID(), 'index_service_description_two', true);  ?>
                    </p>
                    <div class="include-items">


                        <?php
                        $serviceItems = get_post_meta(get_the_ID(), "service_section_items", true);
                        if (count($serviceItems) > 0) {
                            foreach ($serviceItems as $key => $serviceItem) {
                                $title = '';
                                if (isset($serviceItem['service_item_title'])) {
                                    $title = esc_html($serviceItem['service_item_title']);
                                }
                        ?>

                                <ul>
                                    <li><img src="<?php echo get_template_directory_uri(); ?>/image/logo/right-arrow.png" alt=""></li>
                                    <li>
                                        <?php echo $title; ?>
                                    </li>
                                </ul>


                        <?php
                            }
                        }
                        ?>


                        <!-- <ul>
                            <li><img src="<?php //echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Electrical Maintenance
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Electrical Panel Replacement
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Generac Whole-Home Generator installation
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Gemstone Lights Custom & Architectural Exterior <br>
                                Lighting + Outdoor Lighting
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Whole-Home Surge Protection
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Smoke/Carbon Monoxide Detectors
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Smart Wi-Fi Panels
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Receptacles/Outlets, Switches, Dimmers, and <br>
                                Timers Installation
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                GFCI Outlets
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Ceiling Fans & Fixtures Installation
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                LED Retrofit
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Ballast Replacement
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Range / Dryer Connections
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Dishwasher / Disposal Connections
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                Breakers & Fuses
                            </li>
                        </ul>

                        <ul>
                            <li><img src="<?php // echo get_template_directory_uri(); 
                                            ?>/image/logo/right-arrow.png" alt=""></li>
                            <li>
                                EV Charging Stations
                            </li>
                        </ul> -->

                        <h2>
                            <?php echo get_post_meta(get_the_ID(), 'index_service_and_more', true);  ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- ser-include-section-end -->


<!-- complite -->


<!-- card-section-start done -->
<section class="card-sec">
    <div class="container-fluid">
        <div class="card-top">
            <h2>
                <?php echo get_post_meta(get_the_ID(), 'index_choose_title', true);  ?>
            </h2>
            <div class="card-pera">
                <p>
                    <?php echo get_post_meta(get_the_ID(), 'index_choose_description_one', true);  ?>
                </p>
                <p>
                    <?php echo get_post_meta(get_the_ID(), 'index_choose_description_two', true);  ?>
                </p>
            </div>
        </div>



        <div class="row">


            <?php
            $chooseItems = get_post_meta(get_the_ID(), "choose_items", true);
            if (count($chooseItems) > 0) {
                foreach ($chooseItems as $key => $chooseItem) {
                    $img = $title = $desc = '';
                    if (isset($chooseItem['choose_item_image'])) {
                        $img = esc_html($chooseItem['choose_item_image']);
                    }

                    if (isset($chooseItem['choose_item_title'])) {
                        $title = esc_html($chooseItem['choose_item_title']);
                    }

                    if (isset($chooseItem['choose_item_short_desc'])) {
                        $desc = esc_html($chooseItem['choose_item_short_desc']);
                    }
            ?>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img">
                                    <img src="<?php echo $img; ?>" alt="logo">
                                </div>
                                <div class="card-text">
                                    <h2>
                                        <?php echo $title; ?>
                                        <!-- Expertise and <br> Experience -->
                                    </h2>
                                    <p>
                                        <?php echo $desc; ?>
                                        <!-- A team of experienced and qualified <br> electricians, we are able to handle <br> any electrical job,
                                        regardless of its <br> size. -->
                                    </p>
                                </div>
                                <div class="card-bottom">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/logo/Layer-down.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


            <?php
                }
            }
            ?>
            <!-- <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img">
                            <img src="<?php // echo get_template_directory_uri(); 
                                        ?>/image/logo/online-support.png" alt="...">
                        </div>
                        <div class="card-text">
                            <h2>
                                Unbeatable Customer <br> Service
                            </h2>
                            <p>
                                From our friendly and helpful office <br> staff to our experienced and reliable <br> electricians, we aim to exceed your <br> expectations at every step.
                            </p>
                        </div>
                        <div class="card-bottom">
                            <img src="<?php // echo get_template_directory_uri(); 
                                        ?>/image/logo/Layer-down.png" alt="">
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img">
                            <img src="<?php //echo get_template_directory_uri(); 
                                        ?>/image/logo/date-and-time.png" alt="...">
                        </div>
                        <div class="card-text">
                            <h2>
                                Competitive Prices and <br> Flexible Scheduling
                            </h2>
                            <p>
                                We offer competitive rates and flexible <br> scheduling to meet your needs and <br> budget. We also provide upfront <br> pricing, so you know exactly what to <br> expect before we begin any work.
                            </p>
                        </div>
                        <div class="card-bottom">
                            <img src="<?php // echo get_template_directory_uri(); 
                                        ?>/image/logo/Layer-down.png" alt="">
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img">
                            <img src="<?php // echo get_template_directory_uri(); 
                                        ?>/image/logo/24-hour.png" alt="...">
                        </div>
                        <div class="card-text">
                            <h2>
                                24/7 Emergency <br> Electrical Services
                            </h2>
                            <p>
                                We understand that electrical <br> emergencies can happen at any time. <br> That's why we offer 24/7 emergency <br> electrical services to ensure your <br> safety and peace of mind.
                            </p>
                        </div>
                        <div class="card-bottom">
                            <img src="<?php // echo get_template_directory_uri(); 
                                        ?>/image/logo/Layer-down.png" alt="">
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img">
                            <img src="<?php // echo get_template_directory_uri(); 
                                        ?>/image/logo/rating.png" alt="...">
                        </div>
                        <div class="card-text">
                            <h2>
                                Satisfaction <br> Guaranteed
                            </h2>
                            <p>
                                We are confident in the quality of our <br> work and are proud to offer a 100% <br> satisfaction guarantee. If you are not <br> happy with our service, we will gladly <br> work with you to make it right.
                            </p>
                        </div>
                        <div class="card-bottom">
                            <img src="<?php // echo get_template_directory_uri(); 
                                        ?>/image/logo/Layer-down.png" alt="">
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-img">
                            <img src="<? php // echo get_template_directory_uri(); 
                                        ?>/image/logo/award.png" alt="...">
                        </div>
                        <div class="card-text">
                            <h2>
                                Local and <br> Trusted
                            </h2>
                            <p>
                                Locally owned and operated, we <br> offer our customers exceptional <br> customer service and are committed <br> to supporting our local community.
                            </p>
                        </div>
                        <div class="card-bottom">
                            <img src="<?php // echo get_template_directory_uri(); 
                                        ?>/image/logo/Layer-down.png" alt="">
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>
<!-- card-section-end -->

<!-- emargency-section-start done -->
<section class="emargency-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="emergency-left">
                    <h2>
                        <?php echo get_post_meta(get_the_ID(), 'index_emergency_title', true);  ?>
                    </h2>
                    <p>
                        <?php echo get_post_meta(get_the_ID(), 'index_emergency_desc', true);  ?>
                    </p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="emergency-right">
                    <div class="emargency-right-top">
                        <span>
                            <?php echo get_post_meta(get_the_ID(), 'index_emergency_sub_title', true);  ?>
                        </span>
                    </div>
                    <!-- emargency-top-end -->



                    <div class="emergency-right-bottom">
                        <div class="row">


                            <?php
                            $emergencyItems = get_post_meta(get_the_ID(), "emergency_items", true);
                            if (count($emergencyItems) > 0) {
                                foreach ($emergencyItems as $key => $emergencyItem) {
                                    $title = $desc = '';
                                    if (isset($emergencyItem['emergency_option_title'])) {
                                        $title = esc_html($emergencyItem['emergency_option_title']);
                                    }

                                    if (isset($emergencyItem['emergency_option_short_desc'])) {
                                        $desc = esc_html($emergencyItem['emergency_option_short_desc']);
                                    }
                            ?>

                                    <div class="col-md-6">
                                        <div class="emer-item">
                                            <div class="star-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/image/logo/star.png" alt="">
                                            </div>
                                            <h2>
                                                <?php echo $title; ?>
                                                <!-- Fast response times -->
                                            </h2>
                                            <p>
                                                <?php echo $desc; ?>
                                                <!-- We understand that electrical <br> emergencies require immediate attention. <br> That's why we offer a 60-minute response <br> time guarantee within London. -->
                                            </p>
                                        </div>
                                    </div>


                            <?php
                                }
                            }
                            ?>

                            <!-- <div class="col-md-6">
                                <div class="emer-item">
                                    <div class="star-img">
                                        <img src="<? php // echo get_template_directory_uri(); 
                                                    ?>/image/logo/star.png" alt="">
                                    </div>
                                    <h2>24/7 availability</h2>
                                    <p>We are available 24 hours a day, 7 days a <br> week, 365 days a year to respond to your <br> emergency.</p>
                                </div>
                            </div> -->

                            <!-- <div class="col-md-6">
                                <div class="emer-item">
                                    <div class="star-img">
                                        <img src="<? php // echo get_template_directory_uri(); 
                                                    ?>/image/logo/star.png" alt="">
                                    </div>
                                    <h2>Highly skilled and <br>
                                        experienced electricians</h2>
                                    <p>Our team is composed of qualified and <br> licensed electricians with extensive <br> experience in resolving all types of <br> electrical emergencies.</p>
                                </div>
                            </div> -->

                            <!-- <div class="col-md-6">
                                <div class="emer-item">
                                    <div class="star-img">
                                        <img src="<?php // echo get_template_directory_uri(); 
                                                    ?>/image/logo/star.png" alt="">
                                    </div>
                                    <h2>Upfront pricing</h2>
                                    <p>We provide transparent pricing upfront, so <br> you know exactly what to expect before <br> we begin any work.</p>
                                </div>
                            </div> -->

                            <!-- <div class="col-md-6">
                                <div class="emer-item">
                                    <div class="star-img">
                                        <img src="<?php //echo get_template_directory_uri(); 
                                                    ?>/image/logo/star.png" alt="">
                                    </div>
                                    <h2>Safe and reliable service</h2>
                                    <p>We prioritise safety in everything we do, <br> ensuring that your home or business is <br> safe from electrical hazards.</p>
                                </div>
                            </div> -->

                            <div class="col-md-6">
                                <div class="emer-text">
                                    <h3>
                                        <?php echo get_post_meta(get_the_ID(), 'index_emergency_short_note', true);  ?>
                                    </h3>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- emargency-section-end -->

<!-- back-img-sect-start  done -->

<section class="back-img" style="width: 100%; height: 750px; background-image: url('<?php echo get_template_directory_uri(); ?>/image/technician-switchboard.png'); background-repeat: no-repeat; background-size: cover; margin-top: -200px;">

</section>

<!-- back-img-sect-end -->





<!-- kamrul start -->
<!-- testimonial section start  -->

<section class="testimonials">
    <div class="t-content">
        <div class="t-header">
            <div class="t-title">
                <p>
                    <?php echo get_post_meta(get_the_ID(), 'index_testimonial_title', true);  ?>
                </p>
            </div>
            <div class="qout-tag">
                <i class="ri-double-quotes-r"></i>
            </div>
        </div>
        <div class="swiper">
            <div class="complements swiper-wrapper">



                <?php
                $testimonials = get_post_meta(get_the_ID(), "testimonial_items", true);
                if (count($testimonials) > 0) {
                    foreach ($testimonials as $key => $testimonial) {
                        $name = $desgination = $complement = '';
                        if (isset($testimonial['testimonial_item_name'])) {
                            $name = esc_html($testimonial['testimonial_item_name']);
                        }

                        if (isset($testimonial['testimonial_item_designation'])) {
                            $desgination = esc_html($testimonial['testimonial_item_designation']);
                        }

                        if (isset($testimonial['testimonial_item_desc'])) {
                            $complement = esc_html($testimonial['testimonial_item_desc']);
                        }
                ?>

                        <div class="testimonial">
                            <div class="t-comment">
                                <p>
                                    <?php echo $complement; ?>
                                </p>
                                <div class="arrow"></div>
                            </div>
                            <div class="t-name">
                                <p><?php echo $name; ?></p>
                            </div>
                            <div class="t-degignation">
                                <p><?php echo $desgination; ?></p>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>


                <!-- <div class="testimonial">
                    <div class="t-comment">
                        <p>
                            “They're amazing technicians. They go the extra mile to make
                            sure you have a great experience. I'll recommend Electricians
                            London to everyone I know in need of electrical services.
                            Thanks!”
                        </p>
                        <div class="arrow"></div>
                    </div>
                    <div class="t-name">
                        <p>John Smith,</p>
                    </div>
                    <div class="t-degignation">
                        <p>Homeowner in Kensington</p>
                    </div>
                </div>
                
                <div class="testimonial">
                    <div class="t-comment">
                        <p>
                            "I needed a new light fixture installed and Electricians
                            London was able to come out the same day! I would recommend
                            them to anyone who needs electrical work."
                        </p>
                        <div class="arrow"></div>
                    </div>
                    <div class="t-name">
                        <p>Jane Doe,</p>
                    </div>
                    <div class="t-degignation">
                        <p>Business owner in Camden Town</p>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="t-comment">
                        <p>
                            “My problem was finally fixed by these guys after going
                            through 2 different companies. I would highly recommend
                            Electricians London for any electrical service needs.”
                        </p>
                        <div class="arrow"></div>
                    </div>
                    <div class="t-name">
                        <p>Mary and John S.,</p>
                    </div>
                    <div class="t-degignation">
                        <p>Homeowner in Islington</p>
                    </div>
                </div> -->


            </div>
        </div>
    </div>

    <!-- swiper-slide  -->
</section>

<!-- testimonial section end -->


<!-- area section start done  -->

<section class="area">
    <div class="area-details">
        <div class="area-title">
            <p>
                <?php echo get_post_meta(get_the_ID(), 'index_area_title', true);  ?>
            </p>
        </div>
        <div class="area-desc">
            <p>
                <?php echo get_post_meta(get_the_ID(), 'index_area_short_desc', true);  ?>
            </p>
        </div>
        <div class="locations">

            <?php
            $locations = get_post_meta(get_the_ID(), "area_locations", true);
            if (count($locations) > 0) {
                foreach ($locations as $key => $location) {
                    $area_loctn = '';
                    if (isset($location['location_name'])) {
                        $area_loctn = esc_html($location['location_name']);
                    }
            ?>
                    <p><?php echo $area_loctn; ?></p>
            <?php
                }
            }
            ?>

        </div>
    </div>
</section>

<!-- area section end -->

<?php
get_footer();
?>