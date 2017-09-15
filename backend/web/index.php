<?php
/**
 * @author: dengyun
 * @time: 2017/3/9 11:08
 */
define('VENDOR','../../vendor/');
define('APP_ROOT',realpath('../../'));
define('BACKEND_ROOT',dirname(__DIR__));
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require VENDOR.'autoload.php';
require VENDOR.'yiisoft\yii2\Yii.php';

$config = require BACKEND_ROOT.'/config/main.php';
(new yii\web\Application($config))->run();