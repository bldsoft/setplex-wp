//
// on-mobile-slider js
jQuery(function($) {
  if ($(".on-solutions-slider").length) {
      function onSolutionsSlider() {
        if ($(".on-solutions-slider").css("display") === "flex") {
          if ($(".on-solutions-slider").hasClass("slick-initialized")) {
            $(".on-solutions-slider").slick("unslick");
          }
        } else {
          if (!$(".on-solutions-slider").hasClass("slick-initialized")) {
            $(".on-solutions-slider").slick({
              slidesToScroll: 1,
              slidesToShow: 2.5,
              infinite: false,
              arrows: false,
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
  
      onSolutionsSlider();
  
      $(window).resize($.debounce(100, onSolutionsSlider));
    }
});