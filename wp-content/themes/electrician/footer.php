<section>
    <footer>
        <div class="social-media">
            <div class="media">
                <a href="<?php global $electrician;
                            echo $electrician['footer_contact_facebook'] ?>"><i class="ri-facebook-fill"></i> Facebook</a>
            </div>
            <div class="media">
                <a href="<?php global $electrician;
                            echo $electrician['footer_contact_instagram'] ?>"><i class="ri-instagram-line"></i> Instagram</a>
            </div>
            <div class="media">
                <a href="<?php global $electrician;
                            echo $electrician['footer_contact_linkedin'] ?>"><i class="ri-linkedin-line"></i> Linkedin</a>
            </div>
            <div class="media">
                <a href="<?php global $electrician;
                            echo $electrician['footer_contact_twitter'] ?>"><i class="ri-twitter-line"></i> Twitter</a>
            </div>
        </div>

        <div class="footer-contact">
            <div class="footer-contact-details">
                <h5><?php global $electrician;
                    echo $electrician['footer_c_email_title'] ?></h5>
                <p><?php global $electrician;
                    echo $electrician['footer_c_email_add'] ?></p>
            </div>
            <div class="footer-contact-details">
                <h5><?php global $electrician;
                    echo $electrician['footer_c_number_title'] ?></h5>
                <p><?php global $electrician;
                    echo $electrician['footer_c_number'] ?></p>
            </div>
            <div class="quick-links">
                <h5><?php global $electrician;
                    echo $electrician['footer_c_link_title'] ?></h5>

                <!-- <ul class="links">
                    <li class="link">
                        <a href="#">Home</a>
                    </li>

                    <li class="link">
                        <a href="#">Services</a>
                    </li>

                    <li class="link">
                        <a href="#">Tesimonial</a>
                    </li>

                    <li class="link">
                        <a href="#">Contact</a>
                    </li>
                </ul> -->

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer_menu',
                    'container'      => 'ul',
                    'menu_class'     => 'links',
                ));
                ?>




            </div>
        </div>

        <div class="footer-last">
            <p><?php global $electrician;
                echo $electrician['copy_right'] ?></p>
        </div>
    </footer>
</section>

<!-- kamrul end  -->







<!-- <script src="<?php // echo get_template_directory_uri(); 
                    ?>/js/bootstrap.min.js"></script> -->
<!-- <script src="<?php // echo get_template_directory_uri(); 
                    ?>/js/main.js"></script> -->


<!-- kamrul start  -->

<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     var swiper = new Swiper(".swiper", {
    //         direction: "horizontal",
    //         loop: true,
    //         slidesPerView: 3,
    //         centeredSlides: true,
    //         spaceBetween: 20,

    //         pagination: {
    //             el: ".swiper-pagination",
    //             clickable: true,
    //         },

    //         navigation: {
    //             nextEl: ".swiper-button-next",
    //             prevEl: ".swiper-button-prev",
    //         },
    //     });
    // });
</script>

<!-- kamrul end  -->

<?php wp_footer(); ?>

</body>

</html>