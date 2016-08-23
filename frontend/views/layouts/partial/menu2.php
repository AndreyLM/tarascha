<?php
use yii\helpers\Url;
?>
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
                    <div class="menu2"><h4>Офіс реформ</h4></div>
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
                <a href="<?= Url::to(['site/article', 'slug' => 'zagalna-informacia-pro-rajon'])?>">Інформація про район</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'pasport-rajonu'])?>">Паспорт району</a>
                <a href="#">Територіальні громади</a>
            </div>
            <div class="col-sm-4">
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanska-rajonna-rada'])?>">Таращанська районна рада</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanska-miska-rada'])?>">Таращанська міська рада</a>
            </div>
            <div class="col-sm-offset-4"></div>
        </div>

        <div id="administration" class="row sub_menu hidden">
            <div class="col-sm-4 vertical-divider-right">
                <a href="<?= Url::to(['site/article', 'slug' => 'struktura-trasanskoi-rajonnoi-derdavnoi-administracii'])?>">Структура РДА</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'kerivnictvo'])?>">Керівництво</a>
                <a href="#">Розпорядок роботи</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'rozpodil-obovazkiv-miz-golovou-persim-zastupnikom-golovi-zastupnikom-golovi-ta-kerivnikom-aparatu-tarasanskoi-rajonnoi-derzavnoi-administracii'])?>">Розподіл обов'язків</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'plan-roboti'])?>">План роботи</a>
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