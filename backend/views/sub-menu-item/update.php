<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SubMenuItem */

$this->title = '������� ����: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '����', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '�������';
?>
<div class="sub-menu-item-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
