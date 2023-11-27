function goGa(category,label) {
    ga('send', {
        hitType: 'event',
        eventCategory: category,
        eventAction: 'push',
        eventLabel: label
    });
}

$('[data-ge]').click(function () {
    goGa($(this).data('category'),$(this).data('label'))
});
