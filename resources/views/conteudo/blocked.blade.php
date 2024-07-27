<!-- resources/views/conteudo/blocked.blade.php -->
<div id="popup-modal" style="display: none;" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <h2>Conteúdo Bloqueado 🔒</h2>
        <p>Libere o conteúdo para visualizar.</p>
        <button class="release-button">LIBERAR POR R$97</button>
    </div>
</div>

<style>
/* Estilos básicos para o modal */
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-content {
    background: white;
    padding: 20px;
    border-radius: 5px;
    width: 80%;
    max-width: 500px;
    position: relative;
    text-align: center;
}

.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    font-size: 24px;
}

.release-button {
    background-color: #049244;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 20px;
}
</style>
