<?php

/* @var $this yii\web\View */

$this->title = $model->title;
?>

<div class="main_header">
    <h3 class="text-info text-uppercase">
        <span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;
        <?= $model->title?>
    </h3>
    <hr>
    <div class="main_text">
        <?= $model->intro_text?>
    </div>
</div>
<hr>