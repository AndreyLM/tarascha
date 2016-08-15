<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'redactor' => [
            'class' => 'yii\redactor\RedactorModule',
            'uploadDir' => '@frontend/web/img',
            'uploadUrl' => '@frontend/web/img',
            'imageAllowExtensions'=>['jpg','png','gif']
        ],
    ],
];

