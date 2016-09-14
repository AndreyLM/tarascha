<?php
use frontend\helpers\Thumb;
use yii\helpers\Url;

$this->title = $title;
?>


<div class="article_header">
    <h3 class="text-info text-uppercase">
        <span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;
        <?= $title ?>
    </h3>
</div>

<div class="row">
    <?php foreach ($model as $item) {
        $file= $item->getFiles()->orderBy('position')->asArray()->one();
        $url = Yii::$app->request->hostInfo . '/backend/web/galleries/' . $item->id . '/' . $file['file'];
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <a href="<?= Url::to(['/site/gallery', 'id'=> $item->id])?>">
            <?= Thumb::renderThumb($url, $item->name)?>
        </a>
        </div>
    <?php }?>
</div>
