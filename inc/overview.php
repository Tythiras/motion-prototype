<style>
.main-section {
    background-color: #17223b;
    color: white;
}
.section {
    padding: 20px 0 0 0;
}
.next {
    border: #6b778d 2px solid;
    width: 80%;
    border-radius: 50%;
    padding-top: 80%;
    left: 10%;
    position: absolute;
}
.top .info {
    padding: 15% 20%;
    text-align: center;
}
.top .info hr {
    width: 120%;
    margin-left: -10%;
}
.top {
    padding-bottom: 20px;
    border-bottom: 1px solid whitesmoke;
    overflow: hidden;
    position: relative;
}
.bottom {
}
.bottom .example {
    border-bottom: 1px #6b778d dotted;
    margin-bottom: 5px;
    padding: 1em;
    height: 60px;
}
.bottom .example .title {
    display: inline-block;
    float: left;
}
.bottom .example .time {
    float: right;
    display: inline-block;
}
.icon {
    position: absolute;
    top: 15px;
    right: 15px;
    color: #ff6768;
}
a {
    color: white;
}
</style>

<div class="section">
    <div class="top">
        <a href="./setup2">
            <span class="icon">
                <i class="fas fa-user-cog"></i>
            </span>
        </a>
        <div class="next">
        </div>
        <div class="info">
            <h1 class="title is-3">54 minutter</h1>
            <h1 class="subtitle is-4">Til næste øvelse</h1>
            <hr>
            <h1 class="subtitle is-4"><b>Gå en 10 minutters tur</b></h1>

        </div>
    </div>
    <div class="bottom">
        <?php
        foreach($assignments as $key=>$assignment) { ?>
            <a href="/assignment?key=<?php safe($key); ?>">
                <div class="example">
                    <h1 class="title is-4"><?php safe($assignment['title']); ?></h1>
                    <span class="time"><?php safe($assignment['time']); ?></span>
                </div>
            </a>
        <?php
        }
        ?>
    </div>
</div>