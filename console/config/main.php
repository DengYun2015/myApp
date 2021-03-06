<?php
/**
 * @author: dengyun
 * @time: 2017/3/9 11:07
 */

 return [
    'id' => 'myAppConsole',
    'basePath' => dirname(__DIR__),
    'vendorPath' => VENDOR,
    'bootstrap' => ['log', 'gii'],
    'controllerNamespace' => 'console\controllers',
    //'defaultRoute' => 'site/index',
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'historySize' => 10,
        ],
        'gii' => 'yii\gii\Module',

    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
/*        'errorHandler' => [
            'errorAction' => 'site/error',
        ],*/
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
    'params' =>require __DIR__.'/params.php'
];