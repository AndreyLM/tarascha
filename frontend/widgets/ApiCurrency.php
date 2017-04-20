<?php

namespace frontend\widgets;


use yii\base\Widget;
use yii\helpers\Html;


class ApiCurrency extends Widget
{
    private $bank;

    public function init()
    {
        parent::init();
        $this->bank = simplexml_load_file('https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange');

    }

    public function run()
    {
        echo Html::tag('h4', 'Офіційний курс гривні щодо іноземних валют:');
        foreach ($this->bank->currency as $currency) {
            if (in_array($currency->r030, ['840', '978'])) {

                echo $currency->txt . ' 1 ' . $currency->cc . ' = ' . number_format(floatval($currency->rate), 2, ',', ' ') . ' UAH';
                echo '<br>';
            }

            if ($currency->r030 == '643') {
                $currency->rate = floatval($currency->rate) * 10;
                echo $currency->txt . ' 10 ' . $currency->cc . ' = ' . number_format(floatval($currency->rate), 2, ',', ' ') . ' UAH';
                echo '<br>';
            }
        }
    }
}

