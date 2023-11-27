jQuery(document).ready(function ($) {
// custom tooltip script
    $('[data-toggle="tooltip"]').hover(function () {
        $(this).find('span').remove()
        const topheight = $(this).offset().top;
        const windowHeight = $(window).scrollTop();
        const message = $(this).attr('data-tip');
        if ((windowHeight + 205) >= topheight) {
            $(this).append(' <span class="tooltip-bottom">' + message + '</span>')
        } else {
            $(this).append(' <span class="tooltip-top">' + message + '</span>')
        }
    })
    // number tooltip
    var num = $('.tooltip-sub').length
    $('.tooltip-sub').wrap('<sup class="num-tooltip"></sup>')
    for (i = 0; i < num; i++) {
        $('.tooltip-sub').eq(i).html(i + 1)
    }
})
