<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Таращанська РДА';
?>

<div class="mnp_articles">


    <div class="col-sm-5 col-md-5 ">
        <div class="main_header">
            <h3 class="text-info text-uppercase"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Новини
                Таращанщини</h3>
        </div>
        <hr>
        <?php
        $j = 0;
        for ($i = 1; $i <= 2; $i++): ?>
            <div class="row vertical-divider-right">
                <div class="col-md-6">
                    <div class="home_article">
                        <img width="100%" src="<?= strip_tags($tar[$j]->img) ?>"/>
                        <h4><?= $tar[$j]->title ?></h4>
                        <p><i>Опубліковано: <?= Yii::$app->formatter->asDate($tar[$j]->created_at, 'd-M-Y') ?></i></p>

                        <p> <?= $tar[$j]->intro_text ?></p>
                    </div>
                    <a class="read_more" href="<?= \yii\helpers\Url::to(['site/article', 'slug' => $tar[$j]->slug]) ?>">детальніше...</a>
                    <?php $j++; ?>
                </div>
                <div class="col-md-6">
                    <div class="home_article">
                        <img width="100%" src="<?= strip_tags($tar[$j]->img) ?>"/>
                        <h4><?= $tar[$j]->title ?></h4>
                        <p><i>Опубліковано: <?= Yii::$app->formatter->asDate($tar[$j]->created_at, 'd-M-Y') ?></i></p>

                        <p> <?= $tar[$j]->intro_text ?></p>

                    </div>
                    <a class="read_more" href="<?= \yii\helpers\Url::to(['site/article', 'slug' => $tar[$j]->slug]) ?>">детальніше...</a>
                    <?php $j++; ?>
                </div>
            </div>
            <?php if (4 != $j) {?>
                <hr>
            <?php } ?>
        <?php endfor; ?>
        <div class="row">
            <div class="col-sm-12"><a href="<?= Url::to(['site/articles', 'id' => 4]) ?>"><i><h4>Всі новини Таращанщини...</h4></i></a></div>
        </div>
    </div>

    <div class="col-sm-5 col-md-5 ">
        <div class="main_header">
            <h3 class="text-info text-uppercase"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Новини
                Київщини</h3>
        </div>
        <hr>
        <?php
        $j = 0;
        for ($i = 1; $i <= 2; $i++): ?>
            <div class="row vertical-divider-right">
                <div class="col-md-6">
                    <div class="home_article">
                        <img width="100%" src="<?= strip_tags($kiev[$j]->img) ?>"/>
                        <h4><?= $kiev[$j]->title ?></h4>
                        <p><i>Опубліковано: <?= Yii::$app->formatter->asDate($kiev[$j]->created_at, 'd-M-Y') ?></i></p>

                        <p> <?= $kiev[$j]->intro_text ?></p>

                    </div>
                    <a class="read_more"
                       href="<?= \yii\helpers\Url::to(['site/article', 'slug' => $kiev[$j]->slug]) ?>">детальніше...</a>
                    <?php $j++; ?>

                </div>
                <div class="col-md-6">
                    <div class="home_article">
                        <img width="100%" src="<?= strip_tags($kiev[$j]->img) ?>"/>
                        <h4><?= $kiev[$j]->title ?></h4>
                        <p><i>Опубліковано: <?= Yii::$app->formatter->asDate($kiev[$j]->created_at, 'd-M-Y') ?></i></p>


                        <p> <?= $kiev[$j]->intro_text ?></p>

                    </div>
                    <a class="read_more"
                       href="<?= \yii\helpers\Url::to(['site/article', 'slug' => $kiev[$j]->slug]) ?>">детальніше...</a>
                    <?php $j++; ?>
                </div>
            </div>
            <?php if (4 != $j) {?>
                <hr>
            <?php } ?>
        <?php endfor; ?>
        <div class="row">
            <div class="col-sm-12"><a href="<?= Url::to(['site/articles', 'id' => 6]) ?>"><i><h4>Всі новини Київщини...</h4></i></a></div>
        </div>
    </div>


</div>