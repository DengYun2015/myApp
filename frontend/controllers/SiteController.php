<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 18:53
 */

namespace frontend\controllers;


use frontend\services\Options;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return ['error' => 'yii\web\ErrorAction'];
    }

    public function actionIndex()
    {
    }
}