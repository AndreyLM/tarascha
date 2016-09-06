<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use frontend\widgets\Menu;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!---->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!--    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    <!---->
    <!--    <script src="--><?//= Url::to("@web/js/main.js") ?><!--"></script>-->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>

    <nav class="navbar navbar-inverse " id="mainNav">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand text-uppercase text-center" href="#">
                    <img id="header-gerb" src="<?= \yii\helpers\Url::to("@web/img/gerb.png") ?>" width="50px;"/>
                    Таращанська районна <br>державна адміністрація</a>
            </div>

            <div class="col-sm-2 pull-right" id="search">
                <form action="<?= Url::to(['site/search'])?>" class="" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                <ul class="nav navbar-nav" id="links">
                    <li class="active"><a href="<?=Url::to('/site/index')?>"">Головна</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Новини <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=Url::to(['site/articles', 'id' => 4])?>">Новини Таращанщини</a></li>
                            <li><a href="<?=Url::to(['site/articles', 'id' => 6])?>">Новини Київщини</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Медіа <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Фотогалерея</a></li>
                            <li><a href="#">Відеогалерея</a></li>

                        </ul>
                    </li>
                    <li><a href="<?= Url::to(['site/article', 'slug' => 'ogolosenna'])?>">Оголошення</a></li>
                    <li><a href="<?= Url::to(['site/article', 'slug' => 'naavni-vakansii-v-tarasanskij-rajonnij-derzavnij-administracii'])?>">Вакансії</a></li>
                    <li><a href="<?= Url::to(['site/article', 'slug' => 'kontakti'])?>">Контакти</a></li>

                </ul>
            </div>
        </div>
    </nav>

</header>


<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
<?= Alert::widget() ?>

<div class="main_content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-sm-9 col-md-10">
                    <?= $content ?>
                </div>

                <div class="col-sm-3 col-md-2">
                    <div class="banner">
                        <div class="main_header">
                            <h3 class="text-info text-left">
                                <span class="glyphicon glyphicon-info-sign"></span>&nbsp;
                                Корисні посилання:</h3>

                        </div>
                        <div class="banners">
                            <img class="img_banner" src="<?= \yii\helpers\Url::to("@web/img/banners/prezident.gif") ?>"/>
                            <img class="img_banner" src="<?= \yii\helpers\Url::to("@web/img/banners/VRU.gif") ?>"/>
                            <img class="img_banner" src="<?= \yii\helpers\Url::to("@web/img/banners/koda.jpg") ?>"/>
                            <img class="img_banner" src="<?= \yii\helpers\Url::to("@web/img/banners/3.gif") ?>"/>
                            <img class="img_banner" src="<?= \yii\helpers\Url::to("@web/img/banners/4.gif") ?>"/>
                            <img class="img_banner" src="<?= \yii\helpers\Url::to("@web/img/banners/ban1.gif") ?>"/>
                            <img class="img_banner" src="<?= \yii\helpers\Url::to("@web/img/banners/ecsor2.gif") ?>"/>
                            <img class="img_banner" src="<?= \yii\helpers\Url::to("@web/img/banners/gologomor.jpg") ?>"/>
                        </div>

                    </div>
                </div>
            </div>
    </div>
</div>


<?php //echo \Yii::$app->view->renderFile('@app/views/layouts/partial/menu2.php'); ?>
<?= Menu::widget() ?>

<hr>
<div class="container main_header">
    <div class="row">
        <h3 class="text-info text-uppercase">
            <span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;
            Останні новини
        </h3>
        <hr>
        <div class="main_text">
            
        </div>
    </div>

</div>
<hr>
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/partial/footer.php'); ?>


<?php
Modal::begin([
    'header' => '<h4>Електронне звернення до голови адіністрації</h4>',
    'id' => 'form-mail-head',
    'size' => 'modal-lg',
]);

echo "<div id='modalMailHead'></div>";
Modal::end();
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
