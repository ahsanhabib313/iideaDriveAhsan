(function($) {
    // FOR PRODUCT CARD SLIDER
    $('.food-slider').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        arrows: false,
        speed: 200,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: true,
                    arrows: false,
                }
            }
        ]
    });

    const foodCta = document.querySelector('#food-cta button');
    const price = document.querySelector('#price').textContent;
    const update = document.querySelector('#update li span');

    foodCta.addEventListener('click', function() {
        update.textContent = price
    });

})(jQuery);