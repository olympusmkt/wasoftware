<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile WhatsApp</title>
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container" id="container-main">
        @include('conteudo.wasoftware')
        @include('conteudo.header')
        @include('conteudo.chats')
        @include('conteudo.footer')
        @include('conteudo.blocked')
    </div>

    <div class="container-chats">
        <!-- Chats serão gerados dinamicamente aqui -->
    </div>
    
    <div id="chat-container">
        <!-- Conteúdo do chat será carregado aqui -->
    </div>
    

    <!-- Importação do JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/generateChats.js') }}"></script>
    <script src="{{ asset('js/filterChats.js') }}" type="module"></script>
    <script src="{{ asset('js/openchathandler.js') }}" type="module"></script>
    <script src="{{ asset('js/blocked.js') }}" type="module"></script>
</body>
</html>
