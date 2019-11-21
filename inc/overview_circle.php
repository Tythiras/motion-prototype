<?php
$now = new DateTime('now');
$next = new DateTime($assignments[0]['time']);
$timeToNext = $now->diff($next);
?>
<style>
.main-section {
    background-color: #17223b;
    color: white;
}
.section {
    padding: 0 0 0 0;
}
.next {
    border: #00d1b2 4px solid;
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
    padding-top: 20px;
    padding-bottom: 87%;
    width: 100%;
    height: 0;
    overflow: hidden;
    position: relative;
}
.bottom {
    -webkit-box-shadow: 0px -14px 51px -27px rgba(0,0,0,1);
-moz-box-shadow: 0px -14px 51px -27px rgba(0,0,0,1);
box-shadow: 0px -14px 51px -27px rgba(0,0,0,1);
    padding-top: 10px;
}
.bottom .example {

    padding: 1em;
    margin: 1em;
    height: 60px;
    /* border: 1px solid white; */
    border-radius: 10px;
    -webkit-box-shadow: -1px 10px 23px -3px rgba(0,0,0,0.75);
    -moz-box-shadow: -1px 10px 23px -3px rgba(0,0,0,0.75);
    box-shadow: -1px 10px 23px -3px rgba(0,0,0,0.75);
    background-color: #7eccf236;
}
.bottom .example .title {
    display: inline-block;
    float: left;
    font-weight: 350;
    font-size: 1.15em;
}
.bottom .example .svg-inline--fa  {
    width: 20px;
    margin-right: 5px;
}
.bottom .example .time {
    float: right;
    display: inline-block;
}
.icon {
    position: absolute;
    top: 15px;
    right: 15px;
    color: white;
}
a, a:hover {
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
            <h1 class="title is-3"><?php safe($timeToNext->i); ?> minutter</h1>
            <h1 class="subtitle is-4">Til næste øvelse</h1>
            <hr>
            <h1 class="subtitle is-4"><b><?php safe($assignments[0]['title']); ?></b></h1>

        </div>
    </div>
    <div class="bottom">
        <?php
        foreach($assignments as $key=>$assignment) { ?>
            <a href="/assignment?key=<?php safe($key); ?>">
                    <div class="example">
                        <h1 class="title is-4">
                        <i class="<?php safe($assignment['icon']); ?>"></i>
                        <?php safe($assignment['title']); ?>
                    </h1>
                    <span class="time"><?php safe($assignment['time']); ?></span>
                </div>
            </a>
        <?php
        }
        ?>
    </div>
</div>