<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 15:29
 */
namespace frontend\services;

class Content extends \common\services\Content
{
    /**
     * @param int $page
     * @param int $size
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getList($page = 1, $size = 10)
    {
        $query = [
            'status' => 1,
        ];
        return self::find()->where($query)->offset(($page - 1) * $size)->limit($size)->orderBy('id desc')->all();
    }
}