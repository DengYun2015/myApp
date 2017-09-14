<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 15:46
 */

namespace common\services;

use common\models\Content as ContentModel;

class Content extends ContentModel
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
                $this->tags = ContentTag::getContentTags($this->id);
            }
        }
        return $this->tags;
    }

    /**
     * @param $id
     * @return Content|array
     */
    public static function getDetail($id)
    {
        $data = self::findOne($id);
        if (empty($data)) {
            return [];
        }
        $data->tags = ContentTag::getContentTags($data->id);
        return $data;
    }
}