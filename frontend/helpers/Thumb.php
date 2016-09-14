<?php
namespace frontend\helpers;

use yii\helpers\Html;

class Thumb
{
    public static function renderThumb($url="", $caption="")
    {
        $html =  Html::beginTag('div', ['class' => 'gallery-thumb-img',
            'style' => "background: url(".$url.") no-repeat center;
                            -webkit-background-size: cover;
                            -moz-background-size: cover;
                            -o-background-size: cover;
                            background-size: cover;"]);

        $html .= Html::beginTag('div', ['class' => 'gallery-thumb-caption']);
        $html .= '<h4>' . $caption . '</h4>';
        $html .= Html::endTag('div');

        $html .= Html::endTag('div');

        return $html;
    }
}