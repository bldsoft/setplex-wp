document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector(".thnx-block")) {
    let time = 10; // Initial countdown value
    const countdownElement = document.getElementById("countdown");

    if (!countdownElement) return; // Safety check in case element is missing

    const timer = setInterval(() => {
      time--;
      countdownElement.textContent = time;
      
      if (time <= 0) {
        clearInterval(timer);
        window.location.href = "https://setplex.com"; // Redirect
      }
    }, 1000);
  }
});
