<?php
namespace frontend\widgets;
use yii\base\Widget;
use common\models\Banner;

class Banners extends Widget
{
    private $model;

    public function init()
    {
        parent::init();
        $this->model = Banner::find()->orderBy('position')->all();
    }

    public function run()
    {
        foreach ($this->model as $banner) {

            echo '<a href="'.$banner->link.'">';
            echo $banner->img;
            echo '</a>';
        }

    }
}