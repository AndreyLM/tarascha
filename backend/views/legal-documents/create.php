<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LegalDocuments */

$this->title = 'Створити нормативно-правовий документ';
$this->params['breadcrumbs'][] = ['label' => 'Нормативно-правові документи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="legal-documents-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
