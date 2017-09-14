<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 16:15
 */

namespace common\services;


class Tags extends \common\models\Tags
{

    private static $tagIdMaps;

    public static function getAllTagMaps()
    {
        if (empty(self::$tagIdMaps)) {
            /**
             * @var $data \common\models\Tags[]
             */
            $data = self::find()->select('id,tag_name')->all();
            $map = [];
            foreach ($data as $row) {
                $map[$row->id] = $row->tag_name;
            }
            self::$tagIdMaps = $map;
        }
        return self::$tagIdMaps;
    }

    public static function getTagName($id)
    {
        $idMap = self::getAllTagMaps();
        return empty($idMap[$id]) ? '':$idMap[$id];
    }
}