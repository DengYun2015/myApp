<?php
/**
 * @author: dengyun
 * @time: 2017/3/10 11:44
 */

namespace app\assets\pages;


use app\assets\AdminLteBase;

class LoginAsset extends AdminLteBase
{
    public $depends = [
        'app\assets\AdminLteAsset',
        'app\assets\plugin\iCheck',
    ];
}