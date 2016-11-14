<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 14.11.2016
 * Time: 9:55
 */

$this->title = "Відеогалерея";
?>
<div class="row">

    <?php foreach ($model as $video) : ?>
        <div class="col-md-4">
            <h4><?=$video->title?></h4>
            <iframe width="100%" height="200px"
                    src="https://www.youtube.com/embed/<?=$video->value?>"
                    frameborder="0" allowfullscreen>
            </iframe>
        </div>
    <?php endforeach; ?>
</div>
