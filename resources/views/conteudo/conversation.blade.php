<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversation</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div id="container-main" class="container-main">
        <div class="container-header">
            <div class="container-header-01">
                <i class="fas fa-arrow-left" id="back-arrow"></i>
                <img src="/images/chat-pic/chat-pic-empty.png" alt="Chat Pic" class="chat-pic">
                <span class="chat-name">Nome do Chat</span>
            </div>
            <div class="container-header-02">
                <i class="fas fa-phone-alt"></i>
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
        <div class="container-chat-msgs" id="chat-content">
            <!-- As mensagens serão geradas dinamicamente aqui -->
        </div>
        <div class="container-chat-footer">
            <i class="fas fa-smile"></i>
            <input type="text" placeholder="Mensagem" class="field-msg">
            <i class="fas fa-paperclip"></i>
            <i class="fas fa-camera"></i>
            <i class="fas fa-microphone"></i>
        </div>
        @include('conteudo.footer')
    </div>
    <script src="/js/app.js"></script>
</body>
</html>