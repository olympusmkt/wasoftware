@include('conteudo.wasoftware')

<div class="container" id="container-main">
    <!-- Container Header -->
    <div class="container-header">
        <div class="container-header-01">
            <i class="fas fa-arrow-left" id="back-arrow"></i>
            <h1>Ligações</h1>
        </div>
</div>

    @include('conteudo.header-calls')

    <!-- Container Calls -->
    <div class="container-calls">

        <div class="call-item">
            <img src="/images/chat-pic/chat-pic-empty.png" alt="Chat Pic" class="chat-pic">
            <div class="call-info">
                <span class="call-name">Bloqueado 🔒</span>
                <span class="call-time">Horário oculto</span>
                
            </div>
            <div class="call-icons">
                <i class="fas fa-phone-alt"></i>
            </div>
        </div>


        <div class="call-item">
            <img src="/images/chat-pic/chat-pic-empty.png" alt="Chat Pic" class="chat-pic">
            <div class="call-info">
                <span class="call-name">Bloqueado 🔒</span>
                <span class="call-type"><i class="fas fa-exclamation-triangle"></i> Chamada de vídeo</span>
                <span class="call-time">Horário oculto</span>
            </div>
            <div class="call-icons">
                <i class="fas fa-video"></i>
            </div>
        </div>
        <div class="call-item">
            <img src="/images/chat-pic/chat-pic-empty.png" alt="Chat Pic" class="chat-pic">
            <div class="call-info">
                <span class="call-name">Bloqueado 🔒</span>
                <span class="call-time">Horário oculto</span>
                
            </div>
            <div class="call-icons">
                <i class="fas fa-phone-alt"></i>
            </div>
        </div>
        <div class="call-item">
            <img src="/images/chat-pic/chat-pic-empty.png" alt="Chat Pic" class="chat-pic">
            <div class="call-info">
                <span class="call-name">Bloqueado 🔒</span>
                <span class="call-type"><i class="fas fa-exclamation-triangle"></i> Chamada de vídeo</span>
                <span class="call-time">Horário oculto</span>
            </div>
            <div class="call-icons">
                <i class="fas fa-video"></i>
            </div>
        </div>
        <div class="call-item">
            <img src="/images/chat-pic/chat-pic-empty.png" alt="Chat Pic" class="chat-pic">
            <div class="call-info">
                <span class="call-name">Bloqueado 🔒</span>
                <span class="call-time">Horário oculto</span>
                
            </div>
            <div class="call-icons">
                <i class="fas fa-phone-alt"></i>
            </div>
        </div>
        <div class="call-item">
            <img src="/images/chat-pic/chat-pic-empty.png" alt="Chat Pic" class="chat-pic">
            <div class="call-info">
                <span class="call-name">Bloqueado 🔒</span>
                <span class="call-time">Horário oculto</span>
                
            </div>
            <div class="call-icons">
                <i class="fas fa-phone-alt"></i>
            </div>
        </div>

        <div class="call-item">
            <img src="/images/chat-pic/chat-pic-empty.png" alt="Chat Pic" class="chat-pic">
            <div class="call-info">
                <span class="call-name">Bloqueado 🔒</span>
                <span class="call-time">Horário oculto</span>
                
            </div>
            <div class="call-icons">
                <i class="fas fa-phone-alt"></i>
            </div>
        </div>

        <div class="call-item">
            <img src="/images/chat-pic/chat-cadeado.png" alt="Chat Pic" class="chat-pic-cadeado">
            <div class="call-info">
                <span class="call-name">Ligações protegidas 🔒</span>
                <span class="call-time">Desbloqueie para ver mais</span>
                
            </div>
            <div class="call-icons">
                <i class="fas fa-phone-alt"></i>
            </div>
        </div>

        <!-- Adicione mais itens de chamada conforme necessário -->
    </div>
</div>

@include('conteudo.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('back-arrow').addEventListener('click', function() {
            window.location.href = '/'; // Redireciona para a página inicial ao clicar no back-arrow
        });
    });
</script>
