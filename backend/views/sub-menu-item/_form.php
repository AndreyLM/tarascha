<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SubMenuItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-menu-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent_menu_item')->hiddenInput(['value' => Yii::$app->session->getFlash('menu_id')])->label(false) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(['article' => 'стаття', 'root' =>'категорія', 'header' => 'заголовок']) ?>

    <?= $form->field($model, 'categoryId_articleSlug')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Створити' : 'Зберегти', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    $(function(){
        var is_enable = $('#submenuitem-type').val();
        if(is_enable=='header') {
            $('#submenuitem-categoryid_articleslug').attr('disabled', 'disabled');
        }

        $('#submenuitem-type').change(function () {
            var smiType = $(this).val();
            if(smiType=='header') {
                $('#submenuitem-categoryid_articleslug').attr('disabled', 'disabled');
            } else {
                $('#submenuitem-categoryid_articleslug').removeAttr('disabled');
            }
        });
    });
</script>
