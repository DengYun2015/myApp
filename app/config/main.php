<?php
/**
 * @author: dengyun
 * @time: 2017/3/9 11:07
 */

require_once __DIR__ . '/alias.php';
$params = require_once __DIR__.DIRECTORY_SEPARATOR.'params.php';
return [
    'id' => 'mysite',
    'basePath' => realpath('../'),
    'vendorPath' => VENDOR,
    'bootstrap' => ['log','debug'],
    'controllerNamespace' => 'app\controllers',
    'defaultRoute' => 'index/index',
    'language'=>'zh-CN',
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module',
            'historySize' => 10,
        ],
        'gii' => 'yii\gii\Module',
        //'test' => 'app\modules\TestModule',

    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'asdgfasmMna)(&)(123,',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\services\User',
            'enableAutoLogin' => true,
        ],
        'db'=>[
            'class'=>'yii\db\Connection',
            'dsn'=>'mysql:host=127.0.0.1;dbname=myapp',
            'username'=>'root',
            'password'=>'root',
            'charset'=>'utf8',
            'tablePrefix'=>'app_'
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
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
        'urlManager' => [
            'enablePrettyUrl' => false,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'params' => $params
];