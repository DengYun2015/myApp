<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 16:14
 */

namespace common\services;


class Options extends \common\models\Options
{
    const CONTENT_CATEGORY_GROUP = 'content_category';

    private static $contentCotegories = [];

    /**
     * @param int $parentNode
     * @return array|\common\models\Options[]
     */
    public static function getAllContentCotegory($parentNode = 0)
    {
        $query = [
            'is_deleted' => 0,
            'group' => self::CONTENT_CATEGORY_GROUP,
            'option_key' => $parentNode
        ];
        return self::find()->select('name,id')->where($query)->all();
    }


    /**
     * @param int $id
     * @return string
     */
    public static function getContentCotegory($id)
    {
        if (empty(self::$contentCotegories[$id])) {
            foreach (self::getAllContentCotegory() as $options) {
                self::$contentCotegories[$options->id] = $options->name;
            }
        }
        return isset(self::$contentCotegories[$id]) ? self::$contentCotegories[$id] : '默认分类';
    }
}