document.addEventListener('DOMContentLoaded', () => {
  function initLangSwitcher() {
    const switcher = document.querySelector('.lang-switcher');
    const toggleButton = switcher.querySelector('.lang-switcher-toggle');
    const languageList = switcher.querySelector('.lang-switcher-list');

    toggleButton.addEventListener('click', (event) => {
      event.stopPropagation();
      switcher.classList.toggle('open');
    });

    document.addEventListener('click', (event) => {
      if (!switcher.contains(event.target)) {
        switcher.classList.remove('open');
      }
    });
  }

  initLangSwitcher();

  document.querySelector('.burger').addEventListener('click', () => {
    const mobileSwitcher = document.querySelector('.menu-mobile .lang-switcher');
    if (mobileSwitcher && !mobileSwitcher.dataset.initialized) {
      mobileSwitcher.dataset.initialized = true;
      const toggleButton = mobileSwitcher.querySelector('.lang-switcher-toggle');
      const languageList = mobileSwitcher.querySelector('.lang-switcher-list');
  
      toggleButton.addEventListener('click', (event) => {
        event.stopPropagation();
        mobileSwitcher.classList.toggle('open');
      });
  
      document.addEventListener('click', (event) => {
        if (!mobileSwitcher.contains(event.target)) {
          mobileSwitcher.classList.remove('open');
        }
      });
    }
  });
});
