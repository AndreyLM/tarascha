<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SubMenuItem */

$this->title = 'Update Sub Menu Item: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sub Menu Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sub-menu-item-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
