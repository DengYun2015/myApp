<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 15:46
 */

namespace common\services;


class Article extends \common\models\Article
{

    /**
     * @var array
     */
    protected $tags ;

    /**
     * @return array
     */
    public function getTags()
    {
        if(is_null($this->tags)){
            if(empty($this->id)){
                return [];
            }else{
                $this->tags = ArticleTag::getContentTags($this->id);
            }
        }
        return $this->tags;
    }

    /**
     * @param $id
     * @return Article|array
     */
    public static function getDetail($id)
    {
        $data = self::findOne($id);
        if (empty($data)) {
            return [];
        }
        $data->tags = ArticleTag::getContentTags($data->id);
        return $data;
    }
}