import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// public/js/app.js
document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("popup-modal");
    var closeButton = document.querySelector(".close-button");
    var unlockButton = document.querySelector(".unlock-button");

    function openModal() {
        modal.style.display = "flex";
    }

    function closeModal() {
        modal.style.display = "none";
    }

    closeButton.addEventListener("click", closeModal);
    unlockButton.addEventListener("click", closeModal);

    // Simulação de conteúdo bloqueado
    var blockedContents = document.querySelectorAll(".chat-quant");
    blockedContents.forEach(function(content) {
        content.addEventListener("click", openModal);
    });

    window.addEventListener("click", function(event) {
        if (event.target == modal) {
            closeModal();
        }
    });
});
