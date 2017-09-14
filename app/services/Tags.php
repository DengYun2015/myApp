<?php
/**
 * @author: dengyun
 * @time: 2017/9/12 17:29
 */

namespace app\services;


use yii\db\Exception;

class Tags extends \common\services\Tags
{
    /**
     * @param string $tag
     * @return int
     */
    public static function addTag($tag)
    {
        $model = new self();
        $model->tag_name = $tag;
        $model->create_time = date('Y-m-d H:i:s');
        try {
            if ($model->save()) {
                return $model->id;
            } else {
                \Yii::error($model->getErrors(), __METHOD__);
                return 0;
            }
        } catch (Exception $e) {
            \Yii::error($e->getMessage(), __METHOD__);
            return 0;
        }
    }

    public static function getTagNameIds($tags)
    {
        $tagNameIds = [];
        $model = new self();
        $data = $model->find()->select('id,tag_name')->where(['tag_name' => $tags])->asArray()->all();
        foreach ($data as $row) {
            $tagNameIds[$row['tag_name']] = $row['id'];
        }

        foreach ($tags as $tag) {
            if (array_key_exists($tag, $tagNameIds)) {
                continue;
            } else {
                $tagNameIds[$tag] = self::addTag($tag);
            }
        }
        return array_unique($tagNameIds);
    }
}