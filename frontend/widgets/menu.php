<?php

namespace frontend\widgets;

use common\models\MenuItem;
use yii\base\Widget;
use yii\helpers\Url;
use common\models\SubMenuItem;


class Menu extends Widget
{
    public $mn;
    public $menuItems;

    public function init()
    {
        parent::init();
        $this->mn = \common\models\Menu::find()->joinWith('menuItems')->orderBy('position')->all();
    }

    public function run()
    {
        $j = 1;
        echo '<section id="main_menu">';
        echo '<div class="container-fluid">';

        foreach ($this->mn as $menu) {
            if (($j - 1) % 6 == 0 | $j == 1) {
                echo '<div class="row">';
            }

            echo '<div class="col-sm-2 secondMenu">';
            echo '<a data-value="' . $menu->id . '"';
            if ($menu->type == 'root') {
                echo 'href="#main_menu">';
            } elseif ('category'==$menu->type) {
                echo 'href="' . Url::to(['/site/articles', 'id' => $menu->categoryId_articleSlug]) . '">';
            } elseif ($menu->type == 'documents'){
                echo 'href="' . Url::to('/site/documents') . '">';
            } else {
                echo 'href="' . Url::to(['/site/article', 'slug' => $menu->categoryId_articleSlug]) . '">';
            }
            echo '<div class="menu2">';
            echo '<h4>' . $menu->title . '</h4>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            if ($j % 6 == 0 & $j != 1) {
                echo '</div>';
            }
            $j++;
        }


        foreach ($this->mn as $menu){
            if ($menu->type=='root') {
                echo '<div id="'.$menu->id.'" class="row sub_menu hidden">';
                echo '<div class="col-sm-4 vertical-divider-right">';
                $this->renderSubMenu($menu->getMenuItems()->where(['position'=>1])->orderBy('position2')->all());
                echo '</div>';
                echo '<div class="col-sm-4 vertical-divider-right">';
                $this->renderSubMenu($menu->getMenuItems()->where(['position'=>2])->orderBy('position2')->all());
                echo '</div>';
                echo '<div class="col-sm-4">';
                $this->renderSubMenu($menu->getMenuItems()->where(['position'=>3])->orderBy('position2')->all());
                echo '</div>';
                echo '</div>';
            }
        }

        echo '</div>';
        echo '</div>';
    }

    private function renderSubMenu($items)
    {
        foreach($items as $item) {
            if($item->type=='header'){
                echo '<h4>'.$item->title.'</h4>';
            } elseif($item->type=='article'){
                echo '<a href="'.Url::to(['site/article', 'slug' => $item->categoryId_articleSlug]).'">'.$item->title.'</a>';

            } elseif ($item->type=='root') {
                echo '<div class=" btn-group">';
                echo '<button class="ddl-menu dropdown-toggle"
                                type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">'.$item->title.
                    '&nbsp<span class="glyphicon glyphicon-chevron-down"></span></button>';
                echo '<div class="dropdown-menu ddl-menu-custom">';
                foreach($item->subMenuItems as $t) {
                    if ($t->type==='article') {
                        echo '<a class="dropdown-item" href="'.Url::to(['site/article', 'slug' => $t->categoryId_articleSlug]).'">&nbsp;&nbsp;'.$t->title.'</a>';
                    }elseif ($t->type==='root') {
                        echo '<a class="dropdown-item" href="'. Url::to(['/site/articles', 'id' => $t->categoryId_articleSlug]).'">&nbsp;&nbsp;'.$t->title.'</a>';
                    }else {
                        echo '<p>&nbsp;&nbsp;'.$t->title.'</p>';
                    }

                }

                echo '</div>';
                echo '</div>';
            } else   {

                echo '<a href="'.Url::to(['site/articles', 'id' => $item->categoryId_articleSlug]).'">'.$item->title.'</a>';
            }

        }
    }

}

