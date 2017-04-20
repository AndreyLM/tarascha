<?php

namespace frontend\widgets;


use yii\base\Widget;
use yii\helpers\Html;


class ApiWeather extends Widget
{
    private $dt_today = [];
    private $dt_tomorrow = [];
    private $dt_after_tomorrow = [];

    public function init()
    {
        parent::init();
        $this->dt_today = $this->getWeather(1);
        $this->dt_tomorrow = $this->getWeather(2);
        $this->dt_after_tomorrow = $this->getWeather(3);

    }

    public function run()
    {
        echo '<div class="row">';
        echo '<div class="col-sm-12">';

        echo '<h3>Погода у Таращі</h3>';
        echo '</div>';
        echo '</div>';

        echo '<div class="row">';

        echo '<div class="col-sm-12 col-md-4">';
        $this->renderWeather($this->dt_today, 'today');
        echo '</div>';

        echo '<div class="col-sm-6 col-md-4">';
        $this->renderWeather($this->dt_tomorrow, 'today +1 day');
        echo '</div>';

        echo '<div class="col-sm-6 col-md-4">';
        $this->renderWeather($this->dt_after_tomorrow, 'today +2 day');
        echo '</div>';


        echo '</div>';
    }

    function getWeather($date)
    {
        $weather = file_get_contents('https://ua.sinoptik.ua/погода-тараща-303026372/');
        preg_match('/<div.*?id="bd' . $date . '"\s*>.*?min">.*?<span>(.{0,10})<\/span>/', $weather, $temp_min);
        preg_match('/<div.*?id="bd' . $date . '"\s*>.*?max">.*?<span>(.{0,10})<\/span>/', $weather, $temp_max);
        preg_match('/<div.*?id="bd' . $date . '"\s*>.*?<img class="weatherImg" src="(.*?)"/', $weather, $temp_img);

        $res = [];
        $res['img'] = $temp_img[1] ? $temp_img[1] : '';
        $res['temp1'] = $temp_min[1] ? $temp_min[1] : '';
        $res['temp2'] = $temp_max[1] ? $temp_max[1] : '';

        return $res;

    }

    function renderWeather(array $arr, $day)
    {


        echo '<div class="row">';

        echo '<div class="col-sm-12 col-md-4">';
        echo date('Y.m.d', strtotime($day));

        echo '<img src="' . $arr['img'] . '"/>';
        echo '</div>';

        echo '<div class="col-sm-12 col-md-8">';
        echo '<p>мін. макс.</p>';
        echo Html::tag('p', $arr['temp1'] . '&nbsp;' . $arr['temp2']);
        echo '</div>';

        echo '</div>';


//        echo Html::tag('p', $arr['img']);

    }
}

