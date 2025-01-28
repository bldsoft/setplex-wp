//
// photo-carousel with fancybox js
jQuery(function ($) {
  if ($.fn.fancybox) {
    $("[data-fancybox='gallery']").fancybox({
      buttons: ["close"],
      loop: true,
      animationEffect: "zoom-in-out"
    });
  }

  function photoCarousel() {
    if (!$(".photo-carousel").hasClass("slick-initialized")) {
      $(".photo-carousel").slick({
        slidesToScroll: 1,
        infinite: false,
        arrows: false,
        dots: false,
        centerMode: false,
        adaptiveHeight: false,
        variableWidth: true,
      });
    }
  }

  photoCarousel();

  $(window).resize($.debounce(100, photoCarousel));
});