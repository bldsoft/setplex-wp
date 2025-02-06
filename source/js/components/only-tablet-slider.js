//
// only-tablet-slider js
jQuery(function($) {
  if ($(".only-tablet-slider").length) {
    function onlyTabletSlider() {
      if ($(".only-tablet-slider").css("display") === "flex") {
        if ($(".only-tablet-slider").hasClass("slick-initialized")) {
          $(".only-tablet-slider").slick("unslick");
        }
      } else {
        if (!$(".only-tablet-slider").hasClass("slick-initialized")) {
          $(".only-tablet-slider").slick({
            slidesToScroll: 1,
            slidesToShow: 2.5,
            infinite: false,
            arrows: true,
            dots: false,
            centerMode: false,
            adaptiveHeight: false,
            responsive: [
              {
                breakpoint: 1200,
                settings: {
                  slidesToScroll: 1,
                  slidesToShow: 2.5,
                }
              },
              {
                breakpoint: 1023,
                settings: {
                  slidesToScroll: 1,
                  slidesToShow: 2,
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToScroll: 1,
                  slidesToShow: 1.5,
                }
              }
            ]
          });
        }
      }
    }

    onlyTabletSlider();

    $(window).resize($.debounce(100, onlyTabletSlider));
  }
});
