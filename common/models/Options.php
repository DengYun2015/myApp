<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%options}}".
 *
 * @property string $id
 * @property string $name
 * @property string $group
 * @property string $option_key
 * @property string $option_value
 * @property integer $is_deleted
 * @property string $createtime
 * @property string $modifytime
 */
class Options extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%options}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'option_key'], 'required'],
            [['is_deleted'], 'integer'],
            [['createtime', 'modifytime'], 'safe'],
            [['name', 'group', 'option_key', 'option_value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'group' => '配置组',
            'option_key' => '配置key',
            'option_value' => '配置值',
            'is_deleted' => '1:已删除  0：未删除',
            'createtime' => 'Createtime',
            'modifytime' => 'Modifytime',
        ];
    }
}
