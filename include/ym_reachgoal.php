<script>
    // Yandex Metrika Reach Goal
    function ymReachGoal (target) {
        if (typeof ym === 'function') {
            ym(45994323, 'reachGoal', target, {}, goalCallback);
        }
    }
    function goalCallback () {
        console.log('Yandex.Metrics target: \'' + target + '\'');
    }
</script>
