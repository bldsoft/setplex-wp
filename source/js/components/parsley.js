jQuery(document).ready(function ($) {
  $('#getademoform').parsley();

  // Кастомные сообщения
  Parsley.addMessages('en', {
      required: "This field is required.",
      email: "Enter a valid email.",
      pattern: "Invalid format.",
  });

  Parsley.setLocale('en');
});
