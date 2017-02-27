<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SubMenuItem */

$this->title = 'Оновити меню: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Оновити';
?>
<div class="sub-menu-item-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
