<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\LegalDocumentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Нормативні документи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="legal-documents-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити нормативно-правовий документ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            'year',
            'month',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
