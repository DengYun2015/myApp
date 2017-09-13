<?php
/**
 * @author: dengyun
 * @time: 2017/3/31 16:55
 */

namespace frontend\models;


use yii\base\Model;

class Test extends Model
{
    public $userName;

    public $password;

    public $age;

    public function rules()
    {
        return [
            [['userName'], 'required'],
            ['age', 'range' , [1, 3]]
        ];
    }
}