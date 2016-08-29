<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'Новини';
?>
<div class="article_view">
    <?php
    foreach ($models as $model) {
        // выводим название организации (пример)
        echo $model->title;
    }

    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>

</div>

