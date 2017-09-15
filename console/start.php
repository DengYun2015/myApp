<?php
/**
 * @author: dengyun
 * @time: 2017/3/31 16:11
 */

define('APP_ROOT','../');
define('VENDOR','../vendor/');
define('CONSOLE_ROOT',__DIR__);
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require VENDOR.'autoload.php';
require VENDOR.'yiisoft\yii2\Yii.php';

$config = require CONSOLE_ROOT.'/config/main.php';

(new yii\console\Application($config))->run();