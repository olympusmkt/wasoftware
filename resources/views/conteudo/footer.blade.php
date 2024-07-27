<div class="container-footer">
    <div class="container-footer-chats">
        <i class="fas fa-comments"></i>
        <span>Conversas</span>
    </div>
    <div class="container-footer-status blocked">
        <i class="fas fa-circle"></i>
        <span>Atualizações</span>
        <span class="lock-icon">🔒</span>
    </div>
    <div class="container-footer-comm blocked">
        <i class="fas fa-users"></i>
        <span>Comunidades</span>
        <span class="lock-icon">🔒</span>
    </div>
    <div class="container-footer-calls" id="container-footer-calls">
        <i class="fas fa-phone-alt"></i>
        <span>Ligações</span>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.container-footer-calls').addEventListener('click', function() {
            fetch('/calls')
                .then(response => response.text())
                .then(html => {
                    const mainContainer = document.getElementById('container-main');
                    mainContainer.innerHTML = html;
                })
                .catch(error => {
                    console.error('Conteúdo bloqueado 🔒', error);
                });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {        
            document.querySelector('.container-footer-chats').addEventListener('click', function() {
            window.location.href = '/'; // Redireciona para a página inicial ao clicar no back-arrow
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('back-arrow').addEventListener('click', function() {
            window.location.href = '/'; // Redireciona para a página inicial ao clicar no back-arrow
        });
    });
</script>
