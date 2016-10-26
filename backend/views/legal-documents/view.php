<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\LegalDocuments */

$this->title = 'Нормативно-правові документи';
$this->params['breadcrumbs'][] = ['label' => 'Legal Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="legal-documents-view">

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

            'type',
            'year',
            'month',
        ],
    ]) ?>

</div>
