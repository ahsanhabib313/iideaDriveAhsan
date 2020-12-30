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




    const btns = document.getElementById("btn");
    const primaryDisplay = document.getElementById("display");
    const secondaryDisplay = document.getElementById("secondary-display");
    let currentString = '';
    let resultString = '';
    let evalResult;
    let lastOperator = false;
    const primaryRender = (value) => {
            primaryDisplay.innerText = value;
        }
        /*const btns = document.getElementById("btn");
        const primaryDisplay = document.getElementById("display");
        const secondaryDisplay = document.getElementById("secondary-display");*/
    const secondaryRender = (value) => {
        secondaryDisplay.innerText = value;
    }
    secondaryRender('0');
    primaryRender('0');

    const evaluate = (e) => {
        let width = secondaryDisplay.scrollWidth;
        if (width > 310) {
            secondaryDisplay.style.overflowX = 'scroll';
            secondaryDisplay.scrollLeft = width;
        }
        /*const btns = document.getElementById("btn");
const primaryDisplay = document.getElementById("display");
const secondaryDisplay = document.getElementById("secondary-display");*/
        else {
            secondaryDisplay.style.overflowX = 'hidden';
        }

        let value = e.target.innerText;
        if (value >= '0' && value <= '9') {
            let len = currentString.length;
            let lastOp = isOp(currentString[len - 1]);
            if (lastOperator) {
                currentString = currentString.concat(value);
                resultString = "".concat(value);
                secondaryRender(currentString);
                primaryRender(resultString);
                lastOperator = false;
                /*const btns = document.getElementById("btn");
const primaryDisplay = document.getElementById("display");
const secondaryDisplay = document.getElementById("secondary-display");*/
            } else {
                currentString = currentString.concat(value);
                resultString = resultString.concat(value);
                secondaryRender(currentString);
                primaryRender(resultString);
            }

        } else if (isOp(value)) {
            if (currentString.length == 0 && (value == '/' || value == '*'));
            /*const btns = document.getElementById("btn");
const primaryDisplay = document.getElementById("display");
const secondaryDisplay = document.getElementById("secondary-display");*/
            else {
                resultString = "";
                primaryRender(value);
                lastOperator = true;
                let len = currentString.length;
                let lastOp = isOp(currentString[len - 1]);
                if (lastOp) {
                    currentString = currentString.substr(0, len - 1) + value;
                    console.log(currentString);
                    secondaryRender(currentString);
                    decimal = false;
                } else {
                    currentString = currentString.concat(value);
                    secondaryRender(currentString);
                }
            }
            /*const btns = document.getElementById("btn");
            const primaryDisplay = document.getElementById("display");
            const secondaryDisplay = document.getElementById("secondary-display");*/
        } else if (value == '.') {
            if (resultString.indexOf('.') < 0) {
                if (resultString.length == 0) {
                    currentString = currentString.concat('0.');
                    resultString = resultString.concat('0.');
                    secondaryRender(currentString);
                    primaryRender(resultString);
                }
                /*const btns = document.getElementById("btn");
                const primaryDisplay = document.getElementById("display");
                const secondaryDisplay = document.getElementById("secondary-display");*/
                else {
                    currentString = currentString.concat(value);
                    resultString = resultString.concat(value);
                    secondaryRender(currentString);
                    primaryRender(resultString);
                }
            }
        } else if (value == '=') {
            secondaryDisplay.style.overflowX = 'hidden';

            if (currentString.length == 0);
            else {
                let result = eval(currentString);
                resultString = '';
                currentString = '';
                secondaryRender('0');
                primaryRender(result);
            }
            /*const btns = document.getElementById("btn");
            const primaryDisplay = document.getElementById("display");
            const secondaryDisplay = document.getElementById("secondary-display");*/
        } else if (value == 'clear') {
            currentString = '';
            resultString = '';
            secondaryRender('0');
            primaryRender('0');
        }
        let width1 = primaryDisplay.scrollWidth;
        if (width1 > 310) {
            primaryDisplay.style.overflowX = 'scroll';
        } else {
            primaryDisplay.style.overflowX = 'hidden';
        }
    }

    /*const btns = document.getElementById("btn");
    const primaryDisplay = document.getElementById("display");
    const secondaryDisplay = document.getElementById("secondary-display");*/
    for (let elem of btns.children) {
        elem.addEventListener('click', evaluate);
    }

    function isOp(value) {
        return (/\+|\-|\*|\//).test(value);
    }

})(jQuery);