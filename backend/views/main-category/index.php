<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\SearchMainCategory */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категорія';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити головну категорію', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description',
            'slug',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
