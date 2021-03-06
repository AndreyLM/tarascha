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
use frontend\widgets\Banners;
use frontend\widgets\Phone;
use frontend\widgets\ApiCurrency;
use frontend\widgets\ApiWeather;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="uk_UA">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!---->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!--    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    <!---->
    <!--    <script src="--><? //= Url::to("@web/js/main.js") ?><!--"></script>-->
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

                <a class="navbar-brand text-uppercase text-center" id="nav_brand" href="#">
                    <img id="header-gerb" src="<?= \yii\helpers\Url::to("@web/img/gerb.png") ?>" width="50px;"/>
                    Таращанська районна <br>державна адміністрація</a>
            </div>
            <div class="col-sm-2 pull-right" id="search">
                <form action="<?= Url::to(['site/search']) ?>" class="" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">

                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                <ul class="nav navbar-nav" id="links">
                    <li class="active"><a href="<?= Url::to('/site/index') ?>">Головна</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Новини <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= Url::to(['/site/articles', 'id' => 4]) ?>">Новини Таращанщини</a></li>
                            <li><a href="<?= Url::to(['/site/articles', 'id' => 6]) ?>">Новини Київщини</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Медіа <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= Url::to('/site/galleries') ?>">Фотогалерея</a></li>
                            <li><a href="<?= Url::to('/site/video') ?>">Відеогалерея</a></li>

                        </ul>
                    </li>
                    <li><a href="<?= Url::to(['/site/article', 'slug' => 'ogolosenna']) ?>">Оголошення</a></li>
                    <li>
                        <a href="<?= Url::to(['/site/article', 'slug' => 'naavni-vakansii-v-tarasanskij-rajonnij-derzavnij-administracii']) ?>">Вакансії</a>
                    </li>
                    <li><a href="<?= Url::to(['/site/article', 'slug' => 'kontakti']) ?>">Контакти</a></li>

                    <?php if (!Yii::$app->user->isGuest) {
                        echo '<li class="dropdown">';
                        echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i></a>';
                        echo '<ul class="dropdown-menu">';
                        echo '<li><a href="'.Url::to('/admin').'">Admin panel</a></li>';
                        echo '<li>'
                            .Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                '<i class="glyphicon glyphicon-log-out"></i> (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link']
                            )
                            . Html::endForm()
                            . '</li>';
                        echo '</ul>';
                        echo '</li>';
                    } else { ?>
                        <li><a href="<?= Url::to(['/site/login']) ?>"><i class="glyphicon glyphicon-log-in"></i></a></li>
                    <?php } ?>


                </ul>

            </div>

        </div>
    </nav>
    <div class="container-fluid">
        <div class="row announce">

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7  no-margin-padding">
                        <div style="width: 100%; height: 505px;
                            background: url(<?= $this->params['ann_articles'][0]['img'] ?>) no-repeat center;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;">

                            <a href="<?= Url::to(['/site/article', 'slug' => $this->params['ann_articles'][0]['slug']]) ?>">
                                <h4 class="announce-header"><?= $this->params['ann_articles'][0]['title'] ?></h4>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12 col-xs-6 no-margin-padding">
                                <div style="width: 99%; height: 251px; margin: 1px;
                                    background: url(<?= $this->params['ann_articles'][1]['img'] ?>) no-repeat center;
                                    -webkit-background-size: cover;
                                    -moz-background-size: cover;
                                    -o-background-size: cover;
                                    background-size: cover;">

                                    <a href="<?= Url::to(['/site/article', 'slug' => $this->params['ann_articles'][1]['slug']]) ?>">
                                        <h4 class="announce-header"><?= $this->params['ann_articles'][1]['title'] ?></h4>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix visible-md"></div>
                            <div class="col-md-12 col-xs-6 no-margin-padding">
                                <div style="width: 99%; height: 251px; margin: 1px;
                                    background: url(<?= $this->params['ann_articles'][2]['img'] ?>) no-repeat center;
                                    -webkit-background-size: cover;
                                    -moz-background-size: cover;
                                    -o-background-size: cover;
                                    background-size: cover;">

                                    <a href="<?= Url::to(['/site/article', 'slug' => $this->params['ann_articles'][2]['slug']]) ?>">
                                        <h4 class="announce-header"><?= $this->params['ann_articles'][2]['title'] ?></h4>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-4 no-margin-padding">
                <div class="side_bar">
                    <?php echo \Yii::$app->view->renderFile('@app/views/layouts/partial/email_phones.php'); ?>
                    <?= Phone::widget() ?>
                </div>
            </div>
        </div>
    </div>
</header>

<?php //echo \Yii::$app->view->renderFile('@app/views/layouts/partial/menu2.php'); ?>
<?= Menu::widget() ?>
<div class="container-fluid apis">
    <div class="row">
        <div class="col-sm-12 col-md-7"><?= ApiWeather::widget() ?></div>
        <div class="col-sm-12 col-md-5"><?= ApiCurrency::widget() ?></div>
    </div>
</div>

<div class="main_content">
    <div class="container-fluid">
        <div class="article_view">
            <div class="row">
                <?= $content ?>
                <div class="col-sm-3 col-md-2">
                    <div class="main_header">
                        <h3 class="text-info text-left">
                            <span class="glyphicon glyphicon-info-sign"></span>&nbsp;
                            Корисні посилання:</h3>

                    </div>
                    <div class="banners">
                        <?= Banners::widget() ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<?php echo \Yii::$app->view->renderFile('@app/views/layouts/partial/map.php'); ?>
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
