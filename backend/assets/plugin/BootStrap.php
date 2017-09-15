<?php
/**
 * @author: dengyun
 * @time: 2017/3/10 11:24
 */

namespace backend\assets\plugin;

use backend\assets\AdminLteBase;

class BootStrap extends AdminLteBase
{
    public $js = [
        'bootstrap/js/bootstrap.js'
    ];
    public $css=[
        'bootstrap/css/bootstrap.min.css',
        'bootstrap/css/bootstrap-theme.css',
        '//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'
    ];

    public $depends = [
        'backend\assets\plugin\Jquery'
    ];
}