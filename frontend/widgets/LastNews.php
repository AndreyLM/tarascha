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
            echo '<img width="100%" src="'.strip_tags($article->img).'"/>';
            echo '<h4>' . $article->intro_text . '</h4>';
            echo '</div>';
            echo '<a class="read_more" href="'.Url::to(['site/article', 'slug' => $article->slug]).'">детальніше...</a>';
            echo '</div>';
        }

    }

}