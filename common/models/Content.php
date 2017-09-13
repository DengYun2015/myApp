<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%content}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $summary
 * @property string $content
 * @property integer $type
 * @property integer $version
 * @property integer $user_id
 * @property integer $status
 * @property string $create_time
 * @property string $update_time
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%content}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'summary', 'content', 'type', 'create_time'], 'required'],
            [['content'], 'string'],
            [['type', 'version', 'user_id', 'status'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['title', 'summary'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'summary' => 'Summary',
            'content' => 'Content',
            'type' => 'Type',
            'version' => 'Version',
            'user_id' => 'User ID',
            'status' => '0：删除，1：发布，3：草稿',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
