<?php

echo '  <h1>Sayı Tahmin Oyunu</h1>
  <p>1 ile 100 arasında bir sayı tuttum. Tahmin etmeye çalışın.</p>
  <input type="number" id="guess" placeholder="Tahmininizi girin">
  <button onclick="checkGuess()">Tahmin Et</button>
  <p id="message"></p>

  <script>
    // Rastgele bir sayı seçme
    const targetNumber = Math.floor(Math.random() * 100) + 1;
    let numberOfTries = 0;

    function checkGuess() {
      const guess = parseInt(document.getElementById("guess").value);
      const message = document.getElementById("message");

      if (isNaN(guess)) {
        message.textContent = "Lütfen bir sayı girin.";
      } else {
        numberOfTries++;
        if (guess === targetNumber) {
          message.textContent = `Tebrikler! ${targetNumber} sayısını ${numberOfTries} denemede buldunuz.`;
        } else if (guess < targetNumber) {
          message.textContent = "Daha büyük bir sayı deneyin.";
        } else {
          message.textContent = "Daha küçük bir sayı deneyin.";
        }
      }
    }
  </script>

';














?>