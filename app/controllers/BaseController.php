<?php
/**
 * @author: dengyun
 * @time: 2017/8/1 15:09
 */

namespace app\controllers;


use yii\web\Controller;

class BaseController extends Controller
{
    public function beforeAction($action)
    {
        if (\Yii::$app->user->isGuest){
            return $this->redirect(['site/login']);
        }
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }
}