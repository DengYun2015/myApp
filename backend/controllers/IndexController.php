<?php
/**
 * @author: dengyun
 * @time: 2017/8/2 16:51
 */

namespace backend\controllers;


/**
 * Class IndexController
 * @package backend\controllers
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