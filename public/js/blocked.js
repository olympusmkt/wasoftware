// blocked.js
document.addEventListener('DOMContentLoaded', function() {
    // Função para abrir o modal
    function openModal() {
        const modal = document.getElementById('popup-modal');
        if (modal) {
            modal.style.display = 'flex';
        }
    }

    // Função para fechar o modal
    function closeModal() {
        const modal = document.getElementById('popup-modal');
        if (modal) {
            modal.style.display = 'none';
        }
    }

    // Adiciona o listener de click a todos os elementos com a classe 'blocked'
    document.querySelectorAll('.blocked').forEach(function(element) {
        element.addEventListener('click', openModal);
    });

    // Adiciona o listener de click ao botão de fechar modal
    const closeButton = document.querySelector('.close-button');
    if (closeButton) {
        closeButton.addEventListener('click', closeModal);
    }

    // Fechar o modal clicando fora dele
    window.addEventListener('click', function(event) {
        const modal = document.getElementById('popup-modal');
        if (modal && event.target === modal) {
            closeModal();
        }
    });
});
