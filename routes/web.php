<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('/load-chats', function () {
    return view('conteudo.chats');
});

Route::get('/', [ChatController::class, 'index']);
Route::get('/chat', [ChatController::class, 'chat']);
Route::get('/calls', function () {
    return view('conteudo.calls');
});

Route::get('/conteudo/chat/{chatId}', function ($chatId) {
    // Simulação de função para obter os dados do chat pelo ID
    $chatData = [
        0 => ['pic' => 'chat-pic-empty.png', 'name' => 'Chat 1', 'messages' => [['time' => '12:00', 'content' => 'Mensagem do Chat 1']]],
        1 => ['pic' => 'chat-pic2.png', 'name' => 'Chat 2', 'messages' => [['time' => '12:00', 'content' => 'Mensagem do Chat 2']]],
        2 => ['pic' => 'chat-pic3.png', 'name' => 'Chat 3', 'messages' => [['time' => '12:00', 'content' => 'Mensagem do Chat 3']]],
        // Continue com todos os 17 chats
        16 => ['pic' => 'chat-pic17.png', 'name' => 'Chat 17', 'messages' => [['time' => '12:00', 'content' => 'Mensagem do Chat 17']]]
    ];

    if (isset($chatData[$chatId])) {
        $chat = $chatData[$chatId];
    } else {
        $chat = ['pic' => 'chat-pic-empty.png', 'name' => 'Desconhecido', 'messages' => []];
    }

    return view('conteudo.chat', ['chat' => $chat]);
});


Route::get('/chat/{chatName}', [ChatController::class, 'showChatContent']);
Route::get('/unread-chats', [ChatController::class, 'getUnreadChats']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/conteudo', [ConteudoController::class, 'index'])->name('conteudo.index');
Route::get('/chat', function () {
    return view('conteudo.chat');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
