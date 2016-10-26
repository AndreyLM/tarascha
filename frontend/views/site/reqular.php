<?php
use common\models\Article;

$model = Article::findOne(239);
$value = 'від';

preg_match_all('/<a.*>.*'.$value.'.*<\/a>/', $model->intro_text, $matches);

$i=1;
foreach ($matches[0] as $matches) {
    echo $i++.'. '.$matches.'</br></br>';
}
