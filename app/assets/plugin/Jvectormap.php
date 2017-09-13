<?php
/**
 * @author: dengyun
 * @time: 2017/8/4 10:43
 */

namespace app\assets\plugin;


class Jvectormap
{
    public $js = [
        'bootstrap/js/bootstrap.js'
    ];
    public $css=[
        'bootstrap/css/bootstrap.css',
        'bootstrap/css/bootstrap-theme.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'
    ];

    public $depends = [
        'app\assets\plugin\Jquery'
    ];
}