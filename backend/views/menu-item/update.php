<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MenuItem */

$this->title = 'Оновити пункт меню: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Пункти меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Оновити';
?>
<div class="menu-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
