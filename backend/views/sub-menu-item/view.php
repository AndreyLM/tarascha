<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SubMenuItem */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Пункти меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-menu-item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оновити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ви підтверджуете видалення даного пункту меню?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Повернутися до меню', ['/menu-item/view', 'id' => $model->parent_menu_item], ['class' => 'btn btn-info']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'parent_menu_item',
            'title',
            'type',
            'categoryId_articleSlug',
        ],
    ]) ?>

</div>
