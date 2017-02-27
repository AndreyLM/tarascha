<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Announce */

$this->title = 'Створити оголошення';
$this->params['breadcrumbs'][] = ['label' => 'Оголошення', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announce-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
