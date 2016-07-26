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

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <div class="container">

    </div>
    <nav class="navbar navbar-inverse" id="mainNav">
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
    <div class="container-fluid announce">
        <div class="row">

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-8"><img id="header-gerb" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"
                                               width="100%"/></div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 col-xs-6"><img id="header-gerb"
                                                                 src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"
                                                                 width="100%"/></div>
                            <div class="clearfix visible-md"></div>
                            <div class="col-md-12 col-xs-6"><img id="header-gerb"
                                                                 src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"
                                                                 width="100%"/></div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="side_bar">
                    <div class="row">
                        <div class="col-md-6 vertical-divider-right">
                            <p class="text-center">
                                <span class="glyphicon glyphicon-envelope"></span>
                                &nbsp;&nbsp;<big>Електронне звернення до голови райдержадміністрації</big>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-center">
                                <span class="glyphicon glyphicon-envelope"></span>
                                &nbsp;&nbsp;<big>Електронне звернення</big>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h4 class="text-center text-uppercase"><span class="glyphicon glyphicon-phone"></span>&nbsp;Телефони "Гарячої лінії"</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 ">
                            <p class="phone">З питань тимчасового поселення біженців<br>
                                5-20-32<br>
                                5-15-83</p>
                        </div>
                        <div class="col-md-6 vertical-divider-left">
                            <p class="phone">Допомоги військовослужбовцям, які беруть участь в АТО, та їхнім родинам<br>
                                5-20-32<br>
                                5-15-83</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-center text-uppercase"><span class="glyphicon glyphicon-phone"></span>&nbsp;Урядова телефонна "Гаряча лінія"</h4>

                            <p class="text-center"><big>0 800 507 309</big></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<section id="secondMenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-2 secondMenu">
                <a href="#">
                    <div class="menu2"><h4>Загальні відомості про район</h4></div>
                </a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href="">
                    <div class="menu2"><h4>Адміністрація</h4></div>
                </a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href="">
                    <div class="menu2"><h4>Напрямки роботи</h4></div>
                </a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href="">
                    <div class="menu2"><h4>Територіальні органи влади</h4></div>
                </a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href="">
                    <div class="menu2"><h4>Норативно-правові документи</h4></div>
                </a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href="">
                    <div class="menu2"><h4>Економіка</h4></div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 secondMenu">
                <a href="">
                    <div class="menu2"><h4>ЦНАП</h4></div>
                </a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href="">
                    <div class="menu2"><h4>Робота з громадкістю</h4></div>
                </a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href="">
                    <div class="menu2"><h4>Антикорупційна діяльність</h4></div>
                </a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href="">
                    <div class="menu2"><h4>Доступ до публічної інформації</h4></div>
                </a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href="">
                    <div class="menu2"><h4>Електронні закупівлі (Pro Zorro)</h4></div>
                </a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href="">
                    <div class="menu2"><h4> Участникам АТО</h4></div>
                </a>
            </div>
        </div>
    </div>
</section>


<div class="container-fluid main_content">
    <div class="row">
        <div class="col-sm-5 col-md-5"><h3 class="text-info text-uppercase">Новини Таращанщини</h3></div>
        <div class="col-sm-4 col-md-5"><h3 class="text-info text-uppercase">Новини Київщини</h3></div>
        <div class="col-sm-3 col-md-2">
            <h3 class="text-info text-center">Корисні посилання:</h3>
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

<div class="container-fluid main_footer">
    <div class="row">
        <div class="col-md-5">
            <p class="text-right text-uppercase text_footer">09500, м.Тараща, Київська область, вул. Героїв Чорнобиля
                1<br>
                10rda-tarascha@ukr.net</p>
        </div>
        <div class="col-md-2"><p align="center"><img src="<?= Url::to("@web/img/gerb.png") ?>"></p></div>
        <div class="col-md-5">
            <p class="text-left text-uppercase text_footer">09500, 1,st.Goroyiv Chornobilya, Kiev Region<br>
                10rda-tarascha@ukr.net</p></div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
