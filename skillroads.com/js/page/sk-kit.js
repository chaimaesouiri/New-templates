"use strict"; // Stay sharp

$('body > .top').affix({
    offset: {
        top: 50,
        bottom: function () {
            return (this.bottom = $('.footer').outerHeight(true))
        }
    }
});

$('.slider').slick({
    dots: true,
    arrows: false
});