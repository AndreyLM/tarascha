<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SubMenuItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Menu Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-menu-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sub Menu Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'parent_menu_item',
            'title',
            'type',
            'categoryId_articleSlug',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
