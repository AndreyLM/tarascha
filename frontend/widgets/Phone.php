<?php
namespace frontend\widgets;
use yii\base\Widget;


class Phone extends Widget
{
    private $phone1;
    private $phone2;
    private $phone3;

    public function init()
    {
        parent::init();
        $this->phone1 = \common\models\Phone::findOne(1);
        $this->phone2 = \common\models\Phone::findOne(2);
        $this->phone3 = \common\models\Phone::findOne(3);
    }

    public function run()
    {
        echo '<div class="row">';
        for($i=1; $i<3; $i++) {
            if ($i==1) {
                echo '<div class="col-md-6">';
                echo '<p class="phone">';
                echo $this->phone1->text;
            } if ($i==2) {
                echo '<div class="col-md-6 vertical-divider-left">';
                echo '<p class="phone">';
                echo $this->phone2->text;
            }

            echo '</p>';
            echo '</div>';
        }
        echo '</div>';
        echo '<hr>';
        echo '<div class="row">';
        echo '<div class="col-md-12">';
        echo $this->phone3->text;
        echo '</div>';
        echo '</div>';
    }
}
?>
<!--<div class="row">-->
<!--    <div class="col-md-6">-->
<!--        <p class="phone">З питань тимчасового поселення біженців<br>-->
<!--            5-20-32<br>-->
<!--            5-15-83</p>-->
<!--    </div>-->
<!--    <div class="col-md-6 vertical-divider-left">-->
<!--        <p class="phone">Допомоги військовослужбовцям, які беруть участь в АТО, та їхнім родинам<br>-->
<!--            5-20-32<br>-->
<!--            5-15-83</p>-->
<!--    </div>-->
<!--</div>-->
<!--<hr>-->
<!--<div class="row">-->
<!--    <div class="col-md-12">-->
<!--        <h4 class="text-center text-uppercase"><span class="glyphicon glyphicon-phone"></span>&nbsp;Урядова телефонна "Гаряча лінія"</h4>-->
<!---->
<!--        <p class="text-center"><big>0 800 507 309</big></p>-->
<!--    </div>-->
<!--</div>-->
