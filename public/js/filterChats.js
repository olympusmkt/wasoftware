function filterUnreadChats() {
    const allChats = document.querySelectorAll('.container-chat01');
    allChats.forEach(chat => {
        if (chat.dataset.visualizada === 'N') {
            chat.style.display = 'flex';
        } else {
            chat.style.display = 'none';
        }
    });
}

function showAllChats() {
    const allChats = document.querySelectorAll('.container-chat01');
    allChats.forEach(chat => {
        chat.style.display = 'flex';
    });
}

function filterMissedCalls() {
    const allCalls = document.querySelectorAll('.call-item');
    allCalls.forEach(call => {
        if (call.dataset.status === 'N') {
            call.style.display = 'flex';
        } else {
            call.style.display = 'none';
        }
    });
}

function showAllCalls() {
    const allCalls = document.querySelectorAll('.call-item');
    allCalls.forEach(call => {
        call.style.display = 'flex';
    });
}

export { filterUnreadChats, showAllChats, filterMissedCalls, showAllCalls };
