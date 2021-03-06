<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 15:29
 */

namespace frontend\services;

class Article extends \common\services\Article
{
    /**
     * @param int $page
     * @param int $size
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getList($page = 1, $size = 10, $category = 0)
    {
        $query = [
            'status' => 1,
        ];
        if ($category > 0) {
            $query['type'] = $category;
        }
        return self::find()->where($query)->offset(($page - 1) * $size)->limit($size)->orderBy('id desc')->all();
    }

    public static function getTotal($category = 0)
    {
        $query = [
            'status' => 1,
        ];
        if ($category > 0) {
            $query['type'] = $category;
        }
        return self::find()->where($query)->count();
    }

    /**
     * @param int $count
     * @return array|\common\models\Article[]
     */
    public static function getRecent($count = 5)
    {
        $query = [
            'status' => 1,
        ];
        if ($count > 0) {
             $count = intval($count);
        }
        return self::find()->select('title,id')->where($query)->orderBy('id desc')->limit($count)->all();
    }
}