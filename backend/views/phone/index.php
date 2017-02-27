<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\PhoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Телефонні номера';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити телефонний номер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'position',
            'text',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
