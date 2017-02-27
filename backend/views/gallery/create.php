<?php

use yii\helpers\Html;
use sadovojav\gallery\Module;

$this->title = Module::t('default', 'Створити');
$this->params['breadcrumbs'] = [
    ['label' => Module::t('default', 'Галереї'), 'url' => ['index']],
    $this->title
];

?>

<div class="gallery-create">
    <div class="page-header">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $this->title; ?></h1>
            </div>
        </div>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]); ?>
</div>
