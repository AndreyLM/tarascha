<?php

namespace frontend\widgets;

use common\models\Article;
use yii\base\Widget;
use yii\helpers\Url;


class LastNews extends Widget
{
    public $articles;
    public $menuItems;

    public function init()
    {
        parent::init();
        $this->articles = \common\models\Article::find()->orWhere(['category_id'=>6])->orWhere(['category_id'=>4])->orderBy('created_at DESC')->limit(4)->all();
    }

    public function run()
    {
        $this->renderView();
    }


    private function renderView()
    {

        foreach ($this->articles as $article) {
            echo '<div class="col-sm-3">';
            echo '<div class="home_article">';
            echo '<div style="width: 99%; height: 150px; margin: 1px;
                                    background: url('. strip_tags($article->img).') no-repeat center;
                                    -webkit-background-size: cover;
                                    -moz-background-size: cover;
                                    -o-background-size: cover;
                                    background-size: cover;">';
            echo '</div>';
//            echo '<img width="100%" src="'.strip_tags($article->img).'"/>';
            echo '<h4>' . $article->title . '</h4>';
            echo '<p>' . $article->intro_text . '</p>';
            echo '</div>';
            echo '<a class="read_more" href="'.Url::to(['site/article', 'slug' => $article->slug]).'">детальніше...</a>';
            echo '</div>';
        }

    }

}