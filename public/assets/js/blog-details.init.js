/************** Blog Slider *************/

var swiper = new Swiper(".clubSlider", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        200: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
    },
});

var swiper = new Swiper(".clubdetailSlider", {
    loop: true,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});
