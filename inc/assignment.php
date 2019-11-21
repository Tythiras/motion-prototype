<?php
$assignment = $assignments[$_GET['key']];
?>
<style>

.main-section {
    background-color: #17223b;
    color: white;
}
</style>

<div class="section">
    <a href="./overview" class="back">
        <i class="fa fa-arrow-left"></i>
        Tilbage
    </a>
    <div class="example">
        <h1 class="title is-4"><?php safe($assignment['title']); ?></h1>
        <span class="time"><b>Anbefalet tidspunkt: <?php safe($assignment['time']); ?></b></span>
    </div>
    <p>For at aktivere kroppen kan det hjælpe at lave øvelser. Lav denne øvelse og få gang gang i kroppen!</p>
    <hr>
    <i>Se vejledning</i>
    <br>
    <iframe style="width: 100%;" src="https://www.youtube.com/embed/D4jgFN5dyjs" frameborder="0" allowfullscreen></iframe>
</div>