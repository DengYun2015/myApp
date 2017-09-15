<?php
/**
 * @author: dengyun
 * @time: 2017/9/12 17:28
 */

namespace backend\services;


use yii\db\Exception;

class ArticleTag extends \common\services\ArticleTag
{

    /**
     * @param array $tags
     * @param int $contentId
     * @return array
     */
    public static function addContentTags($tags, $contentId)
    {
        $tagNameIds = Tags::getTagNameIds($tags);
        foreach ($tagNameIds as $key => $id) {
            $model = new self();
            $model->content_id = $contentId;
            $model->tag_id = $id;
            $model->create_time = date('Y-m-d H:i:s');
            try {
                if (!$model->save()) {
                    $log = [
                        'data' => [$contentId, $id],
                        'error' => $model->getErrors()
                    ];
                    \Yii::error($log, __METHOD__);
                    unset($tagNameIds[$key]);
                }
            } catch (Exception $e) {
                \Yii::error($e->getMessage(), __METHOD__);
            }
        }
        return $tagNameIds;
    }

}