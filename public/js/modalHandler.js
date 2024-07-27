// modalHandler.js
function openModal() {
    const modal = document.getElementById('popup-modal');
    modal.style.display = 'flex';
}

function closeModal() {
    const modal = document.getElementById('popup-modal');
    modal.style.display = 'none';
}

export { openModal, closeModal };
