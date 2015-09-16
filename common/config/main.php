<?php
return [
    'layout'=>'base',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => '@themes/unify/assets/plugins/jquery',
                    'js'=>['jquery.min.js']
                ],
            ],
            'appendTimestamp' => true,
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],
        'rightManager' => [
            'class' => 'common\components\DBRights',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
                ['class' => 'yii\rest\UrlRule', 'controller' => 'api/country'],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'api/package'],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'api/contest'],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'api/cart'],
            ],
        ],

    ],
];
