function openChat(chatId) {
    const chatElement = document.querySelector(`.data-chat-${chatId}`);
    const chatPic = chatElement.querySelector('.chat-pic').src;
    const chatName = chatElement.querySelector('.chat-name').textContent;

    const chatData = {
        pic: chatPic,
        name: chatName
    };

    // Renderiza a view chat.blade.php com os dados do chat clicado
    const chatContainer = document.getElementById('chat-container');
    chatContainer.innerHTML = `
        <div class="container-chat-open">
            <div class="container-chat-open-header">
                <div class="container-chat-open-header-01">
                    <i class="fas fa-arrow-left" id="back-arrow"></i>
                    <img src="${chatData.pic}" alt="Chat Pic" class="chat-pic blur">
                    <span class="chat-name blocked">${chatData.name}</span>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="container-chat-open-header-02">
                    <i class="fas fa-phone-alt blocked" style="color: grey;"></i>
                    <i class="fas fa-ellipsis-v blocked" style="color: grey;"></i>
                </div>
            </div>
            <div class="container-chat-msgs" id="chat-content">
                <!-- Mensagens serão geradas dinamicamente aqui -->
            </div>
            <div class="container-chat-footer">
                <i class="fas fa-smile"></i>
                <input type="text" placeholder="Mensagem" class="field-msg">
                <i class="fas fa-paperclip" style="color: grey;"></i>
                <i class="fas fa-camera" style="color: grey;"></i>
                <i class="fas fa-microphone" style="color: grey;"></i>
            </div>
        </div>
    `;

    chatContainer.style.display = 'block';
    document.querySelector('.container-chats').classList.add('hidden');

    document.getElementById('back-arrow').addEventListener('click', function() {
        chatContainer.style.display = 'none';
        document.querySelector('.container-chats').classList.remove('hidden');
    });
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.container-chat01').forEach(function(chatElement) {
        chatElement.addEventListener('click', function() {
            const chatClass = Array.from(chatElement.classList).find(cls => cls.startsWith('data-chat-'));
            const chatId = chatClass.split('-')[2]; // Captura o ID da classe data-chat-ID
            openChat(chatId);
        });
    });
});
