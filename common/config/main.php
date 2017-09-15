<?php
/**
 * @author: dengyun
 * @time: 2017/9/15 15:51
 */

return [

    'basePath' => dirname(__DIR__),
    'vendorPath' => VENDOR,
    'bootstrap' => ['log', 'gii'],
    'modules' => [],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
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
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=myapp',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'tablePrefix' => 'app_'
        ],
    ],
    'params' => require __DIR__ . '/params.php'
];