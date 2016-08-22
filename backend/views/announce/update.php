<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Announce */

$this->title = 'Update Announce: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Announces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="announce-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
