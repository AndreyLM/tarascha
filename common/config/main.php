<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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

