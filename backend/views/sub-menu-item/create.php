<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SubMenuItem */

$this->title = '�������� ����';
$this->params['breadcrumbs'][] = ['label' => '����', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="sub-menu-item-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
