import { generateChats } from './generateChats.js';
import { filterUnreadChats, showAllChats } from './filterChats.js';
import initSearchHandler from './searchHandler.js';
import openChat from './openChatHandler.js';
import { openModal, closeModal } from './modalHandler.js';
import './blocked.js';

document.addEventListener('DOMContentLoaded', function () {
    console.log('DOM fully loaded and parsed');
    generateChats();

    document.getElementById('tab-nao-lidas').addEventListener('click', filterUnreadChats);
    document.getElementById('tab-todas').addEventListener('click', showAllChats);

    initSearchHandler();

    const fab = document.querySelector('.fab');
    if (fab) {
        fab.addEventListener('click', function () {
            const fabOptions = document.querySelector('.fab-options');
            fabOptions.style.display = fabOptions.style.display === 'flex' ? 'none' : 'flex';
        });
    }

    const newChat = document.getElementById('new-chat');
    if (newChat) {
        newChat.addEventListener('click', function () {
            alert('Novo Chat');
        });
    }

    const newCall = document.getElementById('new-call');
    if (newCall) {
        newCall.addEventListener('click', function () {
            alert('Nova Chamada');
        });
    }

    const newGroup = document.getElementById('new-group');
    if (newGroup) {
        newGroup.addEventListener('click', function () {
            alert('Criar Grupo');
        });
    }

    const footerCalls = document.querySelector('.container-footer-calls');
    if (footerCalls) {
        footerCalls.addEventListener('click', function () {
            showCalls();
        });
    }

    const footerChats = document.getElementById('container-footer-chats');
    if (footerChats) {
        footerChats.addEventListener('click', function () {
            location.reload();
        });
    }

    const closeButton = document.querySelector('.close-button');
    if (closeButton) {
        closeButton.addEventListener('click', closeModal);
    }
});
