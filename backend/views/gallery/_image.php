<?php

use yii\helpers\Html;
use sadovojav\gallery\Module;

?>

<div class="image col-lg-3 col-md-4 col-sm-6 col-xs-12" data-id="<?= $model->id?>">
    <div class="wrapper">
        <div class="handle">
            <img src="<?= Yii::$app->homeUrl.'/backend/web/galleries/'.$model->galleryId.'/'.$model->file; ?>" class="portrait img-responsive"/>
        </div>

        <div class="bottom">
            <?= Html::textInput('caption', $model->caption, [
                'class' => 'form-control',
                'placeholder' => Module::t('default', 'CAPTION')
            ]); ?>

            <div class="actions">

                <a href="<?= Yii::$app->homeUrl.'/backend/web/galleries/'.$model->galleryId.'/'.$model->file; ?>" rel="<?= $model->galleryId; ?>" class="fancy" title="<?= $model->caption; ?>">
                    <i class="watch glyphicon glyphicon-eye-open" title="<?= Module::t('default', 'ORIGINAL'); ?>"></i>
                </a>

                <i class="edit glyphicon glyphicon-pencil" title="<?= Module::t('default', 'UPDATE_CAPTION'); ?>"></i>

                <i class="remove glyphicon glyphicon-trash" title="<?= Module::t('default', 'REMOVE_IMAGE'); ?>"></i>
            </div>
        </div>
    </div>
</div>