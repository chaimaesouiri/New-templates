$(document).ready(function () {

    $('.sk-faq > .sk-faq__element').each(function (index, el) {
        $(el).attr('data-q', index);
    });

    $('.sk-faq > .sk-faq__element').each(function (index, el) {

        $(el).click(function () {
            if ($(el).hasClass('active')) {
                $(this).find('.sk-faq__answer').removeClass('active');
                $(this).removeClass('active');
            } else {
                $('.sk-faq .sk-faq__element').each(function (i) {
                    $(`.sk-faq__element[data-q=${i}]`).find('.sk-faq__answer').removeClass('active');
                    $(`.sk-faq__element[data-q=${i}]`).removeClass('active');
                });

                $(this).find('.sk-faq__answer').addClass('active');
                $(this).addClass('active');
            }
        });
    });

    lazyframe('.lazyframe', {
        // apikey: ' AIzaSyAexyNUAXTxpz8fPX-nzibT-T8WM1SitZQ' // Sorry, will only work on this domain
    });
    
    $('.slider-for').slick({ 
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        swipe: 'false',
        swipeToSlide: false,
        draggable: false,
        accessibility: false,
        dots: false,
        fade: true,
        asNavFor: '.slider-nav',
        touchMove: false

    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        touchMove: true,
        arrows: false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    centerMode: true
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    centerMode: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    centerMode: true
                }
            }
        ]
    });

    new WOW().init();

});