<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = $model->title;
?>

<div class="main_header">
    <h3 class="text-info text-uppercase">
        <span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;
        <?= $model->title?>
    </h3>
    <hr>
    <div class="main_text">
        <img src="<?=$model->img?>" style="width: 50%; float: left;"/> <?= $model->intro_text?>
    </div>
</div>
<hr>