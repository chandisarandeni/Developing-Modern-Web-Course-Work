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
