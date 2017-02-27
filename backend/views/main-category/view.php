<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MainCategory */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Головні категорії', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оновити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ви підтверджуєте видалення головного меню?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description',
            'slug',
        ],
    ]) ?>

</div>
