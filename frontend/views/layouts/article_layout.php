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
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                <ul class="nav navbar-nav" id="links">
                    <li class="active"><a href="#">Головна</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Новини <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Новини Таращі</a></li>
                            <li><a href="#">Новини Київщини</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Медіа <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Фотогалерея</a></li>
                            <li><a href="#">Відеогалерея</a></li>

                        </ul>
                    </li>
                    <li><a href="#">Оголошення</a></li>
                    <li><a href="#">Вакансії</a></li>
                    <li><a href="#">Контакти</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!--                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

</header>



<div class="container-fluid main_content">
    <div class="row">
        <div class="col-sm-5 col-md-5 ">
            <div class="main_header">
                <h3 class="text-info text-uppercase"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Новини Таращанщини</h3>
            </div>
            <hr>

            <div class="row vertical-divider-right">
                <div class="col-md-6">
                    <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                    <h4>Some article's header</h4>
                    <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                        Consequatur deserunt, doloribus, enim id iste, molestias omnis
                        quibusdam rerum sit totam veritatis voluptas.</p>
                </div>
                <div class="col-md-6">
                    <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                    <h4>Some article's header</h4>
                    <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                        Consequatur deserunt, doloribus, enim id iste, molestias omnis
                        quibusdam rerum sit totam veritatis voluptas.</p>
                </div>
            </div>
            <div class="row vertical-divider-right">
                <div class="col-md-6">
                    <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                    <h4>Some article's header</h4>
                    <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                        Consequatur deserunt, doloribus, enim id iste, molestias omnis
                        quibusdam rerum sit totam veritatis voluptas.</p>
                </div>
                <div class="col-md-6">
                    <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                    <h4>Some article's header</h4>
                    <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                        Consequatur deserunt, doloribus, enim id iste, molestias omnis
                        quibusdam rerum sit totam veritatis voluptas.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-5 ">
            <div class="main_header">
                <h3 class="text-info text-uppercase"><span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;Новини Київщини</h3>
            </div>
            <hr>
            <div class="row vertical-divider-right">
                <div class="col-md-6">
                    <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                    <h4>Some article's header</h4>
                    <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                        Consequatur deserunt, doloribus, enim id iste, molestias omnis
                        quibusdam rerum sit totam veritatis voluptas.</p>
                </div>
                <div class="col-md-6">
                    <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                    <h4>Some article's header</h4>
                    <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                        Consequatur deserunt, doloribus, enim id iste, molestias omnis
                        quibusdam rerum sit totam veritatis voluptas.</p>
                </div>
            </div>
            <div class="row vertical-divider-right">
                <div class="col-md-6">
                    <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                    <h4>Some article's header</h4>
                    <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                        Consequatur deserunt, doloribus, enim id iste, molestias omnis
                        quibusdam rerum sit totam veritatis voluptas.</p>
                </div>
                <div class="col-md-6">
                    <img width="100%" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                    <h4>Some article's header</h4>
                    <p> >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusamus aliquid autem molestiae nemo nostrum quam voluptatem.
                        Consequatur deserunt, doloribus, enim id iste, molestias omnis
                        quibusdam rerum sit totam veritatis voluptas.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-2">
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

<?php echo \Yii::$app->view->renderFile('@app/views/layouts/partial/menu2.php'); ?>

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
