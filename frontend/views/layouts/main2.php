<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
                    <img id="header-gerb" src="<?= \yii\helpers\Url::to("@web/img/gerb.png") ?>" width="50px;" />
                    Таращанська районна <br>державна адміністрація</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                <ul class="nav navbar-nav" id="links">
                    <li class="active"><a href="#">Головна</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Новини <span class="caret"></span></a>
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
                    <li><a href="#">Контакти</a></li>
                    <li><a href="#">Відеогалрея</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
<!--                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-8"><img id="header-gerb" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>" width="100%"/></div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 col-xs-6"><img id="header-gerb" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>" width="100%"/></div>
                            <div class="clearfix visible-md" ></div>
                            <div class="col-md-12 col-xs-6"><img id="header-gerb" src="<?= \yii\helpers\Url::to("@web/img/rok211.jpg") ?>" width="100%"/></div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, illo, voluptatibus. Alias aperiam
                        blanditiis cupiditate distinctio illum molestiae nam, nisi nobis nostrum nulla odit omnis
                        praesentium, quia quod ratione suscipit.
                    </li>
                    <li>A aperiam consequatur cum cumque cupiditate delectus error et expedita harum ipsa laudantium
                        magnam nam officia perspiciatis praesentium provident quasi quidem, recusandae reprehenderit
                        sapiente sed sequi similique soluta tenetur vel!
                    </li>
                    <li>A aliquam delectus facere facilis inventore libero quae tenetur unde vero voluptate. Ab alias
                        aspernatur, cupiditate dolore doloremque, dolorum eum facere laborum pariatur quasi qui quo
                        repudiandae soluta ullam voluptatibus.
                    </li>
                    <li>Accusantium, animi, blanditiis deleniti eligendi esse eum explicabo, facilis in ipsa labore
                        laborum maxime nobis nulla ratione rerum saepe temporibus. Adipisci aliquid cum facere, fugit
                        natus tenetur voluptates? Magni, modi.
                    </li>
                    <li>Architecto minus modi non temporibus. A, animi, optio! Aliquam aperiam debitis doloremque
                        ducimus illo, labore maiores neque nulla obcaecati odit perferendis placeat quae quaerat
                        quisquam ratione reiciendis sit ullam voluptatem?
                    </li>
                    <li>Animi aperiam, explicabo fuga laborum magnam molestias repudiandae. Ipsa iure laudantium modi
                        necessitatibus rerum, sequi. Aliquid debitis dolor dolorem odio ratione, voluptate? Doloribus
                        eum molestias nesciunt officiis quae repellendus unde.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<section id="secondMenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-2 secondMenu">
                <a href="#"><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href=""><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href=""><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href=""><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href=""><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href=""><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2 secondMenu">
                <a href=""><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href=""><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href=""><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href=""><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href=""><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
            <div class="col-xs-2 secondMenu">
                <a href=""><div class="menu2"><h6>Menu2</h6></div></a>
            </div>
        </div>
    </div>
</section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
