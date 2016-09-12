<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'gallery' => [
            'class' => 'sadovojav\gallery\Module',
            'basePath' => '@webroot'
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ]
    ],

    'homeUrl' => '/admin',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
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
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
            'baseUrl' => '/admin',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'baseUrl' => 'http://tarashcha-rda.gov.ua/frontend/web/uploads',
                'basePath' => '@frontend/web/uploads',
                'path' => '',
                'name' => 'Global',
//
//                'plugin' => [
//                    'PluginAutoResize' => [
//                        'enable' => true,       // For control by volume driver
//                        'maxWidth' => 1024,       // Path to Water mark image
//                        'maxHeight' => 1024,       // Margin right pixel
//                        'quality' => 80,         // JPEG image save quality
//                        'targetType' => IMG_GIF | IMG_JPG | IMG_PNG | IMG_WBMP // Target image formats ( bit-field )
//                    ],
//                ],
            ],
        ],
    ],
    'params' => $params,
];
