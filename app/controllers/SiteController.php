<?php
/**
 * @author: dengyun
 * @time: 2017/3/9 11:33
 */

namespace app\controllers;


use app\forms\LoginForm;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public $layout = 'base';
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionLogin()
    {
        $error = '';
        if(Yii::$app->request->isPost){
            $loginForm = new LoginForm();
            $loginForm->load(Yii::$app->request->post());
            $res = $loginForm->login();
            if(!$res){
                $errs = $loginForm->getErrors();
                $error = array_shift($errs)[0];
            }else{
                return $this->goHome();
            }
        }
        return $this->render('index',['error'=>$error]);
    }

    public function actionIndex()
    {
        $user = Yii::$app->user;
        if($user->isGuest){
            return $this->goHome();
        }else{
            return $this->redirect(['index']);
        }
/*        \Yii::$app->response->format = 'json';
        return ['a'=>123,'b'=>566];*/
    }
}