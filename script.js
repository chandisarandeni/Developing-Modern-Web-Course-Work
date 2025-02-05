document.addEventListener("DOMContentLoaded", function () {
    function startCountdown(targetDate) {
        function updateTimer() {
            const now = new Date().getTime();
            const timeLeft = targetDate - now;

            if (timeLeft < 0) {
                clearInterval(timerInterval);
                document.querySelector(".timer-circles").innerHTML = "<h3>Time's up!</h3>";
                return;
            }

            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.querySelector(".pink-circle").textContent = days;
            document.querySelector(".orange-circle").textContent = hours;
            document.querySelector(".purple-circle").textContent = minutes;
            document.querySelector(".blue-circle").textContent = seconds;
        }

        updateTimer();
        const timerInterval = setInterval(updateTimer, 1000);
    }

    const targetDate = new Date("2025-12-31T23:59:59").getTime(); // Set your target date here
    startCountdown(targetDate);
});


document.addEventListener("DOMContentLoaded", () => {
    // Get the reset button by its ID or class
    const resetButton = document.querySelector("button[type='submit']:nth-child(2)");
  
    // Add click event listener to the reset button
    resetButton.addEventListener("click", (event) => {
      event.preventDefault(); // Prevent the form from submitting
  
      // Get all input fields and textarea within the form
      const form = resetButton.closest("form");
      const inputs = form.querySelectorAll("input");
      const textarea = form.querySelector("textarea");
  
      // Clear the value of all input fields
      inputs.forEach(input => input.value = "");
  
      // Clear the value of the textarea
      textarea.value = "";
    });
  });
  