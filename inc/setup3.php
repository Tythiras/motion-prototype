<link rel="stylesheet" href="assets/bulma-switch.min.css">

<div class="intro-section text-center">
    <div class="section">
        <h2 class="title is-2">Dit job</h2>
        <section>
            <h3 class="title is-5">Holder du nogle væsentlige pauser i løbet af din dag?</h3>
            <div class="field">
                <label class="switchClone">Nej</label>
                <input id="switchRoundedDefault" type="checkbox" class="switch is-rounded is-medium is-info" checked="checked">
                <label for="switchRoundedDefault">Ja</label>
            </div>
            <div id="pauseContainer">
                <hr>

                <div class="columns">
                    <div class="column">
                        <h3 class="title is-4 alignVertically">Tidspunkt</h3>
                    </div>
                    <div class="column">
                        <div class="select">
                            <select class="times" data-default="11">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-4 alignVertically">Længde</h3>
                    </div>
                    <div class="column">
                        <div class="select">
                            <select class="hours">
                                <option value="">0.5 time</option>
                                <option value="" selected>1 time</option>
                                <option value="">1.5 time</option>
                                <option value="">2 timer</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>

        <div class="option">
            <a href="./setup2" class="button is-info is-inverted is-outlined">Tilbage</a>
            <a href="./setup4" class="button is-success is-inverted is-outlined">Næste</a>
        </div>
    </div>
</div>


<script>
function updateView() {
    $("#pauseContainer").toggle($("#switchRoundedDefault").prop('checked'));
}
docReady(function() {
    updateView();
    $("#switchRoundedDefault").change(function() {
        updateView();
    })
});
</script>