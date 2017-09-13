<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tags}}".
 *
 * @property integer $id
 * @property string $tag_name
 * @property string $create_time
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tags}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_name'], 'required'],
            [['create_time'], 'safe'],
            [['tag_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag_name' => 'Tag Name',
            'create_time' => 'Create Time',
        ];
    }
}
