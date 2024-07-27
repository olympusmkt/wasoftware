// searchHandler.js
function initSearchHandler() {
    const searchIcon = document.querySelector('.search-icon');
    searchIcon.addEventListener('click', function () {
        let searchInput = document.querySelector('.search-input');
        if (!searchInput) {
            searchInput = document.createElement('input');
            searchInput.classList.add('search-input');
            searchInput.setAttribute('type', 'text');
            searchInput.setAttribute('placeholder', 'Pesquisar...');
            searchIcon.parentNode.appendChild(searchInput);

            searchInput.addEventListener('input', function (e) {
                const query = e.target.value.toLowerCase();
                const allChats = document.querySelectorAll('.container-chat01');
                allChats.forEach(chat => {
                    const lastMsg = chat.querySelector('.chat-lastmsg').textContent.toLowerCase();
                    if (lastMsg.includes(query)) {
                        chat.style.display = 'flex';
                    } else {
                        chat.style.display = 'none';
                    }
                });
            });
        }
        searchInput.style.display = 'inline-block';
        searchInput.focus();
    });
}

export default initSearchHandler;
