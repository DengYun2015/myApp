<?php
/**
 * @author: dengyun
 * @time: 2017/8/2 16:51
 */

namespace app\controllers;


/**
 * Class IndexController
 * @package app\controllers
 */
class IndexController extends BaseController
{
    /**
     * 后台主页
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}