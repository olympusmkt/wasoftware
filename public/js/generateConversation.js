document.addEventListener('DOMContentLoaded', function () {
    function generateConversation(chatId) {
        const conversations = {
            0: generateMessages(0),
            1: generateMessages(1),
            2: generateMessages(2),
            3: generateMessages(3),
            4: generateMessages(4),
            5: generateMessages(5),
            6: generateMessages(6),
            7: generateMessages(7),
            8: generateMessages(8),
            9: generateMessages(9),
            10: generateMessages(10),
            11: generateMessages(11),
            12: generateMessages(12),
            13: generateMessages(13),
            14: generateMessages(14),
            15: generateMessages(15),
            16: generateMessages(16)
        };

        return conversations[chatId] || [];
    }

    function generateMessages(index) {
        const messages = [];
        const numMessages = Math.floor(Math.random() * 10) + 5; // Gera entre 5 e 15 mensagens

        for (let i = 0; i < numMessages; i++) {
            const isImage = Math.random() > 0.8; // 20% chance de ser uma imagem
            const type = i % 2 === 0 ? 'received' : 'sent';

            if (isImage) {
                messages.push({
                    type: type,
                    text: `<img src="https://via.placeholder.com/150" alt="Imagem bloqueada">`,
                    time: `Horário bloqueado`
                });
            } else {
                messages.push({
                    type: type,
                    text: `Bloqueada`,
                    time: `Horário bloqueado`
                });
            }
        }

        return messages;
    }

    // Adiciona evento aos itens de chat
    document.querySelectorAll('.container-chat01').forEach(function(chatItem) {
        chatItem.addEventListener('click', function() {
            const chatId = chatItem.classList[1].split('-')[2]; // Captura o ID da classe data-chat-ID
            const chatContentContainer = document.getElementById('chat-content');
            const chatContent = generateConversation(chatId);
            chatContentContainer.innerHTML = '';

            chatContent.forEach(function(message) {
                const messageElement = document.createElement('div');
                messageElement.classList.add('message', message.type);
                messageElement.innerHTML = `
                    <div class="message-text">${message.text}</div>
                    <div class="message-time">${message.time}</div>
                `;
                chatContentContainer.appendChild(messageElement);
            });
        });
    });
});
