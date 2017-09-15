<?php
/**
 * @author: dengyun
 * @time: 2017/3/10 11:29
 */

namespace backend\assets;


class AdminLteAsset extends AdminLteBase
{
    public $css = [
        'dist/css/AdminLTE.css',
        'dist/css/skins/_all-skins.min.css',
        /*'dist/css/skins/skin-blue.min.css'*/
        /*'dist/css/skins/skin-red.min.css'*/
    ];

    public $js = [
        'dist/js/app.min.js',
    ];

    public $depends = [
        'backend\assets\plugin\Font',
        'backend\assets\plugin\BootStrap',
        'backend\assets\plugin\Jquery',
    ];
}