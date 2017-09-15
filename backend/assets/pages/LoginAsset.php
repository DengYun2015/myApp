<?php
/**
 * @author: dengyun
 * @time: 2017/3/10 11:44
 */

namespace backend\assets\pages;


use backend\assets\AdminLteBase;

class LoginAsset extends AdminLteBase
{
    public $depends = [
        'backend\assets\AdminLteAsset',
        'backend\assets\plugin\iCheck',
    ];
}