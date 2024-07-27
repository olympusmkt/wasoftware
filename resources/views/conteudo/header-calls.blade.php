<!-- Container Sub -->
<div class="container-sub">
    <button class="tab" id="call-todas">Todas</button>
    <button class="tab" id="call-missed">Perdidas</button>
</div>

<script type="module">
    import { filterMissedCalls, showAllCalls } from '{{ asset('js/filterChats.js') }}';

    document.getElementById('call-todas').addEventListener('click', showAllCalls);
    document.getElementById('call-missed').addEventListener('click', filterMissedCalls);
</script>
