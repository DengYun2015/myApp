<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $Id
 * @property string $username
 * @property string $name
 * @property string $email
 * @property integer $status
 * @property string $password_hash
 * @property string $salt
 * @property string $access_token
 * @property string $auth_key
 * @property string $password_reset_token
 * @property string $created_at
 * @property string $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'name', 'email', 'status', 'access_token', 'created_at'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['username'], 'string', 'max' => 60],
            [['name', 'salt', 'access_token', 'auth_key', 'password_reset_token'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 40],
            [['password_hash'], 'string', 'max' => 64],
            [['email'], 'unique'],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'username' => 'Username',
            'name' => 'Name',
            'email' => 'Email',
            'status' => '10',
            'password_hash' => 'Password Hash',
            'salt' => 'Salt',
            'access_token' => 'Access Token',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
