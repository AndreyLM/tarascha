<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LegalDocuments */

$this->title = 'Нормативно-правові документи - оновити ';
$this->params['breadcrumbs'][] = ['label' => 'Legal Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->year.' - ', $model->month, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="legal-documents-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
