<?php
/**
 * @author: dengyun
 * @time: 2017/4/20 14:28
 */

namespace console\controllers;


use frontend\services\Options;
use yii\console\Controller;

class TestController extends Controller
{

    public function actionIndex()
    {
        $nodes = Options::getCategoryNodes();
        print_r($nodes);
    }
}