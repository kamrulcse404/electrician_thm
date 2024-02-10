document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper(".swiper", {
        direction: "horizontal",
        loop: true,
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 20,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});

