<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 16:09
 */

namespace common\services;


class ArticleTag extends \common\models\ArticleTag
{
    /**
     * @param int $contentId
     * @return array
     */
    public static function getContentTags($contentId)
    {
        $data = self::find()->select('tag_id')->where(['article_id'=>$contentId])->asArray()->all();
        $tags = [];
        foreach ($data as $row){
            $tags[$row['tag_id']] = Tags::getTagName($row['tag_id']);
        }
        return $tags;
    }
}