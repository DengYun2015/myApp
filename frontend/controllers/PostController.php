<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 14:43
 */

namespace frontend\controllers;

use frontend\collections\msg;
use frontend\services\Article;
use yii\data\Pagination;
use yii\web\Controller;

class PostController extends Controller
{
    /**
     * 文章列表
     * @param int $page
     * @param int $category
     * @return string
     */
    public function actionIndex($page = 1 ,$category = 0)
    {
        $category  = intval($category);
        $page = intval($page);
        $pageSize = 5;
        (is_int($page) && $page >= 0) or $page = 1;
        $list = Article::getList($page, $pageSize ,$category);
        $pageNation = new Pagination();
        $pageNation->page = $page-1;
        $pageNation->pageSize = $pageSize;
        $pageNation->totalCount = Article::getTotal($category);
        return $this->render('index', ['list' => $list,'pageNation'=>$pageNation]);
    }

    /**
     * 文章详情
     * @param string $id
     * @return string
     */
    public function actionDetail($id = '0')
    {
        $id = intval($id);
        if ($id < 1) {
            return $this->contentNotExist();
        }
        $detail = Article::getDetail($id);
        if (empty($detail)) {
            return $this->contentNotExist();
        }
        return $this->render('detail', ['content' => $detail]);
    }

    private function contentNotExist()
    {
        \Yii::$app->response->statusCode = 404;
        $data = [
            'success' => false,
            'msg' => '你访问的内容不存在 !',
        ];
        $msg = new msg($data);
        return $this->render('/common/msg', ['msg' => $msg]);
    }
}