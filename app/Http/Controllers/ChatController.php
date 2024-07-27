<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('conteudo.index');
    }

    public function chat()
    {
        return view('conteudo.chat');
    }

    public function calls()
    {
        return view('conteudo.calls');
    }

// ChatController.php
public function loadConversation($chatId)
{
    // Aqui você deve buscar a conversa e suas mensagens a partir do banco de dados
    $conversation = Conversation::with('messages')->find($chatId);

    if (!$conversation) {
        // Se não encontrar a conversa, redireciona ou mostra um erro
        return redirect()->route('index')->with('error', 'Conversa não encontrada');
    }

    $messages = $conversation->messages->map(function ($message) {
        return [
            'type' => $message->type,  // 'received' ou 'sent'
            'text' => $message->text,
            'time' => $message->created_at->format('h:i A'),
        ];
    });

    return view('conteudo.conversation', compact('messages', 'conversation'));
}

}
