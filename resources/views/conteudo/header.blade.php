<!-- Container Sub -->
<div class="container-sub" style="min-height: 4vh">
    <button class="tab" id="tab-todas">Todas</button>
    <button class="tab" id="tab-nao-lidas">Não lidas</button>
    <button class="tab blocked" id="tab-favoritos">Favoritos <span class="lock-icon">🔒</span></button>
    <button class="tab blocked" id="tab-grupos">Grupos <span class="lock-icon">🔒</span></button>
</div>

<!-- Container Archive -->
<div class="container-archive blocked">
    <i class="fas fa-archive"></i>
    <span>Arquivadas</span>
    <span class="lock-icon">🔒</span>
</div>

<script type="module">
    import { filterUnreadChats, showAllChats } from '{{ asset('js/filterChats.js') }}';

    document.getElementById('tab-todas').addEventListener('click', showAllChats);
    document.getElementById('tab-nao-lidas').addEventListener('click', filterUnreadChats);
</script>
