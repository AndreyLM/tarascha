<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = $models[0]->category->title;
?>

<div class="article_header">
    <h3 class="text-info text-uppercase">
        <span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;
        <?= $models[0]->category->title ?>
    </h3>
</div>
<div class="main_text">
    <?php $j = 0;
    foreach ($models as $model) : ?>
        <?php if ($j % 3 == 0) {
            echo '<div class="row">';
        }

        ?>
        <div class="col-md-4">
            <div class="home_article">
                <?php
                if (!empty($model->img)):?>
                    <div class="article-main-photo" style="position:relative; width: 100%;
                        background: url(<?= strip_tags($model->img) ?>) no-repeat center;
                        -webkit-background-size: cover;
                        -moz-background-size: cover;
                        -o-background-size: cover;
                        background-size: cover;">

                    </div>

                <?php endif; ?>
                <h4><?= $model->title ?></h4>
                <p><i>Опубліковано: <?= Yii::$app->formatter->asDate($model->created_at, 'd-M-Y') ?></i></p>


                <p> <?= $model->intro_text ?></p>
                <?php $j++; ?>
            </div>
            <br>
            <a class="btn btn-default read_more"
               href="<?= \yii\helpers\Url::to(['site/article', 'slug' => $model->slug]) ?>">детальніше...</a>
            <br>
            <hr style="border: 1px inset lightgrey;" width="100%">
        </div>
        <?php $j++; ?>
        <?php if ($j % 3 == 0 & $j != 0) {
            echo '</div>';
        } ?>


    <?php endforeach ?>
    <?php
    if (count($models) % 3 != 0) {
        echo '</div>';
    }
    ?>
    <div class="row">
        <div class="col-md-12">
            <?= LinkPager::widget([
                'pagination' => $pages,
            ]);
            ?>
        </div>
    </div>

</div>



