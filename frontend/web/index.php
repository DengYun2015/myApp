<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 14:43
 */

define('VENDOR','../../vendor/');
define('FRONTEND_ROOT',dirname(__DIR__).DIRECTORY_SEPARATOR);
define('APP_ROOT',realpath('../../'));
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require VENDOR.'autoload.php';
require VENDOR.'yiisoft\yii2\Yii.php';

$config = require  FRONTEND_ROOT.'/config/main.php';
(new yii\web\Application($config))->run();