<?php
/**
 * @author: dengyun
 * @time: 2017/3/9 11:07
 */

$params = require_once __DIR__.DIRECTORY_SEPARATOR.'params.php';
$config = [
    'id' => 'mysite',
    'basePath' => realpath('../'),
    'controllerNamespace' => 'frontend\controllers',
    'defaultRoute' => 'index/index',
    'modules' => [],
    'components' => [
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params
];

$common_config = require APP_ROOT.'/common/config/main.php';

return \yii\helpers\ArrayHelper::merge($common_config,$config);