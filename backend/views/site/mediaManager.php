<?php

use mihaildev\elfinder\ElFinder;
use yii\web\JsExpression;

$this->title = "File manager";
?>
<div class="file-manager">
<?= ElFinder::widget([
    'language' => 'ru',
    'controller' => 'elfinder', // ��������� �������� �����������, �� ��������� ����� elfinder
    'path' => '', // ����� ������� ����� �� �������� ����������� � ����������� ��������� ��� ���������
    'filter' =>
        [
            'image',
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'application/vnd.ms-excel',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ], // ������ ������, ����� ������ ������ �������� https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'callbackFunction' => new JsExpression('function(file, id){}') // id - id �������
]);?>
</div>
