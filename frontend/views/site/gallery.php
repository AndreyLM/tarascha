<?php
use frontend\widgets\gallery\Gallery;


$this->title = $title;
?>


<div class="article_header">
    <h3 class="text-info text-uppercase">
        <span class="glyphicon glyphicon-bookmark"></span>&nbsp;&nbsp;
        <?= $title ?>
    </h3>
</div>

<div class="row">

    <?php
    echo Gallery::widget([
        'items' => $model,
    ]);
    ?>

</div>
