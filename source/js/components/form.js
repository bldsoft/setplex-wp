import { emailNotificationHandler } from "./form-email-notification.js";

window.selectedCountryName = "";

document.addEventListener("DOMContentLoaded", function () {
    const countrySelect = document.getElementById("country");
    const phoneInput = document.getElementById("phone");
    const form = document.getElementById("getademoform");

    let countries = [];

    const iti = intlTelInput(phoneInput, {
        initialCountry: "auto",
        geoIpLookup: function (callback) {
            fetch("https://ipapi.co/json")
                .then(response => response.json())
                .then(data => {
                    callback(data.country_code);
                })
                .catch(() => {
                    callback("US");
                });
        },
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/utils.js"
    });

    function populateCountries() {
        countries = window.intlTelInputGlobals.getCountryData();

        countrySelect.innerHTML = '<option value="" selected disabled>Select</option>';
        countries.forEach(country => {
            const option = document.createElement("option");
            option.value = country.name;
            option.textContent = country.name;
            countrySelect.appendChild(option);
        });
    }

    setTimeout(populateCountries, 500);

    function updateSelectedCountry(code) {
        const country = countries.find(c => c.iso2 === code);
        if (country) {
            window.selectedCountryName = country.name;
        }
    }

    phoneInput.addEventListener("countrychange", function () {
        const selectedCountry = iti.getSelectedCountryData();
        countrySelect.value = selectedCountry.name;
        updateSelectedCountry(selectedCountry.iso2);
    });

    countrySelect.addEventListener("change", function () {
        updateSelectedCountry(this.value);
    });

    if (form) {
        form.addEventListener("submit", emailNotificationHandler);
    } else {
        console.error("Форма не найдена!");
    }
});
