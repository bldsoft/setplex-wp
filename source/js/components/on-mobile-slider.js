//
// on-mobile-slider js
jQuery(function($) {
  if ($(".on-mobile-slider").length) {
      function onMobileSlider() {
        if ($(".on-mobile-slider").css("display") === "flex") {
          if ($(".on-mobile-slider").hasClass("slick-initialized")) {
            $(".on-mobile-slider").slick("unslick");
          }
        } else {
          if (!$(".on-mobile-slider").hasClass("slick-initialized")) {
            $(".on-mobile-slider").slick({
              slidesToScroll: 1,
              slidesToShow: 1,
              infinite: false,
              arrows: true,
              dots: false,
              centerMode: false,
              adaptiveHeight: false,
              responsive: [
                {
                  breakpoint: 1023,
                  settings: {
                    slidesToScroll: 1,
                    slidesToShow: 2.5,
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToScroll: 1,
                    slidesToShow: 2,
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
  
      onMobileSlider();
  
      $(window).resize($.debounce(100, onMobileSlider));
    }
});