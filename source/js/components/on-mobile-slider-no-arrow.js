//
// on-mobile-slider js
jQuery(function($) {
  if ($(".on-mobile-slider-no-arrow").length) {
      function onMobileSliderNoArrow() {
        if ($(".on-mobile-slider-no-arrow").css("display") === "flex") {
          if ($(".on-mobile-slider-no-arrow").hasClass("slick-initialized")) {
            $(".on-mobile-slider-no-arrow").slick("unslick");
          }
        } else {
          if (!$(".on-mobile-slider-no-arrow").hasClass("slick-initialized")) {
            $(".on-mobile-slider-no-arrow").slick({
              slidesToScroll: 1,
              slidesToShow: 1,
              infinite: false,
              arrows: false,
              dots: false,
              centerMode: false,
              adaptiveHeight: false,
              responsive: [
                {
                  breakpoint: 1023,
                  settings: {
                    slidesToScroll: 1,
                    slidesToShow: 2.3,
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToScroll: 1,
                    slidesToShow: 1.8,
                  }
                },
                {
                  breakpoint: 650,
                  settings: {
                  slidesToScroll: 1,
                  slidesToShow: 1.5,
                  }
                },
                {
                  breakpoint: 450,
                  settings: {
                  slidesToScroll: 1,
                  slidesToShow: 1.2,
                  }
                }
              ]
            });
          }
        }
      }
  
      onMobileSliderNoArrow();
  
      $(window).resize($.debounce(100, onMobileSliderNoArrow));
    }
});