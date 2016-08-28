<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Menu;

/* @var $this yii\web\View */
/* @var $model common\models\MenuItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu_id')->dropDownList(ArrayHelper::map(Menu::find()->all(), 'id', 'title')) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(['header' => 'header', 'category' => 'category', 'article' => 'article']) ?>

    <?= $form->field($model, 'categoryId_articleSlug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->dropDownList([1=>'Column 1', 2=>'Column 2', 3=>'Column 3']) ?>

    <?= $form->field($model, 'position2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
