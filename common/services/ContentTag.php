<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 16:09
 */

namespace common\services;


use common\services\Tags;

class ContentTag extends \common\models\ContentTag
{
    /**
     * @param int $contentId
     * @return array
     */
    public static function getContentTags($contentId)
    {
        $data = self::find()->select('tag_id')->where(['content_id'=>$contentId])->asArray()->all();
        $tags = [];
        foreach ($data as $row){
            $tags[$row['tag_id']] = Tags::getTagName($row['tag_id']);
        }
        return $tags;
    }
}