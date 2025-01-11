// burger
jQuery(function ($) {
  if ($(".burger").length) {
    $(".burger").click(function () {
      $(".container").toggleClass("mm-o");
      return false;
    });
  }
});

// mobile menu
document.querySelectorAll('.menu-mobile .menu-item-has-children').forEach((item) => {
  item.addEventListener('click', (e) => {
      e.preventDefault();

      const subMenu = item.querySelector('.sub-menu-wrapper');
      const arrow = item.querySelector('.menu-chevron-icon');

      arrow.classList.toggle('rotated');

      if (subMenu.style.maxHeight) {
          subMenu.style.maxHeight = null;
      } else {
          subMenu.style.maxHeight = subMenu.scrollHeight + 'px';
      }
  });
});

// top-alert-bar
document.addEventListener('DOMContentLoaded', function () {
  const closeButton = document.querySelector('.top-alert-bar-close');
  const alertBar = document.querySelector('.top-alert-bar');

  closeButton.addEventListener('click', function () {
    alertBar.classList.add('hidden');
  
    setTimeout(() => {
      alertBar.remove();
    }, 300);
  });
});

// top-alert-bar slider
jQuery(function ($) {
  $('.top-alert-bar-list').slick({
    vertical: true,
    verticalSwiping: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
    arrows: false,
    dots: false,
  });
});