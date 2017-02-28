<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MenuItem */

$this->title = 'Створити пункт меню';
$this->params['breadcrumbs'][] = ['label' => 'Пункти меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
