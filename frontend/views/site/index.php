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
            <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
            <h4><?=$tar[$j]->title?></h4>
            <p> <?=$tar[$j]->intro_text?></p>
            <?php $j++;?>
        </div>
        <div class="col-md-6">
            <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
            <h4><?=$tar[$j]->title?></h4>
            <p> <?=$tar[$j]->intro_text?></p>
        </div>
    </div>
    <?php endfor; ?>


    <div class="row vertical-divider-right">
        <div class="col-md-6">
            <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
            <h4>Some article's header</h4>
            <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                Consequatur deserunt, doloribus, enim id iste, molestias omnis
                quibusdam rerum sit totam veritatis voluptas.</p>
        </div>
        <div class="col-md-6">
            <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
            <h4>Some article's header</h4>
            <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                Consequatur deserunt, doloribus, enim id iste, molestias omnis
                quibusdam rerum sit totam veritatis voluptas.</p>
        </div>
    </div>
</div>



<div class="col-sm-4 col-md-5 ">
    <div class="main_header">
        <h3 class="text-info text-uppercase"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Новини Київщини</h3>
    </div>
    <hr>
    <div class="row vertical-divider-right">
        <div class="col-md-6">
            <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
            <h4>Some article's header</h4>
            <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                Consequatur deserunt, doloribus, enim id iste, molestias omnis
                quibusdam rerum sit totam veritatis voluptas.</p>
        </div>
        <div class="col-md-6">
            <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
            <h4>Some article's header</h4>
            <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                Consequatur deserunt, doloribus, enim id iste, molestias omnis
                quibusdam rerum sit totam veritatis voluptas.</p>
        </div>
    </div>
    <div class="row vertical-divider-right">
        <div class="col-md-6">
            <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
            <h4>Some article's header</h4>
            <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                Consequatur deserunt, doloribus, enim id iste, molestias omnis
                quibusdam rerum sit totam veritatis voluptas.</p>
        </div>
        <div class="col-md-6">
            <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
            <h4>Some article's header</h4>
            <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                Consequatur deserunt, doloribus, enim id iste, molestias omnis
                quibusdam rerum sit totam veritatis voluptas.</p>
        </div>
    </div>
</div>
