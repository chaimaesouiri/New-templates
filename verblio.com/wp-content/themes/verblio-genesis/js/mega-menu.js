jQuery(document).ready(function ($) {
    $('li.menu-heading > .fl-has-submenu-container > a').removeAttr('href');

    $('.customized-megamenu li.mega-menu>.sub-menu').each(function (i, el) {
        var length = $(this).children('li.menu-heading').length;
        if (length > 1) {
            $(this).closest('li.menu-item').addClass('columnar-menu');
        }
        if (length > 2) {
            $(this).closest('li.menu-item').addClass('columnar-menu-3');
        }
    });

});
