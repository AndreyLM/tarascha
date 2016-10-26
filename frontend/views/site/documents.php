<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

$this->title = "Нормативні документи та доручення";

/* @var $this yii\web\View */
/* @var $model common\models\LegalDocuments */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="article_header">
    <h3 class="text-info text-uppercase">
        <span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;
        НОРМАТИВНІ ДОКУМЕНТИ</h3>
</div>

<div class="main_text">

    <?= Html::beginForm(['/site/documents'], 'post') ?>
    <div class="row search-docs">
        <div class="col-sm-2"><?= Html::label('Текст для пошуку', '', ['class' => 'ld-search-form']) ?></div>
        <div class="col-sm-8"> <?= Html::input('text', 'title') ?></div>
        <div class="col-sm-offset-2"></div>
    </div>

    <div class="row search-docs">
        <div class="col-sm-2"><?= Html::label('Тип документу', '', ['class' => 'ld-search-form']) ?></div>
        <div class="col-sm-2"><?= Html::dropDownList('type', '',
                [
                    'Всі документи' => 'Всі документи',
                    'розпорядження' => 'Розпорядження',
                    'доручення' => 'Доручення',
                ]) ?>
        </div>
        <div class="col-sm-offset-8"></div>
    </div>

    <div class="row search-docs">
        <div class="col-sm-2"><?= Html::label('Рік', '', ['class' => 'ld-search-form']) ?></div>
        <div class="col-sm-2">
            <?= Html::dropDownList('year', '',
                [
                    '0' => 'За всі роки',
                    '2015' => '2015',
                    '2016' => '2016',
                ]) ?>
        </div>

        <div class="col-sm-offset-8"></div>

    </div>


    <div class="row search-docs">
        <div class="col-sm-2"><?= Html::label('Місяць', '', ['class' => 'ld-search-form']) ?></div>
        <div class="col-sm-2"><?= Html::dropDownList('month', '',
                [
                    '0' => 'За всі місяці',
                    '1' => 'Січень',
                    '2' => 'Лютий',
                    '3' => 'Березень',
                    '4' => 'Квітень',
                    '5' => 'Травень',
                    '6' => 'Червень',
                    '7' => 'Липень',
                    '8' => 'Серпень',
                    '9' => 'Вересень',
                    '10' => 'Жовтень',
                    '11' => 'Листопад',
                    '12' => 'Грудень',
                ]) ?>
        </div>
        <div class="col-sm-offset-8"></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Пошук', ['class' => 'btn btn-success']) ?>
    </div>

    <?= Html::endForm() ?>

    <?= $model ?>


</div>





