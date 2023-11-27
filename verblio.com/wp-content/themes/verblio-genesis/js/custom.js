"use strict";

function initSmoothScroll() {
    jQuery('a[href^="#"]:not([href="#"]):not(.ez-toc-link)').each(function () {
        var o = jQuery(this);
        o.on("click", function (t) {
            t.preventDefault();
            t = jQuery(o.attr("href")).offset().top;
            jQuery("html, body").animate({scrollTop: t + 1}, 800)
        })
    })
}

jQuery(document).ready(function () {
    initSmoothScroll()
});
