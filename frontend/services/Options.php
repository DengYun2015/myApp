<?php
/**
 * @author: dengyun
 * @time: 2017/9/15 11:47
 */

namespace frontend\services;


class Options extends \common\services\Options
{
    public static function getAllCategory()
    {
        $params = [
            'group'=>self::CONTENT_CATEGORY_GROUP,
            'is_deleted'=>0,
        ];
        $data = self::find()->select('name,option_key,option_value')->where($params)->all();
    }
}