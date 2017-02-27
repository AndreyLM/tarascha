<?php

use yii\helpers\Html;
use sadovojav\gallery\Module;

$this->title = Module::t('default', 'Оновити') . ' ' . Html::encode($model->name);
$this->params['breadcrumbs'] = [
    ['label' => Module::t('default', 'Фотогалереї'), 'url' => ['index']],
    ['label' => Html::encode($model->name), 'url' => ['view', 'id' => $model->id]],
    Module::t('default', 'Оновити')
];

?>

<div class="gallery-update">
    <div class="page-header">
        <div class="row">
            <div class="col-md-9">
                <h1><?= Html::encode($model->name); ?></h1>
            </div>

            <div class="col-md-3">
                <div class="pull-right">
                    <?= Html::a(Module::t('default', 'Переглянути'), [
                        'view', 'id' => $model->id
                    ], [
                        'class' => 'btn btn-warning btn-sm'
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]); ?>
</div>
