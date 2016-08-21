<?php

/* @var $this yii\web\View */

$this->title = 'Таращанська РДА';
?>
<div class="col-sm-5 col-md-5 ">
    <div class="main_header">
        <h3 class="text-info text-uppercase"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Новини Таращанщини</h3>
    </div>
    <hr>
    <?php
    $j=0;
    for($i=1; $i<=2; $i++): ?>
    <div class="row vertical-divider-right">
        <div class="col-md-6">
            <img width="100%" src="<?php //echo \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
            <h4><?=$tar[$j]->title?></h4>
            <p> <?=$tar[$j]->intro_text?></p>
            <?php $j++;?>
        </div>
        <div class="col-md-6">
            <img width="100%" src="<?php //echo \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
            <h4><?=$tar[$j]->title?></h4>
            <p> <?=$tar[$j]->intro_text?></p>
        </div>
    </div>
    <?php endfor;?>
</div>

<div class="col-sm-5 col-md-5 ">
    <div class="main_header">
        <h3 class="text-info text-uppercase"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Новини Київщини</h3>
    </div>
    <hr>
    <?php
    $j=0;
    for($i=1; $i<=2; $i++): ?>
        <div class="row vertical-divider-right">
            <div class="col-md-6">
                <img width="100%" src="<?php //echo \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                <h4><?=$kiev[$j]->title?></h4>
                <p> <?=$kiev[$j]->intro_text?></p>
                <?php $j++;?>
            </div>
            <div class="col-md-6">
                <img width="100%" src="<?php //echo \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                <h4><?=$kiev[$j]->title?></h4>
                <p> <?=$kiev[$j]->intro_text?></p>
            </div>
        </div>
    <?php endfor;?>
</div>



