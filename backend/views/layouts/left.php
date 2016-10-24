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
                    ['label' => 'Control panel', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'File Manager', 'icon' => 'fa fa-folder-open', 'url' => ['/site/media-manager']],
                    ['label' => 'Photo gallery', 'icon' => 'fa fa-picture-o', 'url' => ['/gallery/gallery/index']],
                    ['label' => 'Banners', 'icon' => 'fa fa-share', 'url' => ['/banner/index']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Menus',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Menu', 'url' => ['/menu/index'],],
                            ['label' => 'Menu\'s items', 'url' => ['menu-item/index'],],
                        ],
                    ],
                    [
                        'label' => 'Categories',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'New category', 'url' => ['/main-category/create'],],
                            ['label' => 'View categories', 'url' => ['/main-category/index'],],
                        ],
                    ],
                    [
                        'label' => 'SubCategories',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'New subCategory', 'url' => ['/category/create'],],
                            ['label' => 'View subCategories', 'url' => ['/category/index'],],
                        ],
                    ],
                    [
                        'label' => 'Articles',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'New article', 'url' => ['/article/create'],],
                            ['label' => 'View articles', 'url' => ['/article/index'],],
                        ],
                    ],
                    [
                        'label' => 'Announce',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            [
                                'label' => 'Main Announce', 'url' => ['/announce/view?id=1'],
                            ],
                            [
                                'label' => 'Second Announce', 'url' => ['/announce/view?id=2'],
                            ],
                            [
                                'label' => 'Third Announce', 'url' => ['/announce/view?id=3'],
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
