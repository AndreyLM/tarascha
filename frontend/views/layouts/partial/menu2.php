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
                    <div class="menu2"><h4>Структурні підрозділи</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="territorial_authorities" href="#main_menu">
                    <div class="menu2"><h4>Територіальні органи влади</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="normative_legal_documents" href="#main_menu">
                    <div class="menu2"><h4>Нормативно-правові документи</h4></div>
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
                    <div class="menu2"><h4>Робота з громадськістю</h4></div>
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
                    <div class="menu2"><h4>Напрямки роботи</h4></div>
                </a>
            </div>
            <div  class="col-xs-2 secondMenu">
                <a data-value="" href="#main_menu">
                    <div class="menu2"><h4>Учасникам АТО</h4></div>
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
                            <li class="sub_sub_menu"><a href="<?= Url::to(['site/article', 'slug' => 'golovnij-specialist-z-pitan-vnutrisnoi-politiki-zvazkiv-z-gromadskistu-ta-zmi'])?>">Головний спеціаліст з питань внутрішньої політики, зв’язків з громадськістю та ЗМІ</a> </li>
                            <li class="sub_sub_menu"><a href="<?= Url::to(['site/article', 'slug' => 'zagalnij-viddil'])?>">Загальний відділ</a> </li>
                            <li class="sub_sub_menu"><a href="<?= Url::to(['site/article', 'slug' => 'viddil-z-pitan-personalu-aparatu-rajderzadministracii'])?>">Відділ з питань персоналу</a> </li>

                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <li class="sub_sub_menu"><a href="<?= Url::to(['site/article', 'slug' => 'viddil-finansovo-gospodarskogo-zabezpecenna-aparatu-rajderzadministracii'])?>">Відділ фінансово-господарського забезпечення</a> </li>
                            <li class="sub_sub_menu"><a href="<?= Url::to(['site/article', 'slug' => 'viddil-z-uridicnih-pitan-ta-vzaemodii-z-pravoohoronnimi-organami-aparatu-rajderzadministracii'])?>">Відділ з юридичних питань та взаємодії з правоохоронними органами</a> </li>
                            <li class="sub_sub_menu"><a href="<?= Url::to(['site/article', 'slug' => 'viddil-vedenna-derzavnogo-reestru-viborciv-aparatu-rajderzadministracii'])?>">Відділ ведення державного реєстру виборців</a> </li>
                            <li class="sub_sub_menu"><a href="<?= Url::to(['site/article', 'slug' => 'golovnij-specialist-z-oboronnoi-ta-mobilizacijnoi-roboti-aparatu-rajderzadministracii'])?>">Головний спеціаліст з оборонної та мобілізаційної роботи</a> </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div id="areas_of_work" class="row sub_menu hidden">
            <div class="col-sm-4 ">
                <a href="<?= Url::to(['site/article', 'slug' => 'sluzba-u-spravah-ditej-ta-simi'])?>">Служба у справах дітей та сім'ї</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'viddil-ekonomicnogo-rozvitku-i-torgivli'])?>">Відділ економічного розвитку ат торгівлі</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'viddil-kulturi-molodi-i-sportu'])?>">Відділ культури, молоді та спорту</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'viddil-mistobuduvanna-arhitekturi-ta-budivnictva'])?>">Відділ містобудування, архітектури та будівництва</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'upravlinna-socialnogo-zahistu-naselenna'])?>">Управління соціального захисту населення</a>
            </div>
            <div class="col-sm-4 vertical-divider-right vertical-divider-left">
                <a href="<?= Url::to(['site/article', 'slug' => 'viddl-z-pitan-civilnogo-zahistu-likvidacii-naslidkiv-cornobilskoi-katastrofi-ta-zitlovo-komunalnogo-gospodarstva'])?>">Відділ з питань цивільного захисту, ліквідації наслідків Чорнобильської катастрофи та
                житлово-комунального господарство</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'viddil-osviti-i-nauki'])?>">Відділ освіти і науки</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'upravlinna-agropromislovogo-rozvitku'])?>">Управління агропромислового розвитку</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'teritorialnij-centr-socialnogo-obslugovuvanna-pensioneriv'])?>">Територіальний центр соціального обслуговування пенсіонерів</a>
            </div>
            <div class="col-sm-4">
                <a href="<?= Url::to(['site/article', 'slug' => 'arhivnij-sektor'])?>">Архів</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'centr-pervinnoi-mediko-sanitarnoi-dopomogi'])?>">Центр первинної медико-санітарної допомоги</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'kz-trr-tarasanska-centralna-rajonna-likarna'])?>">Таращанська ЦРЛ</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'sektor-derzavnoi-reestracii'])?>">Сектор державної реєстрації</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'upravlinna-finansiv'])?>">Управління фінансів</a>

            </div>
        </div>

        <div id="territorial_authorities" class="row sub_menu hidden">
            <div class="col-sm-4 ">
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanske-viddilenna-bilocerkivskoi-obednanoi-derzavnoi-podatkovoi-inspekcii-golovnogo-upravlinna-derzavnoi-fiskalnoi-sluzbi-ukraini-u-kiivskij-oblasti'])?>">Таращанське відділення Білоцерківської ОДПІ</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'upravlinna-pensijnogo-fondu-ukraini-u-tarasanskomu-rajoni-v-kiivskij-oblasti'])?>">Управління Пенсійного фонду України в Таращанському районі</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanskij-viddil-kagarlickoi-miscevoi-prokuraturi'])?>">Таращанське відділення Кагарлицької місцевої прокуратури</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanske-viddilenna-policii-mironivskogo-viddilu-golovnogo-upravlinna-nacionalnoi-policii-v-kiivskij-oblasti'])?>">Таращанське відділення поліції Миронівського ВГУНП в Київській області</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanskij-rajonnij-sektor-golovnogo-upravlinna-ds-ns-ukraini-u-kiivskij-oblasti'])?>">Таращанський районний сектор Головного управління державної служби НС України в Київській області</a>
            </div>
            <div class="col-sm-4 vertical-divider-right vertical-divider-left">
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanskij-rajonnij-sektor-upravlinna-derzavnoi-migracijnoi-sluzbi-ukraini-v-kiivskij-oblasti'])?>">Таращанський районний сектор державної міграційної служби України в Київській області</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanskij-rajonnij-viddil-derzavnoi-vikonavcoi-sluzbi-golovnogo-teritorialnogo-upravlinna-usticii-u-kiivskij-oblasti'])?>">Таращанський районний відділ державної виконавчої служби Головно територіального управління юстиції у Київській області</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanskij-rajonnij-sud-kiivskoi-oblasti'])?>">Таращанський районний суд Київської області</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanske-mizrajonne-viddilenna-golovnogo-upravlinna-sbu-v-mkievi-ta-kiivskij-oblasti'])?>">Таращанське МРВ СБУ України в м.Києві та Київській області</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'viddil-derzgeokadastru-u-tarasanskomu-rajoni-kiivskoi-oblasti'])?>">Відділ Держгеокадастру у Таращанському районі Київської області</a>
            </div>
            <div class="col-sm-4">
                <a href="<?= Url::to(['site/article', 'slug' => 'upravlinna-derzavnoi-kaznacejskoi-sluzbi-ukraini-u-tarasanskomu-rajoni-kiivskij-oblasti'])?>">Управління державної казначейської служби України в Таращанському районі</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanskij-rajonnij-centr-zajnatosti'])?>">Таращанський районний центр зайнятості</a>
                <a href="<?= Url::to(['site/article', 'slug' => 'tarasanskij-rajonnij-viddil-derzavnoi-reestracii-aktiv-civilnogo-stanu-golovnogo-teritorialnogo-upravlinna-usticii-u-kiivskij-oblasti'])?>">Таращанський районний відділ державної реєстрації актів цивільного стану Головного територіального управління юстиції у Київській області</a>
            </div>
        </div>

        <div id="normative_legal_documents" class="row sub_menu hidden">
            <div class="col-sm-4 ">
                <a href="#">Розпорядження</a>
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

            </div>
            <div class="col-sm-offset-4">

            </div>
            <div class="col-sm-offset-4">

            </div>
        </div>

        <div id="prozorro" class="row sub_menu hidden">
            <div class="col-sm-4 vertical-divider-right">
                <a href="#">Регуляторна політика</a>
                <a href="#">Електронні закупівлі (Pro Zorro)</a>

            </div>
            <div class="col-sm-offset-4">

            </div>
            <div class="col-sm-offset-4">

            </div>
        </div>

    </div>
</section>