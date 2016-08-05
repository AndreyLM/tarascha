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

    <script src="<?= Url::to("@web/js/main.js") ?>"></script>
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
    <div class="container-fluid">
        <div class="row announce">

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7  no-margin-padding announce" >
                        <img class="img_announce_big"  src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                        <h4 class="announce-header">Some header will be here in the future</h4>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12 col-xs-6 no-margin-padding">
                                <img class="img_announce_small" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                            </div>
                            <div class="clearfix visible-md"></div>
                            <div class="col-md-12 col-xs-6 no-margin-padding">
                                <img class="img_announce_small" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>"/>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-4 no-margin-padding">
                <div class="side_bar">
                    <div class="row">
                        <div class="col-md-6 vertical-divider-right">
                            <p class="text-center">
                                <span class="glyphicon glyphicon-envelope "></span>
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
                        <div class="col-md-6">
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


<section id="main_menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-2 secondMenu">
                <a data-value="overview" href="#main_menu">
                    <div class="menu2"><h4>Загальні відомості про район</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="administration" href="#main_menu">
                    <div class="menu2"><h4>Адміністрація</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="areas_of_work" data-value="" href="#main_menu">
                    <div class="menu2"><h4>Напрямки роботи</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="territorial_authorities" href="#main_menu">
                    <div class="menu2"><h4>Територіальні органи влади</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="normative_legal_documents" href="#main_menu">
                    <div class="menu2"><h4>Норативно-правові документи</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="economics" href="#main_menu">
                    <div class="menu2"><h4>Економіка</h4></div>
                </a>
            </div>
        </div>
        <div class="row">
            <div  class="col-xs-2 secondMenu">
                <a data-value="CNAP" href="#main_menu">
                    <div class="menu2"><h4>ЦНАП</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="work_with_public" href="#main_menu">
                    <div class="menu2"><h4>Робота з громадкістю</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="anti-corruption_activities" href="#main_menu">
                    <div class="menu2"><h4>Антикорупційна діяльність</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="" href="#main_menu">
                    <div class="menu2"><h4>Доступ до публічної інформації</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="prozorro" href="#main_menu">
                    <div class="menu2"><h4>Електронні закупівлі (Pro Zorro)</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="" href="#main_menu">
                    <div class="menu2"><h4> Участникам АТО</h4></div>
                </a>
            </div>
        </div>

        <div id="overview" class="row sub_menu hidden">
            <div class="col-sm-4 vertical-divider-right">
                <a href="#">Інформація про район</a>
                <a href="#">Паспорт району</a>
                <a href="#">Територіальні громади</a>
            </div>
            <div class="col-sm-4">
                <a href="#">Таращанська районна рада</a>
                <a href="#">Таращанська міська рада</a>
            </div>
            <div class="col-sm-offset-4"></div>
        </div>

        <div id="administration" class="row sub_menu hidden">
            <div class="col-sm-4 vertical-divider-right">
                <a href="#">Структура РДА</a>
                <a href="#">Керівництво</a>
                <a href="#">Розпорядок роботи</a>
                <a href="#">Розподіл обов'язків</a>
                <a href="#">План роботи</a>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <ul>
                            <span class="sub_menu_header">Апарат РДА</span>
                            <li class="sub_sub_menu"><a href="#">Сектор з питань внутрішньої політики, зв’язків з громадськістю та ЗМІ</a> </li>
                            <li class="sub_sub_menu"><a href="#">Загальний відділ</a> </li>
                            <li class="sub_sub_menu"><a href="#">Відділ з питань персоналу</a> </li>

                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <li class="sub_sub_menu"><a href="#">Відділ фінансово-господарського забезпечення</a> </li>
                            <li class="sub_sub_menu"><a href="#">Відділ з юридичних питань та взаємодії з правоохоронними органами</a> </li>
                            <li class="sub_sub_menu"><a href="#">Відділ ведення державного реєстру виборців</a> </li>
                            <li class="sub_sub_menu"><a href="#">Головний спеціаліст з оборонної та мобілізаційної роботи</a> </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div id="areas_of_work" class="row sub_menu hidden">
            <div class="col-sm-4 ">
                <a href="#">Служба у справах дітей та сім'ї</a>
                <a href="#">Відділ економічного розвитку ат торгівлі</a>
                <a href="#">Відділ культури, молоді та спорту</a>
                <a href="#">Відділ містобудування, архітектури та будівництва</a>
                <a href="#">Управління соціального захисту населення</a>
            </div>
            <div class="col-sm-4 vertical-divider-right vertical-divider-left">
                <a href="#">Відділ з питань цивільного захисту, ліквідації наслідків Чорнобильської катастрофи та
                житлово-комунального господарство</a>
                <a href="#">Відділ освіти і науки</a>
                <a href="#">Управління соціального захисту населення</a>
                <a href="#">Управління агропромислового розвитку</a>
                <a href="#">Територіальний центр соціального обслуговування пенсіонерів</a>
            </div>
            <div class="col-sm-4">
                <a href="#">Архів</a>
                <a href="#">Центр первинної медико-санітарної допомоги</a>
                <a href="#">Таращанська ЦРЛ</a>
                <a href="#">Сектор державної реєстрації</a>
                <a href="#">Управління фінансів</a>

            </div>
        </div>

        <div id="territorial_authorities" class="row sub_menu hidden">
            <div class="col-sm-4 ">
                <a href="#">Таращанське відділення Білоцерківської ОДПІ</a>
                <a href="#">Управління Пенсійного фонду України в Таращанському районі</a>
                <a href="#">Таращанське відділення Кагарлицької місцевої прокуратури</a>
                <a href="#">Таращанське відділення поліції Миронівського ВГУНП в Київській області</a>
                <a href="#">Таращанський районний сектор Головного управління державної служби НС України в Київській області</a>
            </div>
            <div class="col-sm-4 vertical-divider-right vertical-divider-left">
                <a href="#">Таращанський районний сектор державної міграційної служби України в Київській області</a>
                <a href="#">Таращанський районний відділ державної виконавчої служби Головно територіального управління юстиції у Київській області</a>
                <a href="#">Таращанський районний суд Київської області</a>
                <a href="#">Таращанське МРВ СБУ України в м.Києві та Київській області</a>
                <a href="#">Відділ Держгеокадастру у Таращанському районі Київської області</a>
            </div>
            <div class="col-sm-4">
                <a href="#">Управління державної казначейської служби України в Таращанському районі</a>
                <a href="#">Таращанський районний центр зайнятості</a>
                <a href="#">Таращанський районний відділ державної реєстрації актів цивільного стану Головного територіального управління юстиції у Київській області</a>
            </div>
        </div>

        <div id="normative_legal_documents" class="row sub_menu hidden">
            <div class="col-sm-4 ">
                <a href="#">Розпорядження</a>
                <a href="#">Доручення</a>
            </div>
            <div class="col-sm-offset-4">

            </div>
            <div class="col-sm-offset-4">

            </div>
        </div>

        <div id="economics" class="row sub_menu hidden">
            <div class="col-sm-4 vertical-divider-right">
                <a href="#">Інвестиційний паспорт</a>
                <a href="#">Інвестиційні об'єкти</a>
                <a href="#">Бюджет району</a>
            </div>
            <div class="col-sm-4">
                <a href="#">ЄС/ПРООН «Місцевий розвиток, орієнтований на громаду»</a>
                <a href="#">Соціально-економічний та культурний розвиток району</a>
            </div>
            <div class="col-sm-offset-4">

            </div>
        </div>

        <div id="CNAP" class="row sub_menu hidden">
            <div class="col-sm-4 vertical-divider-right">
                <a href="#">Законодавча база</a>
                <a href="#">Інформація про ЦНАП</a>
                <a href="#">Перелік адміністративних послуг, які надаються через ЦНАП</a>
            </div>
            <div class="col-sm-4">
                <a href="#">Інформаційні картки адміністративних послуг</a>
                <a href="#">Інформація про діяльність ЦНАПу</a>
            </div>
            <div class="col-sm-offset-4">

            </div>
        </div>

        <div id="work_with_public" class="row sub_menu hidden">
            <div class="col-sm-4 vertical-divider-right">
                <a href="#">Громадська рада</a>
                <a href="#">Молодіжна громадська рада</a>
                <a href="#">Звернення громадян</a>
            </div>
            <div class="col-sm-4">
                <a href="#">Громадське обговорення</a>
                <a href="#">Засоби масової інформаціїї району</a>
            </div>
            <div class="col-sm-offset-4">

            </div>
        </div>

        <div id="anti-corruption_activities" class="row sub_menu hidden">
            <div class="col-sm-4 vertical-divider-right">
                <a href="#">Законодавча база</a>
                <a href="#">Декларації</a>

            </div>
            <div class="col-sm-offset-4">

            </div>
            <div class="col-sm-offset-4">

            </div>
        </div>

        <div id="prozorro" class="row sub_menu hidden">
            <div class="col-sm-4 vertical-divider-right">
                <a href="#">Законодавча база</a>
                <a href="#">Система електронних державних закупівель "ProZorro"</a>

            </div>
            <div class="col-sm-offset-4">

            </div>
            <div class="col-sm-offset-4">

            </div>
        </div>

    </div>
</section>


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
