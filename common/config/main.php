<?php
/**
 * @author: dengyun
 * @time: 2017/9/15 15:51
 */

require __DIR__ . '/alias.php';

if (YII_ENV == YII_ENV_PROD) {
    $bootstrap = ['log'];
    $modules = [];
} else {
    $bootstrap = ['log', 'gii','debug'];
    $modules = [
        'debug' => [
            'class' => 'yii\debug\Module',
            'historySize' => 10,
        ],
        'gii' => 'yii\gii\Module',
    ];
}

return [
    'vendorPath' => VENDOR,
    'bootstrap' => $bootstrap,
    'modules' => $modules,
    'language' => 'zh-CN',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'asdgfasmMna)(&)(123,',
        ],
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
            'tablePrefix' => 'app_',
            'enableSchemaCache' => YII_ENV == YII_ENV_PROD,
        ],
        'urlManager' => [
            'enablePrettyUrl' => false,
            'showScriptName' => false,
            'rules' => [],
        ],
    ],
    'params' => require __DIR__ . '/params.php'
];