export function emailNotificationHandler(event) {
  event.preventDefault();

  const form = event.target;

  if (!$(form).parsley().isValid()) {
      $(form).parsley().validate();
      return;
  }

  const formData = new FormData(form);
  const formValues = {};
  formData.forEach((value, key) => { formValues[key] = value; });

  // Получаем значение country_full_name из скрытого поля
  formValues.country_full_name = document.getElementById("country_full_name").value;

  const params = new URLSearchParams({
    action: "send_salesforce_form_email",
    ...formValues
  });

  fetch(ajaxUrl, {
      method: "POST",
      body: new URLSearchParams({
          action: "send_salesforce_form_email",
          ...formValues
      }),
      headers: { "Content-Type": "application/x-www-form-urlencoded" }
  })
  .then(response => response.json())
  .then(data => {
      if (data.success) {
          console.log("📨 Успешно отправлено в Salesforce!");
          form.removeEventListener("submit", emailNotificationHandler);
          form.submit();
      } else {
          alert("❌ Ошибка отправки уведомления на email!");
      }
  })
  .catch(error => {
      console.error("❌ Ошибка при отправке данных:", error);
      alert("❌ Ошибка при отправке данных. Попробуйте позже.");
  });
}
