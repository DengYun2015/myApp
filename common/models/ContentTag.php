<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%content_tag}}".
 *
 * @property integer $id
 * @property integer $content_id
 * @property integer $tag_id
 * @property string $create_time
 * @property string $update_time
 */
class ContentTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%content_tag}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_id', 'tag_id', 'create_time'], 'required'],
            [['content_id', 'tag_id'], 'integer'],
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
            'content_id' => 'Content ID',
            'tag_id' => 'Tag ID',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
