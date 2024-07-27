document.addEventListener('DOMContentLoaded', function () {
    function generateChats() {
        const containerChats = document.querySelector('.container-chats');
        const totalChats = 18;  // Máximo de chats incluindo o chat bloqueado
        const generatedChats = 17;  // Máximo de chats gerados dinamicamente
        const chatData = [];

        // Definir quais chats são não lidos e quantidades de mensagens
        const nonReadChats = [2, 4, 6, 9, 11, 14];
        const messagesCount = {
            2: 3,
            4: 5,
            6: 2,
            9: 4,
            11: 1,
            14: 3
        };

        for (let i = 0; i < generatedChats; i++) {
            const time = `12:00`;
            const quant = nonReadChats.includes(i) ? messagesCount[i] : 0;
            const visualizada = nonReadChats.includes(i) ? 'N' : 'S';
            const pic = (i === 0 || i === 1 || i === 5 || i === 7 || i === 13 || i === 15 || i === 16) ? 'chat-pic-empty.png' : `chat-pic${i}.png`;
            chatData.push({
                id: i, // Adiciona o índice como ID
                pic,
                name: 'Bloqueado',
                lastMsg: (i === 4 || i === 10) ? '⚠️ Mensagem com conteúdo sexual ou amoroso' : 'Libere o conteúdo para visualizar',
                time,
                quant,
                visualizada
            });
        }

        chatData.forEach((chat, index) => {  
            const chatElement = document.createElement('div');
            chatElement.classList.add('container-chat01');
            chatElement.classList.add(`data-chat-${index}`);  // Adiciona a classe dinâmica
            chatElement.dataset.chatId = chat.id;  // Adiciona o data-chat-id
            chatElement.dataset.chat = chat.name;
            chatElement.dataset.visualizada = chat.visualizada;

            chatElement.innerHTML = `
                <img src="/images/chat-pic/${chat.pic}" alt="Chat Pic" class="chat-pic ${chat.pic === 'chat-pic-empty.png' ? '' : 'blur'}" onerror="this.onerror=null;this.src='/images/chat-pic/chat-pic-empty.png';">
                <div class="chat-info">
                    <div class="chat-header">
                        <span class="chat-name">${chat.name}</span>
                        <span class="chat-lastmsg-time">${chat.time}</span>
                    </div>
                    <div class="chat-lastmsg">${chat.lastMsg}</div>
                    ${chat.visualizada === 'N' ? `<span class="chat-quant">${chat.quant}</span>` : ''}
                </div>
            `;

            containerChats.appendChild(chatElement);

            chatElement.addEventListener('click', function () {
                openChat(chat.id);  // Chama a função openChat com o chat.id
            });
        });

        // Adicionar o chat adicional com as novas informações no índice 18
        const additionalChatElement = document.createElement('div');
        additionalChatElement.classList.add('container-chat01');
        additionalChatElement.classList.add('data-chat-17');  // Adiciona a classe dinâmica para o chat bloqueado
        additionalChatElement.dataset.chatId = totalChats;  // ID para o chat adicional
        additionalChatElement.innerHTML = `
            <img src="/images/chat-pic/chat-cadeado.png" alt="Chat Cadeado" class="chat-pic-cadeado">
            <div class="chat-info">
                <div class="chat-header">
                    <span class="chat-name">Conversas protegidas</span>
                    <span class="chat-lastmsg-time">12:00</span>
                </div>
                <div class="chat-lastmsg">Desbloqueie para ver mais</div>
            </div>
        `;
        containerChats.appendChild(additionalChatElement);

        // Evento de clique para abrir modal no conteúdo bloqueado
        additionalChatElement.addEventListener('click', function() {
            const modal = document.getElementById('popup-modal');
            modal.style.display = 'flex';
        });
    }

    generateChats();
});
