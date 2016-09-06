<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = $models[0]->category->title;
?>

<div class="article_header">
    <h3 class="text-info text-uppercase">
        <span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;
        Результати пошуку
    </h3>
</div>
<div class="main_text">
    <?php

    foreach ($models as $model) {
        echo '<a href="' . Url::to(['site/article', 'slug' => $model->slug]) . '">' . '<h4>' . $model->title . '</h4>' . '</a>';
        echo '<i>' . $model->created_at . '</i>';
        $str = strip_tags($model->intro_text);
        $newStr = mb_substr($str, 0, 400);
        echo '<p>' . $newStr . '...</p>';
        echo '<hr style="border:dashed 1px grey;">';
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



