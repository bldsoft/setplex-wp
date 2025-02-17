// modal window
jQuery(function($) {
  // Открытие модального окна при клике на любую из кнопок
  $("#openModalBtn1, #openModalBtn2, #openModalBtn3").on("click", function() {
    $("#my-modal").fadeIn();
    $("body").css("overflow", "hidden");
  });

  // Закрытие модального окна при клике на крестик
  $(".close").on("click", function() {
    $("#my-modal").fadeOut();
    $("body").css("overflow", "");
  });

  // Закрытие модального окна при клике вне его
  $(window).on("click", function(event) {
    if ($(event.target).is("#my-modal")) {
        $("#my-modal").fadeOut();
        $("body").css("overflow", "");
    }
  });

  // Закрытие модального окна при нажатии клавиши Esc
  $(document).on("keydown", function(event) {
    if (event.key === "Escape") { // Проверка, что нажата клавиша Esc
        $("#my-modal").fadeOut();
        $("body").css("overflow", "");
    }
  });
});
