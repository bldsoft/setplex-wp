jQuery(function($) {
  const currentUrl = window.location.pathname;

  $(".logo-link-line-list-item-link").each(function () {
      const $link = $(this);

      if ($link.attr("href") === currentUrl) {
          $link.addClass("active");
      }
  });
});

// logo-link-line-slider js
jQuery(function($) {
  if ($(".logo-link-line-slider").length) {
      function onMobileSlider() {
        if ($(".logo-link-line-slider").css("display") === "flex") {
          if ($(".logo-link-line-slider").hasClass("slick-initialized")) {
            $(".logo-link-line-slider").slick("unslick");
          }
        } else {
          if (!$(".logo-link-line-slider").hasClass("slick-initialized")) {
            $(".logo-link-line-slider").slick({
              slidesToScroll: 1,
              slidesToShow: 1,
              infinite: false,
              arrows: true,
              dots: false,
              centerMode: false,
              adaptiveHeight: false,
              variableWidth: true,
            });
          }
        }
      }
  
      onMobileSlider();
  
      $(window).resize($.debounce(100, onMobileSlider));
    }
});