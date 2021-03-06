<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-contact">
    <p>
        Будь-ласка заповніть дану форму і розгляду Вашого звернення Головою Таращанської РДА
    </p>

    <div class="row">
        <div class="col-lg-10">
            <?php $form = ActiveForm::begin(['id' => 'contact-form', 'options' => ['class' => '']]); ?>


                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Відправити', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    <?= Html::submitButton('Відмінити', ['class' => 'btn btn-default', 'name' => 'cancel-button']) ?>
                </div>

                <div class="form-group">

                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
