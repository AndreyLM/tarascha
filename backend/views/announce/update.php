<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Announce */

$this->title = 'Оновити оголошення: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Оголошення', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Оновити';
?>
<div class="announce-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
