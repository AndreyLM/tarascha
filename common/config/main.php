<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		 'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=nf227389.mysql.ukraine.com.ua;dbname=nf227389_db',
            'username' => 'nf227389_db',
            'password' => 'znAhyJ7F',
            'charset' => 'utf8',
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

