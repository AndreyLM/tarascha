<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Phone */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '��������� ������', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('�������', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('��������', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '�� ����������� ��������� ����������� ������?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'position',
            'text',
        ],
    ]) ?>

</div>
