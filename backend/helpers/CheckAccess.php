<?php
namespace backend\helpers;

class CheckAccess
{
    public static function Check() {
        if (\Yii::$app->user->id === 1 || \Yii::$app->user->id === 3) {
            return true;
        }

        echo "You don\'t have permission to this part of site <a href=\"http://www.tarashcha-rda.gov.ua\">return to main page</a>";
        return false;
    }
}