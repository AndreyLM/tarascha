<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статті';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Створити статтю', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="container">
        <div class="row">
            <div class="col-sm-11">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        ['class' => 'yii\grid\ActionColumn'],
                        'id',
                        'category_id',
                        [
                            'attribute' => 'title',
                            'headerOptions' => ['style' => 'max-width: 50px']
                        ],
//                        'title',
                        'slug',
                        //'intro_text:ntext',
                        //'full_text:ntext',
                        // 'tags',
                        'created_at',
//             'updated_at',
                        'isActive',
                        'isFavorite',

                    ],
                ]); ?>
            </div>
        </div>
    </div>

</div>
