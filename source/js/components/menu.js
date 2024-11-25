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

// additional text
document.addEventListener('DOMContentLoaded', () => {
  const language = document.documentElement.lang;
  const subMenu = document.querySelector('.menu-item-7 .sub-menu');
  
  const translations = {
    'en': 'Our Solutions',
    'es': 'Nuestras Soluciones'
  };

  subMenu.setAttribute('data-text', translations[language] || 'Our Solutions');
});