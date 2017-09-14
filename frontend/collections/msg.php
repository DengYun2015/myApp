<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 16:44
 */

namespace frontend\collections;


use yii\base\Object;

class msg extends Object
{
    private $success = true;

    private $msg = '操作成功!';

    private $buttons = [
        [
            'url' => 'javascript:window.history.go(-1)',
            'name' => '返回上一页'
        ]
    ];

    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @return mixed
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param mixed $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * @return mixed
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param mixed $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    /**
     * @return mixed
     */
    public function getButtons()
    {
        return $this->buttons;
    }

    /**
     * @param mixed $buttons
     */
    public function setButtons($buttons)
    {
        $this->buttons = $buttons;
    }

}