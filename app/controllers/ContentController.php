<?php
/**
 * @author: dengyun
 * @time: 2017/8/29 16:24
 */

namespace app\controllers;


use app\services\Content;
use app\services\Options;
use yii\helpers\Url;

class ContentController extends BaseController
{
    public function actionEdit($id = 0)
    {
        $request = \Yii::$app->request;
        if ($request->isPost) {
            $data = $request->post();
            $model = new Content();
            $params = [];
            if ($model->addContent($data)) {
                $params['success'] = true;
                $params['msg'] = '添加成功！';
                $params['buttons'] = [
                    [
                        'url' => Url::to(['list']),
                        'name' => '查看列表'
                    ],
                    [
                        'url' => Url::to(['detail', 'id' => $model->id]),
                        'name' => '查看详情'
                    ]
                ];
            } else {
                $msg = '添加失败！' . PHP_EOL;
                $msg .= print_r($model->getErrors(), true);
                $params['success'] = true;
                $params['msg'] = $msg;
                $params['buttons'] = [
                    [
                        'url' => "javascript:window.history.go(-1)",
                        'name' => '返回'
                    ],
                    [
                        'url' => Url::to(['list']),
                        'name' => '查看列表'
                    ],
                ];
            }
            return $this->render('/common/msg', $params);
        } else {
            $category = Options::getAllContentCotegory(0);
            $params = ['category' => $category];
            if ($id > 0) {
                $params['content'] = Content::getDetail($id);
            } else {
                $params['content'] = new Content();
            }
            return $this->render('edit', $params);
        }
    }

    public function actionDetail($id = '')
    {
        $content = Content::getDetail($id);
        return $this->render('detail', ['content' => $content]);
    }

    public function actionList($page = 1, $size = 20)
    {
        $list = Content::getList(\Yii::$app->user->id, $page, $size);
        $params = [
            'page' => $page,
            'size' => $size,
            'list' => $list
        ];
        return $this->render('list', $params);
    }
}