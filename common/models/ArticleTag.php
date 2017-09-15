<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%article_tag}}".
 *
 * @property integer $id
 * @property integer $article_id
 * @property integer $tag_id
 * @property string $create_time
 * @property string $update_time
 */
class ArticleTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_tag}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'tag_id', 'create_time'], 'required'],
            [['article_id', 'tag_id'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'tag_id' => 'Tag ID',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
