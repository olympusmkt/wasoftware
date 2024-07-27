<div class="container-chat-open">
    <div class="container-chat-open-header">
        <div class="container-chat-open-header-01">
            <i class="fas fa-arrow-left" id="back-arrow"></i>
            <img src="{{ $chat['pic'] }}" alt="Chat Pic" class="chat-pic">
            <span class="chat-name">{{ $chat['name'] }}</span>
            <i class="fas fa-lock"></i>
        </div>
        <div class="container-chat-open-header-02">
            <i class="fas fa-phone-alt" style="color: grey;"></i>
            <i class="fas fa-ellipsis-v" style="color: grey;"></i>
        </div>
    </div>
    <div class="container-chat-msgs" id="chat-content">
        @include('conteudo.conversa')
    </div>
    <div class="container-chat-footer">
        <i class="fas fa-smile"></i>
        <input type="text" placeholder="Mensagem" class="field-msg">
        <i class="fas fa-paperclip" style="color: grey;"></i>
        <i class="fas fa-camera" style="color: grey;"></i>
        <i class="fas fa-microphone" style="color: grey;"></i>
    </div>
</div>
