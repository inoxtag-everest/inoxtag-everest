// script.js
let countdown = 5;
const interval = setInterval(() => {
    document.querySelector("p").textContent = `Vous allez être redirigé vers notre chaîne YouTube dans ${countdown} secondes.`;
    countdown--;
    if (countdown < 0) {
        clearInterval(interval);
    }
}, 1000);
