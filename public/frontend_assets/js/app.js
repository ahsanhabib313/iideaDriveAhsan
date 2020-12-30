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

    const foodCta = document.getElementsByClassName('food-order-btn');
    const price = document.querySelectorAll('.price');
    const update = document.querySelector('#update li span');
    console.log(price);
    for (var i = 0; i < foodCta.length; i++) {
        let btn = foodCta[i];

        btn.addEventListener('click', function() {
            let total = 0;
            let priceValue = price[i];


            total = price.value * priceValue;

            update.innerHTML = total

        })
    }

})(jQuery);