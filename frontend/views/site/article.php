<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = $model->title;
?>


<div class="article_header">
    <h3 class="text-info text-uppercase">
        <span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;
        <?= $model->title ?>
    </h3>
    <p><i>�����������: <?= Yii::$app->formatter->asDate($model->created_at, 'd-M-Y') ?></i></p>
</div>

<div class="main_text">
    <?php
    if (!empty($model->img)):?>
        <img src="<?= strip_tags($model->img) ?>" style="width: 50%; float: left;"/>
    <?php endif; ?>
    <?= $model->intro_text ?>
</div>
