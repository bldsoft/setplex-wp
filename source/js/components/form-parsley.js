jQuery(document).ready(function ($) {
  if (typeof $.fn.parsley === "undefined") {
      return;
  }

  var $form = $("#getademoform").parsley();

  //phone
  window.Parsley.addValidator("phoneLength", {
      validateString: function (value) {
          var digits = value.replace(/\D/g, "");
          return digits.length >= 10;
      },
      messages: {
          en: "Enter a valid phone number with at least 10 digits."
      }
  });

  $("#phone").attr("data-parsley-phoneLength", "true");

  const emailDomains = ["gmail.com", "yahoo.com", "hotmail.com"];

  // Добавляем кастомный валидатор для email
  window.Parsley.addValidator('emailDomainCheck', {
    validateString: function (value, requirement, instance) {
      const form = instance.$element.closest('form');

      // Если у формы есть класс allow-free-email — пропускаем проверку
      if (form.hasClass('allow-free-email')) {
          return true;
      }

      // Проверяем, содержит ли email запрещенный домен
      const emailDomain = value.split('@').pop().toLowerCase();
      return !emailDomains.includes(emailDomain);
    },
    messages: {
      en: 'Please enter a valid work email address.'
    }
  });

  $('#email').attr('data-parsley-emailDomainCheck', 'true');

  $form.on("form:submit", function () {
      if (!$form.isValid()) {
          return false;
      }
  });

  Parsley.setLocale("en");
});
