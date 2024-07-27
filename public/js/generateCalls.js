document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.container-footer-calls').addEventListener('click', function() {
        fetch('/calls')
            .then(response => response.text())
            .then(html => {
                const mainContainer = document.getElementById('container-main');
                mainContainer.innerHTML = html;
                
                // Adiciona lógica para ícones de chamada
                document.querySelectorAll('.call-icons i').forEach(function(icon) {
                    icon.addEventListener('click', function() {
                        const isVideoCall = icon.classList.contains('fa-video');
                        const callInfo = icon.closest('.call-item').querySelector('.call-info');
                        
                        if (isVideoCall) {
                            callInfo.innerHTML = `
                                <span class="call-name">Bloqueado</span>
                                <span class="call-type"><i class="fas fa-exclamation-triangle"></i> Chamada de vídeo</span>
                                <span class="call-time">Horário oculto</span>
                            `;
                        } else {
                            callInfo.innerHTML = `
                                <span class="call-name">Bloqueado</span>
                                <span class="call-time">Horário oculto</span>
                            `;
                        }
                    });
                });
            })
            .catch(error => {
                console.error('Erro ao carregar a view calls:', error);
            });
    });
});
