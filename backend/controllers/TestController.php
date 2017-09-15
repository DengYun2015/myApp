<?php
/**
 * @author: dengyun
 * @time: 2017/7/31 10:53
 */

namespace backend\controllers;


use backend\services\ContentTag;
use backend\services\User;
use yii\helpers\Url;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        $msg = '操作失败';
        $params['success'] = false;
        $params['msg'] = $msg;
        $params['buttons'] = [
            [
                'url' => "javascript:window.history.go(-1)",
                'name' => '返回'
            ],
            [
                'url' => Url::to(['content/list']),
                'name' => '查看列表'
            ],
        ];
        return $this->render('/common/msg',$params);
    }

    private function mdEdit(){
        $this->layout = 'base';
        return $this->render('index');
    }

    private function CreateTestUser()
    {
        $user  = new User();
        $user->username='dengyun';
        $user->name='管理员';
        $user->email='dengyun2016@foxmail.com';
        $user->status = User::STATUS_ACTIVE;
        $user->salt = md5(microtime(true).mt_rand(0,10000));
        $user->setPassword('test');
        $info = $user->save();
        if($info){
            echo 'success';
        }else{
            echo 'failed';
        }
    }
}