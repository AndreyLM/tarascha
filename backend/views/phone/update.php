<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Phone */

$this->title = '������� ���������� �����: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '��������� ������', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '�������';
?>
<div class="phone-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
