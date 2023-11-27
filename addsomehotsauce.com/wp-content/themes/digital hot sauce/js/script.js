const swiper = new Swiper('.popular_posts', {
    // Optional parameters
    loop: true,
    slidesPerView: 'auto',
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

(function ($) {
  $(function () {
    $('.meta_post .x-feature-box-graphic-inner').on('click', function () {
      $(this).closest('.meta_post').find('.lorem').slideToggle();
      $(this).closest('.meta_post').toggleClass('im-active');
    })  
  });
}(jQuery))