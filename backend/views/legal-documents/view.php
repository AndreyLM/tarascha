<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\LegalDocuments */

$this->title = 'Нормативно-правові документи';
$this->params['breadcrumbs'][] = ['label' => 'Нормативно-правові документи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="legal-documents-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Оновити', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Ви підтверджуєте видалення нормативно-правового документа?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',

            'type',
            'year',
            'month',
        ],
    ]) ?>

</div>
