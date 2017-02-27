<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\AnnounceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Оголошення';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announce-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити нове оголошення', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'article_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
