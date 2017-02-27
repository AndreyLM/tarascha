<?php
use yii\helpers\Html;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Таращанська РДА</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?php if (!Yii::$app->user->isGuest) {
            echo Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                '<i class="fa fa-sign-out"></i> Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
        } ?>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Панель управління', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Файл менеджер', 'icon' => 'fa fa-folder-open', 'url' => ['/site/media-manager']],
                    ['label' => 'Фотогалерея', 'icon' => 'fa fa-picture-o', 'url' => ['/gallery/gallery/index']],
                    ['label' => 'Відеогалерея', 'icon' => 'fa fa-picture-o', 'url' => ['/video/index']],
                    ['label' => 'Банери', 'icon' => 'fa fa-share', 'url' => ['/banner/index']],
                    ['label' => 'Телефонни', 'icon' => 'fa fa-share', 'url' => ['/phone/index']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Меню',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Меню', 'url' => ['/menu/index'],],
                            ['label' => 'Пункти меню', 'url' => ['menu-item/index'],],
                        ],
                    ],
                    [
                        'label' => 'Категорії',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Нова категорія', 'url' => ['/main-category/create'],],
                            ['label' => 'Переглянути категорії', 'url' => ['/main-category/index'],],
                        ],
                    ],
                    [
                        'label' => 'Підкатегорії',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Нова підкатегорія', 'url' => ['/category/create'],],
                            ['label' => 'Переглянути підкатегорії', 'url' => ['/category/index'],],
                        ],
                    ],
                    [
                        'label' => 'Статті',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Створити статтю', 'url' => ['/article/create'],],
                            ['label' => 'Переглянути статті', 'url' => ['/article/index'],],
                        ],
                    ],
                    [
                        'label' => 'Оголошення',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Головне оголошення', 'url' => ['/announce/view?id=1'],
                            ],
                            [
                                'label' => 'Друге оголошення', 'url' => ['/announce/view?id=2'],
                            ],
                            [
                                'label' => 'Третє оголошення', 'url' => ['/announce/view?id=3'],
                            ],
                        ],
                    ],
                    [
                        'label' => 'Документи',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Переглянути всі документи', 'url' => ['/legal-documents/index'],
                            ],
                            [
                                'label' => 'Добавити', 'url' => ['/legal-documents/create'],
                            ],
                        ],
                    ],


                ],
            ]
        ) ?>

    </section>

</aside>
