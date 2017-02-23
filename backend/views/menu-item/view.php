<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\MenuItem */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Menu Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'menu.title',
            'title',
            'description',
            'type',
            'categoryId_articleSlug',
            'position',
            'position2',
        ],
    ]) ?>

    <?php if($model->type==='root'):?>

    <h4>Підпункти меню:</h4>

    <?php
    foreach ($items as $item) {
        echo '<div class="row">';

        echo '<div class="col-sm-4">';
        echo '<p>' . $item->title . '</p>';
        echo '</div>';
        echo '<div class="col-sm-2">';
        ?>
        <?= Html::a('', ['/sub-menu-item/delete', 'id' => $item->id], [
            'class' => 'glyphicon glyphicon-trash',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

        <?= Html::button('', ['value' => Url::to(['/sub-menu-item/update', 'id' => $item->id]), 'class' => 'edit_menu_item_button glyphicon glyphicon-pencil']) ?>

        <?php


        echo '</div>';
        echo '<div class="col-sm-offset-6">';
        echo '</div>';

        echo '</div>';
    }
    ?>
    <br/>
    <?php Yii::$app->session->setFlash('menu_id', $model->id, false); ?>
    <?= Html::button('Добавити пункт', ['value' => Url::to('/admin/sub-menu-item/create'), 'class' => 'btn btn-warning',
        'id' => 'add_menu_item_button']) ?>

    <?php
    Modal::begin([
        'header' => '<h2>Добавити пункт меню</h2>',
        'id' => 'add_menu_item_modal',
        'size' => 'modal-lg',
    ]);
    echo '<div id="add_menu_item_content"></div>';
    Modal::end();

    Modal::begin([
        'header' => '<h2>Редагувати пункт меню</h2>',
        'id' => 'edit_menu_item_modal',
        'size' => 'modal-lg',
    ]);
    echo '<div id="edit_menu_item_content"></div>';
    Modal::end();
    ?>
    <?php endif; ?>
</div>


